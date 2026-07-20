/* Standalone prototype shell. In CI3, replace loadShell() with header/footer views. */
(function () {
  'use strict';
  var page = document.body.dataset.navPage || document.body.dataset.page || '';
  var primaryLinks = [
    { page: 'home', href: 'cablelink_modern_v2.html#home', label: 'Home' },
    // { page: 'about', href: 'cablelink_about.html', label: 'About Us' },
    { page: 'services', href: 'cablelink_services.html', label: 'Services' },
    { page: 'promos', href: 'cablelink_promos.html', label: 'Promos' },
    { page: 'payment', href: 'cablelink_payment.html#payment-facilities', label: 'Payment Facilities' }
  ];
  function removeLegacyShell() {
    var legacyHeader = document.querySelector('body > .site-header');
    var legacyMobile = document.querySelector('body > .mob-menu');
    var legacyFooter = document.querySelector('body > footer:not(.global-footer)');
    if (legacyHeader) legacyHeader.remove();
    if (legacyMobile) legacyMobile.remove();
    if (legacyFooter) legacyFooter.remove();
  }
  function setActiveLink(scope) {
    scope.querySelectorAll('[data-page-link]').forEach(function (link) {
      if (link.dataset.pageLink === page) link.setAttribute('aria-current', 'page');
    });
  }
  function ensurePrimaryNavigation(header) {
    var nav = header.querySelector('.global-nav');
    var headerInner = header.querySelector('.global-header-inner');

    if (!headerInner) return;
    if (!nav) {
      var primaryNav = document.createElement('nav');
      primaryNav.className = 'global-primary-nav';
      primaryNav.setAttribute('aria-label', 'Primary navigation');
      nav = document.createElement('ul');
      nav.className = 'global-nav';
      primaryNav.appendChild(nav);
      headerInner.insertBefore(primaryNav, headerInner.querySelector('.global-cta'));
    }
    var retiredLink = nav.querySelector('[data-page-link="internet-plans"]');
    if (retiredLink) retiredLink.closest('li').remove();

    primaryLinks.forEach(function (item) {
      var link = nav.querySelector('[data-page-link="' + item.page + '"]');
      var listItem;

      if (!link) {
        listItem = document.createElement('li');
        link = document.createElement('a');
        link.dataset.pageLink = item.page;
        link.href = item.href;
        link.textContent = item.label;
        listItem.appendChild(link);
      } else {
        listItem = link.closest('li');
      }

      nav.appendChild(listItem);
    });

    if (!header.querySelector('.global-cta')) {
      var cta = document.createElement('a');
      cta.className = 'btn global-cta';
      cta.href = 'cablelink_apply.html';
      cta.textContent = 'Get Connected';
      headerInner.appendChild(cta);
    }
  }
  function ensureMobileNavigation(mobile) {
    var linkList;

    if (!mobile) {
      mobile = document.createElement('nav');
      mobile.className = 'global-mobile-menu';
      document.body.prepend(mobile);
    }

    mobile.id = 'mobile-navigation';
    mobile.setAttribute('aria-label', 'Mobile navigation');
    mobile.setAttribute('aria-hidden', 'true');
    linkList = mobile.querySelector('.global-mobile-menu__links');
    if (!linkList) {
      linkList = document.createElement('div');
      linkList.className = 'global-mobile-menu__links';
      mobile.querySelectorAll('a:not(.global-cta)').forEach(function (link) {
        linkList.appendChild(link);
      });
      mobile.insertBefore(linkList, mobile.querySelector('.global-cta'));
    }
    var retiredMobileLink = linkList.querySelector('[data-page-link="internet-plans"]');
    if (retiredMobileLink) retiredMobileLink.remove();
    primaryLinks.forEach(function (item) {
      if (linkList.querySelector('[data-page-link="' + item.page + '"]')) return;
      var link = document.createElement('a');
      link.dataset.pageLink = item.page;
      link.href = item.href;
      link.textContent = item.label;
      linkList.appendChild(link);
    });
    if (!mobile.querySelector('.global-cta')) {
      var cta = document.createElement('a');
      cta.className = 'btn global-cta';
      cta.href = 'cablelink_apply.html';
      cta.textContent = 'Get Connected';
      mobile.appendChild(cta);
    }
    return mobile;
  }
  function ensureMenuButton(header) {
    var headerInner = header.querySelector('.global-header-inner');
    var button = header.querySelector('.global-menu-button');
    var icon;

    if (!headerInner) return null;
    if (!button) {
      button = document.createElement('button');
      button.className = 'global-menu-button';
      button.type = 'button';
      headerInner.appendChild(button);
    }
    button.setAttribute('aria-controls', 'mobile-navigation');
    button.setAttribute('aria-label', 'Open menu');
    button.setAttribute('aria-expanded', 'false');
    icon = button.querySelector('.global-menu-button__icon');
    if (!icon) {
      button.textContent = '';
      icon = document.createElement('span');
      icon.className = 'global-menu-button__icon';
      icon.setAttribute('aria-hidden', 'true');
      icon.appendChild(document.createElement('span'));
      icon.appendChild(document.createElement('span'));
      icon.appendChild(document.createElement('span'));
      button.appendChild(icon);
    }
    return button;
  }
  function setupServicesMegaMenu(header) {
    var item = header.querySelector('.global-nav__item--services');
    var servicesLink;
    var menu;
    var closeTimer;
    var suppressFocusOpen = false;

    if (!item) return;
    servicesLink = item.querySelector('.global-nav__services-link');
    menu = item.querySelector('.mega-menu');
    if (!servicesLink || !menu) return;

    function openMenu() {
      window.clearTimeout(closeTimer);
      item.classList.add('is-open');
      servicesLink.setAttribute('aria-expanded', 'true');
    }
    function closeMenu() {
      window.clearTimeout(closeTimer);
      item.classList.remove('is-open');
      servicesLink.setAttribute('aria-expanded', 'false');
    }
    function scheduleClose() {
      window.clearTimeout(closeTimer);
      closeTimer = window.setTimeout(function () {
        if (!item.matches(':hover') && !item.contains(document.activeElement)) closeMenu();
      }, 300);
    }

    servicesLink.addEventListener('keydown', function (event) {
      if (event.key === 'ArrowDown') {
        event.preventDefault();
        openMenu();
        menu.querySelector('.mega-menu__links a').focus();
      }
    });
    item.addEventListener('mouseenter', openMenu);
    item.addEventListener('mouseleave', scheduleClose);
    menu.addEventListener('mouseenter', openMenu);
    menu.addEventListener('mouseleave', scheduleClose);
    item.addEventListener('focusin', function () {
      if (suppressFocusOpen) {
        suppressFocusOpen = false;
        return;
      }
      openMenu();
    });
    item.addEventListener('focusout', function (event) {
      if (!item.contains(event.relatedTarget)) scheduleClose();
    });
    menu.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', closeMenu);
    });
    document.addEventListener('click', function (event) {
      if (!item.contains(event.target)) closeMenu();
    });
    document.addEventListener('keydown', function (event) {
      if (event.key === 'Escape' && item.classList.contains('is-open')) {
        closeMenu();
        suppressFocusOpen = true;
        servicesLink.focus();
      }
    });
  }
  function ensureServicesMegaMenuHelp(header) {
    var menu = header.querySelector('.mega-menu');
    var inner;
    var help;

    if (!menu) return;
    inner = menu.querySelector('.mega-menu__inner');
    if (!inner || inner.querySelector('.mega-menu__help')) return;

    help = document.createElement('aside');
    help.className = 'mega-menu__help';
    help.innerHTML = '<div><p class="mega-menu__help-title">Need help choosing?</p><p class="mega-menu__help-copy">We&rsquo;ll help you find the best plan for your needs.</p><a class="btn btn-secondary mega-menu__cta" href="cablelink_apply.html">Talk to Us <span aria-hidden="true">&rarr;</span></a></div>';
    inner.appendChild(help);
  }
  function loadShell() {
    removeLegacyShell();
    Promise.all([
      fetch('partials/header.html', { cache: 'no-store' }).then(function (response) { return response.text(); }),
      fetch('partials/footer.html', { cache: 'no-store' }).then(function (response) { return response.text(); })
    ]).then(function (parts) {
      var shell = document.createElement('div');
      shell.innerHTML = parts[0];
      var header = shell.querySelector('.global-header');
      var mobile = shell.querySelector('.global-mobile-menu');
      if (!header) throw new Error('CableLink header partial is missing .global-header.');
      if (mobile) document.body.prepend(mobile);
      document.body.prepend(header);
      document.body.insertAdjacentHTML('beforeend', parts[1]);
      ensurePrimaryNavigation(header);
      mobile = ensureMobileNavigation(mobile);
      header.insertAdjacentElement('afterend', mobile);
      var button = ensureMenuButton(header);
      ensureServicesMegaMenuHelp(header);
      setActiveLink(header);
      setActiveLink(mobile);
      setupServicesMegaMenu(header);
      if (!button || !mobile) return;

      function setMobileMenu(open, returnFocus) {
        mobile.classList.toggle('is-open', open);
        mobile.setAttribute('aria-hidden', String(!open));
        button.classList.toggle('is-open', open);
        button.setAttribute('aria-expanded', String(open));
        button.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
        document.documentElement.classList.toggle('is-mobile-menu-open', open);
        document.body.classList.toggle('is-mobile-menu-open', open);

        if (open) {
          var firstLink = mobile.querySelector('a');
          if (firstLink) firstLink.focus();
        } else if (returnFocus) {
          button.focus();
        }
      }

      button.addEventListener('click', function () {
        setMobileMenu(!mobile.classList.contains('is-open'), false);
      });
      mobile.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
          setMobileMenu(false, false);
        });
      });
      document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && mobile.classList.contains('is-open')) {
          setMobileMenu(false, true);
        }
        if (event.key === 'Tab' && mobile.classList.contains('is-open')) {
          var focusable = [button].concat(Array.from(mobile.querySelectorAll('a')));
          var currentIndex = focusable.indexOf(document.activeElement);
          var nextIndex;

          if (currentIndex === -1) return;
          nextIndex = event.shiftKey ? currentIndex - 1 : currentIndex + 1;
          if (nextIndex < 0) nextIndex = focusable.length - 1;
          if (nextIndex >= focusable.length) nextIndex = 0;
          event.preventDefault();
          focusable[nextIndex].focus();
        }
      });
      document.addEventListener('click', function (event) {
        if (mobile.classList.contains('is-open') && !mobile.contains(event.target) && !button.contains(event.target)) {
          setMobileMenu(false, false);
        }
      });
      window.matchMedia('(min-width: 1051px)').addEventListener('change', function (event) {
        if (event.matches) setMobileMenu(false, false);
      });
    }).catch(function (error) {
      console.error('CableLink shell could not load. Use a local HTTP server.', error);
    });
  }
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', loadShell);
  else loadShell();
}());
