(function () {
  'use strict';

  function setupFaq() {
    document.querySelectorAll('.faq-q').forEach(function (button) {
      button.addEventListener('click', function () {
        var item = button.parentElement;
        var wasOpen = item.classList.contains('open');

        document.querySelectorAll('.faq-item').forEach(function (faqItem) {
          faqItem.classList.remove('open');
        });

        if (!wasOpen) item.classList.add('open');
      });
    });
  }

  function setupBankDisplayLimit() {
    var banksGrid = document.querySelector('.banks-grid');
    var bankCards;
    var extraCards;
    var toggleWrap;
    var toggleButton;

    if (!banksGrid) return;

    bankCards = Array.prototype.slice.call(banksGrid.querySelectorAll('.bank-card'));
    if (bankCards.length <= 10) return;

    extraCards = bankCards.slice(10);
    extraCards.forEach(function (card) {
      card.classList.add('is-hidden-by-limit');
    });

    toggleWrap = document.createElement('div');
    toggleWrap.className = 'banks-toggle-wrap';

    toggleButton = document.createElement('button');
    toggleButton.type = 'button';
    toggleButton.className = 'banks-see-more';
    toggleButton.textContent = 'See More';
    toggleButton.setAttribute('aria-expanded', 'false');

    toggleButton.addEventListener('click', function () {
      var expanded = toggleButton.getAttribute('aria-expanded') === 'true';

      toggleButton.setAttribute('aria-expanded', expanded ? 'false' : 'true');
      extraCards.forEach(function (card) {
        card.classList.toggle('is-hidden-by-limit', expanded);
      });
      toggleButton.textContent = expanded ? 'See More' : 'Show Less';
    });

    toggleWrap.appendChild(toggleButton);
    banksGrid.insertAdjacentElement('afterend', toggleWrap);
  }

  function setupFacilitySearch() {
    var form = document.getElementById('facility-search');
    var input = document.getElementById('payment-facility-search');
    var status = document.getElementById('facility-search-status');
    var cards = Array.prototype.slice.call(document.querySelectorAll('.banks-grid .bank-card'));
    var toggle = document.querySelector('.banks-toggle-wrap');

    if (!form || !input || !status || !cards.length) return;

    function applySearch() {
      var query = input.value.trim().toLowerCase();
      var resultCount = 0;

      cards.forEach(function (card, index) {
        var matches = !query || card.textContent.toLowerCase().indexOf(query) !== -1;
        card.hidden = !matches;

        if (query) {
          card.classList.remove('is-hidden-by-limit');
        } else {
          card.classList.remove('is-hidden-by-limit');
        }

        if (matches) resultCount += 1;
      });

      toggle = document.querySelector('.banks-toggle-wrap');
      if (toggle) toggle.hidden = Boolean(query);

      if (!query) {
        status.textContent = '';
      } else if (resultCount) {
        status.textContent = resultCount + (resultCount === 1 ? ' matching payment partner.' : ' matching payment partners.');
      } else {
        status.textContent = 'No payment partners match your search.';
      }
    }

    form.addEventListener('submit', function (event) {
      event.preventDefault();
      applySearch();
    });
    input.addEventListener('input', applySearch);
  }


  function setupBankDetailsModals() {
    var activeModal = null;
    var trigger = null;

    function closeModal() {
      if (!activeModal) return;

      activeModal.hidden = true;
      document.body.classList.remove('has-bank-modal');
      activeModal = null;

      if (trigger) trigger.focus();
      trigger = null;
    }

    function openModal(button) {
      var dialogId = button.getAttribute('data-bank-dialog');
      var dialog = dialogId ? document.getElementById(dialogId) : null;
      var closeButton;

      if (!dialog) return;
      if (activeModal) closeModal();

      activeModal = dialog;
      trigger = button;
      activeModal.hidden = false;
      document.body.classList.add('has-bank-modal');
      closeButton = activeModal.querySelector('[data-bank-modal-close]');
      if (closeButton) closeButton.focus();
    }

    document.querySelectorAll('[data-bank-dialog]').forEach(function (button) {
      button.addEventListener('click', function () {
        openModal(button);
      });
    });

    document.querySelectorAll('[data-bank-modal-close]').forEach(function (button) {
      button.addEventListener('click', closeModal);
    });

    document.querySelectorAll('.bank-details-modal').forEach(function (dialog) {
      dialog.addEventListener('click', function (event) {
        if (event.target === dialog) closeModal();
      });
    });

    document.addEventListener('keydown', function (event) {
      var focusable;
      var first;
      var last;

      if (!activeModal) return;
      if (event.key === 'Escape') {
        event.preventDefault();
        closeModal();
        return;
      }
      if (event.key !== 'Tab') return;

      focusable = Array.prototype.slice.call(activeModal.querySelectorAll('a[href], button:not([disabled]), [tabindex]:not([tabindex="-1"])'));
      if (!focusable.length) {
        event.preventDefault();
        return;
      }

      first = focusable[0];
      last = focusable[focusable.length - 1];
      if (event.shiftKey && document.activeElement === first) {
        event.preventDefault();
        last.focus();
      } else if (!event.shiftKey && document.activeElement === last) {
        event.preventDefault();
        first.focus();
      }
    });
  }
  function setupAutoDebitForm() {
    var form = document.getElementById('auto-debit-form');
    var status = document.getElementById('auto-debit-status');

    if (!form || !status) return;

    form.addEventListener('submit', function (event) {
      var requiredFields;
      var firstInvalid;
      var config;

      event.preventDefault();
      requiredFields = Array.prototype.slice.call(form.querySelectorAll('[required]'));
      firstInvalid = requiredFields.find(function (field) {
        return field.type === 'checkbox' ? !field.checked : !field.value.trim();
      });

      requiredFields.forEach(function (field) {
        field.setAttribute('aria-invalid', firstInvalid === field ? 'true' : 'false');
      });

      if (firstInvalid) {
        status.textContent = 'Complete all required fields before this application can be reviewed.';
        status.className = 'application-status is-error';
        firstInvalid.focus();
        return;
      }

      config = window.CableLinkConfig || { integrations: {} };
      status.textContent = config.integrations.autoDebitEndpoint
        ? 'Not submitted. A destination is configured, but secure server validation and the approved enrollment workflow are not implemented.'
        : 'Not submitted. Cablelink must provide and approve the secure destination, server validation, and enrollment workflow.';
      status.className = 'application-status is-warning';
    });
  }

  function initialise() {
    setupFaq();
    setupFacilitySearch();
    setupBankDetailsModals();
    setupAutoDebitForm();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initialise);
  } else {
    initialise();
  }
}());
