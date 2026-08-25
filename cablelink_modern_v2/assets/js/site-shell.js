/* Standalone prototype shell. In CI3, replace loadShell() with header/footer views. */
(function () {
  'use strict';
  var page = document.body.dataset.navPage || document.body.dataset.page || '';
  var primaryLinks = [
    { page: 'home', href: 'cablelink_modern_v2.html#home', label: 'Home' },
    // { page: 'about', href: 'cablelink_about.html', label: 'About Us' },
    { page: 'services', href: 'cablelink_services.html', label: 'Services' },
    { page: 'promos', href: 'cablelink_promos.html', label: 'Promos' },
    { page: 'payment', href: 'cablelink_payment.html#payment-facilities', label: 'Payment Facilities' },
    { page: 'support', href: 'cablelink_billing_faq.html', label: 'Support' },
    { page: 'advisories', href: 'cablelink_advisories.html', label: 'Advisories' }
  ];
  var config = window.CablelinkConfig || { externalLinks: {} };
  function removeLegacyShell() {
    var legacyHeader = document.querySelector('body > .site-header');
    var legacyMobile = document.querySelector('body > .mob-menu');
    var legacyFooter = document.querySelector('body > footer:not(.global-footer)');
    if (legacyHeader) legacyHeader.remove();
    if (legacyMobile) legacyMobile.remove();
    if (legacyFooter) legacyFooter.remove();
    document.querySelectorAll('#privacy-entry-modal').forEach(function (modal) { modal.remove(); });
  }
  function setActiveLink(scope) {
    scope.querySelectorAll('[data-page-link]').forEach(function (link) {
      if (link.dataset.pageLink === page) link.setAttribute('aria-current', 'page');
    });
  }
  function configureExternalLinks(scope) {
    var available = 0;
    scope.querySelectorAll('[data-config-link]').forEach(function (link) {
      var key = link.dataset.configLink;
      var href = (config.externalLinks && config.externalLinks[key]) || link.getAttribute('href');

      if (!href) {
        link.hidden = true;
        link.removeAttribute('href');
        return;
      }

      link.href = href;
      link.hidden = false;
      available += 1;
    });

    scope.querySelectorAll('.global-footer__social').forEach(function (group) {
      group.hidden = available === 0;
      if (group.parentElement) {
        group.parentElement.classList.toggle('global-footer-inner--no-social', available === 0);
      }
    });
  }
  function configurePlaceholderLinks(scope) {
    scope.querySelectorAll('[data-config-placeholder-link]').forEach(function (link) {
      var key = link.dataset.configPlaceholderLink;
      var href = config.externalLinks && config.externalLinks[key];

      if (href) {
        link.href = href;
        link.removeAttribute('aria-disabled');
        link.classList.remove('is-placeholder');
      } else {
        link.removeAttribute('href');
        link.setAttribute('aria-disabled', 'true');
        link.classList.add('is-placeholder');
        link.title = 'Destination pending client confirmation';
      }
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

      if (link) return;
      listItem = document.createElement('li');
      link = document.createElement('a');
      link.dataset.pageLink = item.page;
      link.href = item.href;
      link.textContent = item.label;
      listItem.appendChild(link);
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
    var menuInner;
    var closeTimer;
    var suppressFocusOpen = false;

    if (!item) return;
    servicesLink = item.querySelector('.global-nav__services-link');
    menu = item.querySelector('.mega-menu');
    menuInner = menu && menu.querySelector('.mega-menu__inner');
    if (!servicesLink || !menu || !menuInner) return;

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
    function schedulePointerClose() {
      window.clearTimeout(closeTimer);
      closeTimer = window.setTimeout(function () {
        if (servicesLink.matches(':hover') || menuInner.matches(':hover')) return;
        if (item.contains(document.activeElement) && document.activeElement.blur) document.activeElement.blur();
        closeMenu();
      }, 180);
    }

    servicesLink.addEventListener('keydown', function (event) {
      if (event.key === 'ArrowDown') {
        event.preventDefault();
        openMenu();
        menu.querySelector('.mega-menu__links a').focus();
      }
    });
    item.addEventListener('mouseenter', openMenu);
    item.addEventListener('mouseleave', schedulePointerClose);
    menu.addEventListener('mouseenter', openMenu);
    menu.addEventListener('mouseleave', schedulePointerClose);
    menuInner.addEventListener('mouseenter', openMenu);
    menuInner.addEventListener('mouseleave', schedulePointerClose);
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
  function setupSupportMenu(header) {
    var item = header.querySelector('.global-nav__item--support');
    var supportLink;
    var menu;
    var menuInner;
    var closeTimer;
    var suppressFocusOpen = false;

    if (!item) return;
    supportLink = item.querySelector('.global-nav__support-link');
    menu = item.querySelector('.mega-menu');
    menuInner = menu && menu.querySelector('.support-mega__inner');
    if (!supportLink || !menu || !menuInner) return;

    function openMenu() {
      window.clearTimeout(closeTimer);
      item.classList.add('is-open');
      supportLink.setAttribute('aria-expanded', 'true');
    }
    function closeMenu(returnFocus) {
      window.clearTimeout(closeTimer);
      item.classList.remove('is-open');
      supportLink.setAttribute('aria-expanded', 'false');
      if (returnFocus) {
        suppressFocusOpen = true;
        supportLink.focus();
      }
    }
    function schedulePointerClose() {
      window.clearTimeout(closeTimer);
      closeTimer = window.setTimeout(function () {
        if (supportLink.matches(':hover') || menuInner.matches(':hover')) return;
        if (item.contains(document.activeElement) && document.activeElement.blur) document.activeElement.blur();
        closeMenu(false);
      }, 180);
    }

    supportLink.addEventListener('keydown', function (event) {
      if (event.key === 'ArrowDown') {
        event.preventDefault();
        openMenu();
        menu.querySelector('a').focus();
      }
    });
    item.addEventListener('mouseenter', openMenu);
    item.addEventListener('mouseleave', schedulePointerClose);
    menu.addEventListener('mouseenter', openMenu);
    menu.addEventListener('mouseleave', schedulePointerClose);
    menuInner.addEventListener('mouseenter', openMenu);
    menuInner.addEventListener('mouseleave', schedulePointerClose);
    item.addEventListener('focusin', function () {
      if (suppressFocusOpen) {
        suppressFocusOpen = false;
        return;
      }
      openMenu();
    });
    item.addEventListener('focusout', function (event) {
      if (!item.contains(event.relatedTarget)) closeMenu(false);
    });
    document.addEventListener('click', function (event) {
      if (!item.contains(event.target)) closeMenu(false);
    });
    document.addEventListener('keydown', function (event) {
      if (event.key === 'Escape' && item.classList.contains('is-open')) closeMenu(true);
    });
  }
  function setupNeedHelpMenu(header) {
    var item = header.querySelector('.global-nav__item--need-help');
    var trigger;
    var menu;
    var suppressFocusOpen = false;

    if (!item) return;
    trigger = item.querySelector('.global-nav__need-help-link');
    menu = item.querySelector('.mega-menu');
    if (!trigger || !menu) return;

    function openMenu() {
      item.classList.add('is-open');
      trigger.setAttribute('aria-expanded', 'true');
    }
    function closeMenu(returnFocus) {
      item.classList.remove('is-open');
      trigger.setAttribute('aria-expanded', 'false');
      if (returnFocus) {
        suppressFocusOpen = true;
        trigger.focus();
      }
    }

    trigger.addEventListener('keydown', function (event) {
      if (event.key === 'ArrowDown') {
        event.preventDefault();
        openMenu();
        menu.querySelector('a').focus();
      }
    });
    item.addEventListener('mouseenter', openMenu);
    item.addEventListener('mouseleave', function () {
      if (!item.contains(document.activeElement)) closeMenu(false);
    });
    item.addEventListener('focusin', function () {
      if (suppressFocusOpen) {
        suppressFocusOpen = false;
        return;
      }
      openMenu();
    });
    item.addEventListener('focusout', function (event) {
      if (!item.contains(event.relatedTarget)) closeMenu(false);
    });
    document.addEventListener('click', function (event) {
      if (!item.contains(event.target)) closeMenu(false);
    });
    document.addEventListener('keydown', function (event) {
      if (event.key === 'Escape' && item.classList.contains('is-open')) closeMenu(true);
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
    help.innerHTML = '<div><p class="mega-menu__help-title">Need help choosing?</p><p class="mega-menu__help-copy">Choose a direct contact channel.</p><div class="mega-menu__help-actions"><a class="btn btn-secondary mega-menu__cta" data-config-link="messenger" target="_blank" rel="noopener noreferrer" hidden>Messenger</a><a class="btn btn-secondary mega-menu__cta" data-config-link="viber" target="_blank" rel="noopener noreferrer" hidden>Viber</a><a class="btn btn-secondary mega-menu__cta" href="cablelink_contact.html">Contact Us <span class="action-arrow" aria-hidden="true"><svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></span></a></div></div>';
    inner.appendChild(help);
  }
  function ensureCorporateMegaMenuGroup(header) {
    var menu = header.querySelector('.mega-menu');
    var inner;
    var corporate;
    var help;

    if (!menu) return;
    inner = menu.querySelector('.mega-menu__inner');
    if (!inner) return;
    corporate = inner.querySelector('.mega-menu__group--corporate');
    if (!corporate) {
      corporate = inner.querySelector('.mega-menu__icon--corporate');
      corporate = corporate ? corporate.closest('.mega-menu__group') : null;
    }
    if (!corporate) {
      corporate = document.createElement('div');
      help = inner.querySelector('.mega-menu__help');
      if (help) inner.insertBefore(corporate, help);
      else inner.appendChild(corporate);
    }

    corporate.className = 'mega-menu__group mega-menu__group--corporate';
    if (corporate.querySelector('.mega-menu__title')) return;
    corporate.innerHTML = '<div class="mega-menu__group-heading"><span class="mega-menu__icon mega-menu__icon--corporate" aria-hidden="true"><svg viewBox="0 0 24 24"><rect x="3" y="7" width="18" height="13" rx="2" /><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2M3 12h18M10 12v2h4v-2" /></svg></span><a class="mega-menu__title" href="cablelink_services.html">Enterprise</a></div><p class="mega-menu__description">Final enterprise products and availability require client confirmation.</p>';
  }
  function loadShell() {
    removeLegacyShell();
    Promise.all([
      fetch('partials/header.inc', { cache: 'no-store' }).then(function (response) { return response.text(); }),
      fetch('partials/footer.inc', { cache: 'no-store' }).then(function (response) { return response.text(); }),
      fetch('partials/privacy-modal.html', { cache: 'no-store' }).then(function (response) { return response.text(); }),
      fetch('partials/search-modal.html', { cache: 'no-store' }).then(function (response) { return response.text(); })
    ]).then(function (parts) {
      var shell = document.createElement('div');
      shell.innerHTML = parts[0];
      var header = shell.querySelector('.global-header');
      var mobile = shell.querySelector('.global-mobile-menu');
      if (!header) throw new Error('Cablelink header partial is missing .global-header.');
      if (mobile) document.body.prepend(mobile);
      document.body.prepend(header);
      document.body.insertAdjacentHTML('beforeend', parts[1]);
      document.body.insertAdjacentHTML('beforeend', parts[2]);
      document.body.insertAdjacentHTML('beforeend', parts[3]);
      ensurePrimaryNavigation(header);
      mobile = ensureMobileNavigation(mobile);
      header.insertAdjacentElement('afterend', mobile);
      var button = ensureMenuButton(header);
      ensureCorporateMegaMenuGroup(header);
      ensureServicesMegaMenuHelp(header);
      configureExternalLinks(document);
      configurePlaceholderLinks(document);
      document.querySelectorAll('[data-current-year]').forEach(function (year) {
        year.textContent = String(new Date().getFullYear());
      });
      setActiveLink(header);
      setActiveLink(mobile);
      setupServicesMegaMenu(header);
      setupSupportMenu(header);
      setupNeedHelpMenu(header);
      setupEmailOptions();
      setupPrivacyModal();
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
      setupSiteSearch(function () { setMobileMenu(false, false); });
    }).catch(function (error) {
      console.error('Cablelink shell could not load. Use a local HTTP server.', error);
    });
  }
  function setupSiteSearch(closeMobileMenu) {
    var modal = document.getElementById('site-search-modal');
    var form;
    var input;
    var status;
    var results;
    var previousFocus = null;
    var entries = [

      /* Ã¢â€â‚¬Ã¢â€â‚¬ PAGES Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬ */
      { category: 'Page', title: 'Home', description: 'Cablelink internet and Cable TV homepage.', href: 'cablelink_modern_v2.html', keywords: 'home welcome overview' },
      { category: 'Page', title: 'Services', description: 'Residential internet, Cable TV, bundled plans, and enterprise services.', href: 'cablelink_services.html', keywords: 'services residential commercial enterprise selection' },
      { category: 'Page', title: 'Internet Plans', description: 'Review Cablelink residential internet plan options.', href: 'cablelink_internet_plans1.html', keywords: 'internet iblaze fiberlink residential plans' },
      { category: 'Page', title: 'Plans & Pricing', description: 'Compare all Cablelink plan groups and pricing.', href: 'cablelink_plans.html#bundle-groups', keywords: 'plans pricing bundles supercharged turbocharged' },
      { category: 'Page', title: 'Channel Line-up', description: 'Browse the current Cable TV channel line-up.', href: 'cablelink_channels.html', keywords: 'cable tv channels lineup basic lite plus' },
      { category: 'Page', title: 'Promos', description: 'Browse current Cablelink promotional offers.', href: 'cablelink_promos.html', keywords: 'promos offers deals promotions' },
      { category: 'Page', title: 'Payment Facilities', description: 'Find payment methods, partners, offices, and auto-debit enrollment.', href: 'cablelink_payment.html', keywords: 'payments banks auto debit billing offices partners' },
      { category: 'Page', title: 'Support & FAQs', description: 'Billing, account, and technical support for subscribers and new customers.', href: 'cablelink_billing_faq.html', keywords: 'support faq help troubleshooting billing account' },
      { category: 'Page', title: 'Contact Us', description: 'Cablelink contact and messaging options.', href: 'cablelink_contact.html', keywords: 'contact hotline email messenger viber instagram offices' },
      { category: 'Page', title: 'Advisories', description: 'Channel, service, alarm, and outage advisories.', href: 'cablelink_advisories.html', keywords: 'advisories channel service alarms outages maintenance' },
      { category: 'Page', title: 'Get Connected', description: 'Check serviceability and begin a Cablelink subscription application.', href: 'cablelink_apply.html', keywords: 'apply application availability coverage get connected sign up' },
      { category: 'Page', title: 'About Us', description: 'Cablelink company information, mission, and milestones.', href: 'cablelink_about.html', keywords: 'about company mission vision profile milestones history' },
      { category: 'Page', title: 'Privacy Notice', description: 'Cablelink data privacy notice and policy.', href: 'cablelink_privacy.html', keywords: 'privacy notice policy data personal information' },
      { category: 'Page', title: 'Careers', description: 'Career and employment opportunities at Cablelink.', href: 'cablelink_careers.html', keywords: 'careers jobs employment hiring' },

      /* Ã¢â€â‚¬Ã¢â€â‚¬ SERVICES Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬ */
      { category: 'Service', title: 'Residential Internet \u2014 I-Blaze (DOCSIS)', description: 'Cable internet shared through existing cable TV infrastructure. Available in Supercharged and Turbocharged tiers.', href: 'cablelink_plans.html?line=iblaze#bundle-groups', keywords: 'iblaze docsis residential internet cable shared supercharged turbocharged' },
      { category: 'Service', title: 'Residential Internet \u2014 FiberLink (FTTH)', description: 'Dedicated fiber-optic cable direct to your home. Available in Supercharged and Turbocharged tiers.', href: 'cablelink_plans.html?line=fiberlink#bundle-groups', keywords: 'fiberlink ftth fiber to the home residential internet dedicated supercharged turbocharged' },
      { category: 'Service', title: 'Cable TV \u2014 Basic 495, Basic Lite, Basic Plus', description: 'Cable TV packages for Digitally Activated areas: Basic 495 (65 ch), Basic Lite (53 ch), Basic Plus (126 ch).', href: 'cablelink_plans.html?filter=cable#bundle-groups', keywords: 'cable tv basic 495 65 channels basic lite 53 basic plus 126 digitally activated' },
      { category: 'Service', title: 'Bundled Plans \u2014 Supercharged & Turbocharged', description: 'Supercharged bundles Internet + Basic Plus. Turbocharged bundles Internet + Basic Lite.', href: 'cablelink_plans.html#bundle-groups', keywords: 'bundle bundled plans supercharged turbocharged internet cable combo basic plus basic lite' },
      { category: 'Service', title: 'Enterprise Services', description: 'Business and enterprise service enquiries \u2014 contact Cablelink to discuss requirements and availability.', href: 'cablelink_contact.html', keywords: 'enterprise business commercial corporate service enquiry' },

      /* Ã¢â€â‚¬Ã¢â€â‚¬ PLANS Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬ */
      /* Supercharged = Internet + Basic Plus (126 ch) */
      { category: 'Plan', title: 'Supercharged I-Blaze@Home \u2014 from \u20B1588/mo', description: 'DOCSIS cable internet + Basic Plus (126 channels). Tiers: 20, 30, 35, 50, 88, 120 Mbps.', href: 'cablelink_plans.html?filter=supercharged&line=iblaze#bundle-groups', keywords: 'supercharged iblaze docsis 20mbps 30mbps 35mbps 50mbps 88mbps 120mbps 588 888 999 1088 1388 1699 basic plus 126 channels' },
      { category: 'Plan', title: 'Supercharged FiberLink@Home \u2014 from \u20B1888/mo', description: 'FTTH fiber + Basic Plus (126 channels). Tiers: 50, 75, 88, 188, 300 Mbps.', href: 'cablelink_plans.html?filter=supercharged&line=fiberlink#bundle-groups', keywords: 'supercharged fiberlink fiber ftth 50mbps 75mbps 88mbps 188mbps 300mbps 888 999 1088 1388 1699 basic plus 126 channels' },
      /* Turbocharged = Internet + Basic Lite (53 ch) */
      { category: 'Plan', title: 'Turbocharged I-Blaze@Home \u2014 from \u20B1599/mo', description: 'DOCSIS cable internet + Basic Lite (53 channels). Tiers: 30, 50, 100 Mbps.', href: 'cablelink_plans.html?filter=turbocharged&line=iblaze#bundle-groups', keywords: 'turbocharged iblaze docsis 30mbps 50mbps 100mbps 599 999 1499 basic lite 53 channels budget' },
      { category: 'Plan', title: 'Turbocharged FiberLink@Home \u2014 from \u20B1599/mo', description: 'FTTH fiber + Basic Lite (53 channels). Tiers: 50, 200, 300 Mbps.', href: 'cablelink_plans.html?filter=turbocharged&line=fiberlink#bundle-groups', keywords: 'turbocharged fiberlink fiber ftth 50mbps 200mbps 300mbps 599 999 1299 basic lite 53 channels gigabit budget' },
      /* Tier-only combos */
      { category: 'Plan', title: 'All Supercharged Plans \u2014 I-Blaze & FiberLink', description: 'Internet + Basic Plus (126 ch). I-Blaze DOCSIS from \u20B1588 and FiberLink FTTH from \u20B1888.', href: 'cablelink_plans.html?filter=supercharged#bundle-groups', keywords: 'supercharged all plans iblaze fiberlink docsis fiber ftth basic plus 126 bundle' },
      { category: 'Plan', title: 'All Turbocharged Plans \u2014 I-Blaze & FiberLink', description: 'Internet + Basic Lite (53 ch). I-Blaze DOCSIS from \u20B1599 and FiberLink FTTH from \u20B1599.', href: 'cablelink_plans.html?filter=turbocharged#bundle-groups', keywords: 'turbocharged all plans iblaze fiberlink docsis fiber ftth basic lite 53 bundle budget' },
      /* Line-only combos */
      { category: 'Plan', title: 'All I-Blaze Plans \u2014 Supercharged & Turbocharged', description: 'DOCSIS cable internet plans. Supercharged (Basic Plus) from \u20B1588, Turbocharged (Basic Lite) from \u20B1599.', href: 'cablelink_plans.html?line=iblaze#bundle-groups', keywords: 'iblaze docsis all plans supercharged turbocharged cable internet 20 30 35 50 88 100 120 mbps' },
      { category: 'Plan', title: 'All FiberLink Plans \u2014 Supercharged & Turbocharged', description: 'FTTH fiber-to-the-home plans. Supercharged (Basic Plus) from \u20B1888, Turbocharged (Basic Lite) from \u20B1599.', href: 'cablelink_plans.html?line=fiberlink#bundle-groups', keywords: 'fiberlink fiber ftth all plans supercharged turbocharged 50 75 88 188 200 300 mbps' },
      /* Cable TV */
      { category: 'Plan', title: 'Basic Lite \u2014 53 Live Channels', description: 'Entry-level cable TV for Digitally Activated areas. 53 live channels. Available standalone or as Turbocharged bundle.', href: 'cablelink_plans.html?filter=cable#bundle-groups', keywords: 'basic lite cable tv 53 channels standalone subscription digitally activated turbocharged' },
      { category: 'Plan', title: 'Basic 495 \u2014 65 Live Channels', description: 'Cable TV for Digitally Activated areas. 65 live channels.', href: 'cablelink_plans.html?filter=cable#bundle-groups', keywords: 'basic 495 cable tv 65 channels standalone subscription digitally activated' },
      { category: 'Plan', title: 'Basic Plus \u2014 126 Live Channels', description: 'Full cable TV for Digitally Activated areas. 126 live channels. Available standalone or as Supercharged bundle.', href: 'cablelink_plans.html?filter=cable#bundle-groups', keywords: 'basic plus cable tv 126 channels standalone subscription digitally activated supercharged' },

      /* Ã¢â€â‚¬Ã¢â€â‚¬ PROMOS Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬ */
      { category: 'Promo', title: 'Basic Lite, Basic 495, Basic Plus Package Promo', description: 'Cable TV package promotional offer covering Basic Lite, Basic 495, and Basic Plus subscriptions.', href: 'cablelink_promos.html', keywords: 'promo cable tv basic lite 495 plus package offer limited' },
      { category: 'Promo', title: "Turbocharged I-Blaze@Home Valentine's Day", description: 'Upgrade your home internet and get a FREE Basic Lite cable TV subscription when you sign up.', href: 'cablelink_promos.html', keywords: 'promo turbocharged iblaze valentines free basic lite internet bundle offer' },
      { category: 'Promo', title: 'Turbocharge FiberLink@Home Valentines', description: 'Fast fiber internet for going LIVE plus FREE Basic Lite cable TV on your Valentine upgrade.', href: 'cablelink_promos.html', keywords: 'promo turbocharged fiberlink fiber valentines free basic lite internet bundle offer' },
      { category: 'Promo', title: "Supercharged I-Blaze@Home Valentine's Day", description: 'No lag, just love \u2014 supercharged DOCSIS internet bundled with free cable TV this Valentine season.', href: 'cablelink_promos.html', keywords: 'promo supercharged iblaze valentines free cable tv internet bundle offer' },
      { category: 'Promo', title: 'Supercharge FiberLink@Home Valentines Day', description: 'Up to 1 Gbps fiber speed plus FREE Basic Plus cable TV \u2014 ideal for movie nights and video calls.', href: 'cablelink_promos.html', keywords: 'promo supercharged fiberlink fiber valentines 1gbps free basic plus internet bundle offer' },

      /* Ã¢â€â‚¬Ã¢â€â‚¬ FAQ \u2014 SUBSCRIBER: SALES Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬ */
      { category: 'FAQ', title: 'Can I upgrade my cable or internet plan?', description: 'Subscriber \u2014 Sales related concerns.', href: 'cablelink_billing_faq.html#subs-sales-related-concerns-question-0', keywords: 'upgrade plan cable internet subscriber sales' },
      { category: 'FAQ', title: 'Can I downgrade my plan?', description: 'Subscriber \u2014 Sales related concerns.', href: 'cablelink_billing_faq.html#subs-sales-related-concerns-question-1', keywords: 'downgrade plan subscriber sales' },
      { category: 'FAQ', title: 'How do I know which plan is best for me?', description: 'Subscriber \u2014 Sales related concerns.', href: 'cablelink_billing_faq.html#subs-sales-related-concerns-question-2', keywords: 'best plan choose subscriber sales recommendation' },
      { category: 'FAQ', title: 'Can I add premium channels or add-on services?', description: 'Subscriber \u2014 Sales related concerns.', href: 'cablelink_billing_faq.html#subs-sales-related-concerns-question-3', keywords: 'premium channels add-on services subscriber sales' },
      { category: 'FAQ', title: 'How long does it take to activate add-on services?', description: 'Subscriber \u2014 Sales related concerns.', href: 'cablelink_billing_faq.html#subs-sales-related-concerns-question-4', keywords: 'activate add-on activation time subscriber sales' },
      { category: 'FAQ', title: 'Am I eligible for subscriber promotions?', description: 'Subscriber \u2014 Sales related concerns.', href: 'cablelink_billing_faq.html#subs-sales-related-concerns-question-5', keywords: 'eligible subscriber promotions promo deals sales' },
      { category: 'FAQ', title: 'How do I request a plan change or add-on service?', description: 'Subscriber \u2014 Sales related concerns.', href: 'cablelink_billing_faq.html#subs-sales-related-concerns-question-7', keywords: 'request plan change add-on subscriber sales' },
      { category: 'FAQ', title: 'Are there fees for changing plans?', description: 'Subscriber \u2014 Sales related concerns.', href: 'cablelink_billing_faq.html#subs-sales-related-concerns-question-8', keywords: 'fees changing plans subscriber sales' },
      { category: 'FAQ', title: 'Can I switch to a bundled cable and internet plan?', description: 'Subscriber \u2014 Sales related concerns.', href: 'cablelink_billing_faq.html#subs-sales-related-concerns-question-10', keywords: 'switch bundle cable internet plan subscriber sales' },
      { category: 'FAQ', title: 'Will my contract reset if I change my plan?', description: 'Subscriber \u2014 Sales related concerns.', href: 'cablelink_billing_faq.html#subs-sales-related-concerns-question-11', keywords: 'contract reset plan change subscriber sales' },

      /* Ã¢â€â‚¬Ã¢â€â‚¬ FAQ \u2014 SUBSCRIBER: BILLING Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬ */
      { category: 'FAQ', title: 'When is my due date?', description: 'Subscriber \u2014 Billing related concerns.', href: 'cablelink_billing_faq.html#subs-billing-related-concerns-question-0', keywords: 'monthly bill due date billing service invoice subscriber' },
      { category: 'FAQ', title: 'How can I get a copy of my billing statement?', description: 'Subscriber \u2014 Billing related concerns.', href: 'cablelink_billing_faq.html#subs-billing-related-concerns-question-1', keywords: 'billing statement copy invoice subscriber' },
      { category: 'FAQ', title: 'What is a prorated charge?', description: 'Subscriber \u2014 Billing related concerns.', href: 'cablelink_billing_faq.html#subs-billing-related-concerns-question-2', keywords: 'prorated charge billing subscriber' },
      { category: 'FAQ', title: 'What payment methods are accepted?', description: 'Subscriber \u2014 Billing related concerns.', href: 'cablelink_billing_faq.html#subs-billing-related-concerns-question-3', keywords: 'payment methods accepted billing subscriber' },
      { category: 'FAQ', title: 'How long does it take for my payment to be posted?', description: 'Subscriber \u2014 Billing related concerns.', href: 'cablelink_billing_faq.html#subs-billing-related-concerns-question-4', keywords: 'payment posted billing posting time subscriber' },
      { category: 'FAQ', title: 'What should I do if my payment is not yet posted?', description: 'Subscriber \u2014 Billing related concerns.', href: 'cablelink_billing_faq.html#subs-billing-related-concerns-question-5', keywords: 'payment not posted billing subscriber' },
      { category: 'FAQ', title: 'What happens if I miss my due date?', description: 'Subscriber \u2014 Billing related concerns.', href: 'cablelink_billing_faq.html#subs-billing-related-concerns-question-6', keywords: 'miss due date late payment billing subscriber' },
      { category: 'FAQ', title: 'How can I avoid service interruption?', description: 'Subscriber \u2014 Billing related concerns.', href: 'cablelink_billing_faq.html#subs-billing-related-concerns-question-7', keywords: 'avoid service interruption disconnection billing subscriber' },
      { category: 'FAQ', title: 'Can I dispute a billing charge?', description: 'Subscriber \u2014 Billing related concerns.', href: 'cablelink_billing_faq.html#subs-billing-related-concerns-question-8', keywords: 'dispute billing charge subscriber' },
      { category: 'FAQ', title: 'Will I receive a refund if there is a billing error?', description: 'Subscriber \u2014 Billing related concerns.', href: 'cablelink_billing_faq.html#subs-billing-related-concerns-question-9', keywords: 'refund billing error subscriber' },
      { category: 'FAQ', title: 'Can I change my billing cycle or due date?', description: 'Subscriber \u2014 Billing related concerns.', href: 'cablelink_billing_faq.html#subs-billing-related-concerns-question-10', keywords: 'change billing cycle due date subscriber' },
      { category: 'FAQ', title: 'What information should I prepare when contacting billing support?', description: 'Subscriber \u2014 Billing related concerns.', href: 'cablelink_billing_faq.html#subs-billing-related-concerns-question-12', keywords: 'billing support information prepare contact subscriber' },

      /* Ã¢â€â‚¬Ã¢â€â‚¬ FAQ \u2014 SUBSCRIBER: SERVICE Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬ */
      { category: 'FAQ', title: 'What should I do if my internet connection is slow?', description: 'Subscriber \u2014 Service related concerns.', href: 'cablelink_billing_faq.html#subs-service-related-concerns-question-0', keywords: 'slow internet connection troubleshoot service subscriber' },
      { category: 'FAQ', title: 'What should I do if I have no internet or cable connection?', description: 'Subscriber \u2014 Service related concerns.', href: 'cablelink_billing_faq.html#subs-service-related-concerns-question-1', keywords: 'no internet no cable connection outage service subscriber' },

      /* Ã¢â€â‚¬Ã¢â€â‚¬ FAQ \u2014 NON-SUBSCRIBER: AVAILABILITY Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬ */
      { category: 'FAQ', title: 'Is your cable and internet service available in my area?', description: 'Non-Subscriber \u2014 Service availability.', href: 'cablelink_billing_faq.html#non_subs-service-availability-question-0', keywords: 'service available area coverage non-subscriber availability' },
      { category: 'FAQ', title: 'Do you offer services for both residential and business customers?', description: 'Non-Subscriber \u2014 Service availability.', href: 'cablelink_billing_faq.html#non_subs-service-availability-question-1', keywords: 'residential business customers service availability non-subscriber' },

      /* Ã¢â€â‚¬Ã¢â€â‚¬ FAQ \u2014 NON-SUBSCRIBER: PLANS Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬ */
      { category: 'FAQ', title: 'What cable and internet plans do you offer?', description: 'Non-Subscriber \u2014 Plans & Packages.', href: 'cablelink_billing_faq.html#non_subs-plans-packages-question-0', keywords: 'plans internet cable offer packages non-subscriber' },
      { category: 'FAQ', title: 'Can I subscribe to internet only or cable only?', description: 'Non-Subscriber \u2014 Plans & Packages.', href: 'cablelink_billing_faq.html#non_subs-plans-packages-question-1', keywords: 'internet only cable only standalone subscribe non-subscriber plans' },
      { category: 'FAQ', title: 'Do you offer bundled packages?', description: 'Non-Subscriber \u2014 Plans & Packages.', href: 'cablelink_billing_faq.html#non_subs-plans-packages-question-2', keywords: 'bundled packages bundle cable internet non-subscriber plans' },
      { category: 'FAQ', title: 'Are there promotional offers for new subscribers?', description: 'Non-Subscriber \u2014 Plans & Packages.', href: 'cablelink_billing_faq.html#non_subs-plans-packages-question-3', keywords: 'promo promotional offers new subscribers non-subscriber plans' },

      /* Ã¢â€â‚¬Ã¢â€â‚¬ FAQ \u2014 NON-SUBSCRIBER: APPLICATION Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬Ã¢â€â‚¬ */
      { category: 'FAQ', title: 'How do I apply for a new subscription?', description: 'Non-Subscriber \u2014 Application & Installation.', href: 'cablelink_billing_faq.html#non_subs-application-installation-question-0', keywords: 'apply new subscription application install non-subscriber' },
      { category: 'FAQ', title: 'How long does installation take?', description: 'Non-Subscriber \u2014 Application & Installation.', href: 'cablelink_billing_faq.html#non_subs-application-installation-question-1', keywords: 'installation time duration non-subscriber application' }
    ];

    if (!modal) return;
    form = modal.querySelector('[data-site-search-form]');
    input = document.getElementById('site-search-input');
    status = modal.querySelector('[data-site-search-status]');
    results = modal.querySelector('[data-site-search-results]');

    function getFocusable() {
      return Array.from(modal.querySelectorAll('a[href], button:not([disabled]), input:not([disabled])'));
    }
    function closeSearch() {
      modal.hidden = true;
      document.documentElement.classList.remove('is-site-search-open');
      document.body.classList.remove('is-site-search-open');
      if (previousFocus) previousFocus.focus();
    }
    function openSearch(trigger) {
      if (typeof closeMobileMenu === 'function') closeMobileMenu();
      previousFocus = trigger || document.activeElement;
      modal.hidden = false;
      document.documentElement.classList.add('is-site-search-open');
      document.body.classList.add('is-site-search-open');
      window.setTimeout(function () { input.focus(); }, 0);
    }
    function renderResults(query) {
      var terms = query.toLowerCase().split(/\s+/).filter(Boolean);

      // Score each entry: title matches score highest, description next, keywords last
      var scored = entries.reduce(function (acc, entry) {
        var titleLower = entry.title.toLowerCase();
        var descLower  = entry.description.toLowerCase();
        var kwLower    = entry.keywords.toLowerCase();
        var haystack   = [titleLower, descLower, kwLower].join(' ');

        var allMatch = terms.every(function (term) { return haystack.indexOf(term) !== -1; });
        if (!allMatch) return acc;

        // +4 per term in title, +2 in description, +1 in keywords, +3 verbatim full query in title
        var score = 0;
        terms.forEach(function (term) {
          if (titleLower.indexOf(term) !== -1) score += 4;
          if (descLower.indexOf(term)  !== -1) score += 2;
          if (kwLower.indexOf(term)    !== -1) score += 1;
        });
        if (titleLower.indexOf(query.toLowerCase()) !== -1) score += 3;

        acc.push({ entry: entry, score: score });
        return acc;
      }, []);

      scored.sort(function (a, b) { return b.score - a.score; });

      results.textContent = '';
      if (!terms.length) {
        status.textContent = 'Enter a keyword to search the current website pages.';
        return;
      }
      if (!scored.length) {
        status.textContent = 'No results match "' + query + '". Try a broader keyword.';
        return;
      }
      status.textContent = scored.length + (scored.length === 1 ? ' result found.' : ' results found.');
      scored.forEach(function (item) {
        var entry = item.entry;
        var card = document.createElement('article');
        var header = document.createElement('div');
        var badge = document.createElement('span');
        var link = document.createElement('a');
        var description = document.createElement('p');

        card.className = 'site-search-result';
        header.className = 'site-search-result__header';
        badge.className = 'site-search-result__badge site-search-result__badge--' + (entry.category || 'page').toLowerCase();
        badge.textContent = entry.category || 'Page';
        link.href = entry.href;
        link.textContent = entry.title;

        if (entry.category === 'FAQ') {
          link.addEventListener('click', closeSearch);
        }
        description.textContent = entry.description;

        header.appendChild(badge);
        header.appendChild(link);
        card.appendChild(header);
        card.appendChild(description);
        results.appendChild(card);
      });
    }

    document.querySelectorAll('.global-search-button, .global-mobile-search-button').forEach(function (button) {
      button.addEventListener('click', function () { openSearch(button); });
    });
    modal.querySelectorAll('[data-search-close]').forEach(function (button) {
      button.addEventListener('click', closeSearch);
    });
    form.addEventListener('submit', function (event) {
      event.preventDefault();
      renderResults(input.value.trim());
    });
    input.addEventListener('input', function () {
      renderResults(input.value.trim());
    });
    modal.addEventListener('keydown', function (event) {
      var focusable;
      var currentIndex;
      var nextIndex;
      if (event.key === 'Escape') {
        event.preventDefault();
        closeSearch();
        return;
      }
      if (event.key !== 'Tab') return;
      focusable = getFocusable();
      if (!focusable.length) return;
      currentIndex = focusable.indexOf(document.activeElement);
      nextIndex = event.shiftKey ? currentIndex - 1 : currentIndex + 1;
      if (nextIndex < 0) nextIndex = focusable.length - 1;
      if (nextIndex >= focusable.length) nextIndex = 0;
      event.preventDefault();
      focusable[nextIndex].focus();
    });
  }
  function setupEmailOptions() {
    var dialog = document.getElementById('site-email-options-dialog');
    var closeButton;
    var copyButton;
    var addressText;
    var title;
    var helperText;
    var gmailLink;
    var currentEmail = '';

    if (!dialog) {
      dialog = document.createElement('dialog');
      dialog.id = 'site-email-options-dialog';
      dialog.className = 'site-email-options-dialog';
      dialog.setAttribute('aria-labelledby', 'site-email-options-title');
      dialog.innerHTML = '<div class="site-email-options-dialog__content"><button class="site-email-options-dialog__close" type="button" aria-label="Close email options">&times;</button><span class="section__tag">Email Cablelink</span><h2 id="site-email-options-title">Email Cablelink</h2><p class="site-email-options-dialog__helper">Choose how you would like to contact our team.</p><div class="site-email-options-dialog__address"><span>Email address</span><strong data-email-options-address></strong></div><div class="site-email-options-dialog__actions"><button class="btn btn-primary email-options__copy" type="button" data-email-options-copy>Copy Email Address</button><a class="btn btn-secondary email-options__gmail" data-email-options-gmail target="_blank" rel="noopener noreferrer">Open Gmail</a></div><p class="site-email-options-dialog__status" data-email-options-status aria-live="polite"></p></div>';
      document.body.appendChild(dialog);
    }

    if (!('showModal' in dialog)) return;
    closeButton = dialog.querySelector('.site-email-options-dialog__close');
    copyButton = dialog.querySelector('[data-email-options-copy]');
    addressText = dialog.querySelector('[data-email-options-address]');
    title = dialog.querySelector('#site-email-options-title');
    helperText = dialog.querySelector('.site-email-options-dialog__helper');
    gmailLink = dialog.querySelector('[data-email-options-gmail]');

    function labelFor(email) {
      if (email === 'sales@cablelink.com.ph') return 'Email Enterprise Sales';
      if (email === 'enterprise@cablelink.com.ph') return 'Email Enterprise After-sales Support';
      if (email === 'customerservice@cablelink.com.ph') return 'Email Customer Service';
      if (email === 'clhc_dpo@cablelink.com.ph') return 'Email the Data Protection Officer';
      return 'Email Cablelink';
    }
    function parseMailto(value) {
      var parts = value.replace(/^mailto:/i, '').split('?');
      var parameters = new URLSearchParams(parts[1] || '');
      return {
        email: decodeURIComponent(parts[0]),
        subject: parameters.get('subject') || '',
        body: parameters.get('body') || ''
      };
    }
    function makeGmailUrl(details) {
      var url = 'https://mail.google.com/mail/?view=cm&fs=1&to=' + encodeURIComponent(details.email);
      if (details.subject) url += '&su=' + encodeURIComponent(details.subject);
      if (details.body) url += '&body=' + encodeURIComponent(details.body);
      return url;
    }
    function openOptions(details, includeFormMessage) {
      var status = dialog.querySelector('[data-email-options-status]');
      currentEmail = details.email;
      title.textContent = labelFor(details.email);
      addressText.textContent = details.email;
      helperText.textContent = includeFormMessage ? 'Your form details will be included when you open Gmail.' : 'Choose how you would like to contact our team.';
      gmailLink.href = makeGmailUrl(details);
      status.textContent = '';
      dialog.showModal();
      closeButton.focus();
    }
    function copyAddress() {
      var status = dialog.querySelector('[data-email-options-status]');
      function confirmCopy() { status.textContent = 'Email address copied.'; }
      if (navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(currentEmail).then(confirmCopy, fallbackCopy);
      } else {
        fallbackCopy();
      }
      function fallbackCopy() {
        var field = document.createElement('textarea');
        field.value = currentEmail;
        field.setAttribute('readonly', '');
        field.className = 'site-email-options-dialog__copy-field';
        document.body.appendChild(field);
        field.select();
        document.execCommand('copy');
        field.remove();
        confirmCopy();
      }
    }

    document.addEventListener('click', function (event) {
      var link = event.target.closest('a[href^="mailto:"]');
      if (!link) return;
      event.preventDefault();
      openOptions(parseMailto(link.getAttribute('href')), false);
    });
    document.addEventListener('submit', function (event) {
      var form = event.target;
      var action = form.getAttribute('action') || '';
      var details;
      var values;
      if (!action.match(/^mailto:/i)) return;
      event.preventDefault();
      details = parseMailto(action);
      values = Array.from(new FormData(form).entries()).map(function (entry) {
        return entry[0] + ': ' + entry[1];
      }).join('\n');
      details.body = details.body ? details.body + '\n\n' + values : values;
      openOptions(details, true);
    });
    closeButton.addEventListener('click', function () { dialog.close(); });
    copyButton.addEventListener('click', copyAddress);
    dialog.addEventListener('click', function (event) {
      if (event.target === dialog) dialog.close();
    });
  }
  function setupPrivacyModal() {
    var modal = document.getElementById('privacy-entry-modal');
    var continueButton;
    var closeButtons;
    var previousFocus = null;
    var storageKey = 'cablelink-privacy-notice-seen-v2';

    if (!modal) return;
    continueButton = modal.querySelector('[data-privacy-continue]');
    closeButtons = modal.querySelectorAll('[data-privacy-close]');

    function hasSeenNotice() {
      try {
        return window.sessionStorage.getItem(storageKey) === 'true';
      } catch (error) {
        return false;
      }
    }
    function rememberNotice() {
      try {
        window.sessionStorage.setItem(storageKey, 'true');
      } catch (error) {
        /* Session storage may be unavailable; closing still works for this page. */
      }
    }
    function getFocusable() {
      return Array.from(modal.querySelectorAll('a[href], button:not([disabled])')).filter(function (element) {
        return !element.hidden;
      });
    }
    function closeModal() {
      rememberNotice();
      modal.hidden = true;
      document.documentElement.classList.remove('is-privacy-modal-open');
      document.body.classList.remove('is-privacy-modal-open');
      if (previousFocus) previousFocus.focus();
    }
    function openModal() {
      previousFocus = document.activeElement;
      modal.hidden = false;
      document.documentElement.classList.add('is-privacy-modal-open');
      document.body.classList.add('is-privacy-modal-open');
      var focusable = getFocusable();
      if (focusable.length) focusable[0].focus();
    }

    closeButtons.forEach(function (button) {
      button.addEventListener('click', closeModal);
    });
    if (continueButton) continueButton.addEventListener('click', closeModal);
    modal.addEventListener('keydown', function (event) {
      var focusable;
      var currentIndex;
      var nextIndex;

      if (event.key === 'Escape') {
        event.preventDefault();
        closeModal();
        return;
      }
      if (event.key !== 'Tab') return;
      focusable = getFocusable();
      if (!focusable.length) return;
      currentIndex = focusable.indexOf(document.activeElement);
      nextIndex = event.shiftKey ? currentIndex - 1 : currentIndex + 1;
      if (nextIndex < 0) nextIndex = focusable.length - 1;
      if (nextIndex >= focusable.length) nextIndex = 0;
      event.preventDefault();
      focusable[nextIndex].focus();
    });

    if (!hasSeenNotice()) openModal();
  }
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', loadShell);
  else loadShell();
}());
