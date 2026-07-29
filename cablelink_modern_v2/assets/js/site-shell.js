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
    { page: 'advisories', href: 'cablelink_advisories.html', label: 'Advisories' },
    { page: 'contact', href: 'cablelink_contact.html', label: 'Contact Us' }
  ];
  var config = window.CableLinkConfig || { externalLinks: {} };
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
  function setupSupportMenu(header) {
    var item = header.querySelector('.global-nav__item--support');
    var supportLink;
    var menu;
    var suppressFocusOpen = false;

    if (!item) return;
    supportLink = item.querySelector('.global-nav__support-link');
    menu = item.querySelector('.mega-menu');
    if (!supportLink || !menu) return;

    function openMenu() {
      item.classList.add('is-open');
      supportLink.setAttribute('aria-expanded', 'true');
    }
    function closeMenu(returnFocus) {
      item.classList.remove('is-open');
      supportLink.setAttribute('aria-expanded', 'false');
      if (returnFocus) {
        suppressFocusOpen = true;
        supportLink.focus();
      }
    }

    supportLink.addEventListener('keydown', function (event) {
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
    help.innerHTML = '<div><p class="mega-menu__help-title">Need help choosing?</p><p class="mega-menu__help-copy">Choose a direct contact channel.</p><div class="mega-menu__help-actions"><a class="btn btn-secondary mega-menu__cta" data-config-link="messenger" target="_blank" rel="noopener noreferrer" hidden>Messenger</a><a class="btn btn-secondary mega-menu__cta" data-config-link="viber" target="_blank" rel="noopener noreferrer" hidden>Viber</a><a class="btn btn-secondary mega-menu__cta" href="cablelink_contact.html">Contact Us <span aria-hidden="true">&rarr;</span></a></div></div>';
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
    if (corporate.querySelector('.mega-menu__title') && corporate.querySelector('.mega-menu__links')) return;
    corporate.innerHTML = '<div class="mega-menu__group-heading"><span class="mega-menu__icon mega-menu__icon--corporate" aria-hidden="true"><svg viewBox="0 0 24 24"><rect x="3" y="7" width="18" height="13" rx="2" /><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2M3 12h18M10 12v2h4v-2" /></svg></span><a class="mega-menu__title" href="cablelink_services.html">Enterprise</a></div><p class="mega-menu__description">Final enterprise products and availability require client confirmation.</p><ul class="mega-menu__links"><li><a href="cablelink_contact.html">Contact Us</a></li></ul>';
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
      if (!header) throw new Error('CableLink header partial is missing .global-header.');
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
      console.error('CableLink shell could not load. Use a local HTTP server.', error);
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
      { title: 'Home', description: 'CableLink internet and Cable TV homepage.', href: 'cablelink_modern_v2.html', keywords: 'home welcome banners promos tvc' },
      { title: 'Services', description: 'Residential Internet, Cable TV, bundled plans, and enterprise services.', href: 'cablelink_services.html', keywords: 'services residential commercial enterprise selection' },
      { title: 'Internet Plans', description: 'Review CableLink residential internet plan options.', href: 'cablelink_internet_plans1.html', keywords: 'internet iblaze fiberlink residential' },
      { title: 'Plans & Pricing', description: 'Compare available CableLink plan groups and pricing.', href: 'cablelink_plans.html', keywords: 'plans pricing basic 495 basic lite basic plus bundles' },
      { title: 'Channel Line-up', description: 'Browse the current Cable TV channel line-up.', href: 'cablelink_channels.html', keywords: 'cable tv channels lineup' },
      { title: 'Promos', description: 'Browse current CableLink promotional materials.', href: 'cablelink_promos.html', keywords: 'promos offers bundles' },
      { title: 'Payment Facilities', description: 'Find payment methods, offices, and payment facilities.', href: 'cablelink_payment.html', keywords: 'payments banks auto debit billing offices' },
      { title: 'Support', description: 'Support paths for non-subscribers and existing subscribers.', href: 'cablelink_billing_faq.html', keywords: 'support faq troubleshooting speed test billing' },
      { title: 'Billing FAQs', description: 'Billing FAQ destination pending approved client content.', href: 'cablelink_billing_faq.html', keywords: 'billing faq payment questions' },
      { title: 'Contact Us', description: 'CableLink contact and messaging options.', href: 'cablelink_contact.html', keywords: 'contact hotline email messenger viber instagram offices' },
      { title: 'Advisories', description: 'Channel, service, alarm, and outage advisories.', href: 'cablelink_advisories.html', keywords: 'advisories channel service alarms outages' },
      { title: 'Get Connected', description: 'Check serviceability and begin a CableLink application.', href: 'cablelink_apply.html', keywords: 'apply application availability coverage get connected' },
      { title: 'About Us', description: 'CableLink company information.', href: 'cablelink_about.html', keywords: 'about company mission vision profile milestones' },
      { title: 'Privacy Notice', description: 'CableLink privacy notice destination.', href: 'cablelink_privacy.html', keywords: 'privacy notice policy data' },
      { title: 'Careers', description: 'CableLink careers destination pending approved content.', href: 'cablelink_careers.html', keywords: 'careers jobs employment' }
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
      var matches = entries.filter(function (entry) {
        var haystack = [entry.title, entry.description, entry.keywords].join(' ').toLowerCase();
        return terms.every(function (term) { return haystack.indexOf(term) !== -1; });
      });

      results.textContent = '';
      if (!terms.length) {
        status.textContent = 'Enter a keyword to search the current website pages.';
        return;
      }
      if (!matches.length) {
        status.textContent = 'No pages match “' + query + '”. Try a broader keyword.';
        return;
      }
      status.textContent = matches.length + (matches.length === 1 ? ' result found.' : ' results found.');
      matches.forEach(function (entry) {
        var card = document.createElement('article');
        var link = document.createElement('a');
        var description = document.createElement('p');
        card.className = 'site-search-result';
        link.href = entry.href;
        link.textContent = entry.title;
        description.textContent = entry.description;
        card.appendChild(link);
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
  function setupPrivacyModal() {
    var modal = document.getElementById('privacy-entry-modal');
    var continueButton;
    var closeButtons;
    var previousFocus = null;
    var storageKey = 'cablelink-privacy-notice-seen-v1';

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
