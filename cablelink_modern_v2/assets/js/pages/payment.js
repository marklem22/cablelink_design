(function () {
  'use strict';

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
          card.classList.toggle('is-hidden-by-limit', index >= 10);
        }

        if (matches) resultCount += 1;
      });

      toggle = document.querySelector('.banks-toggle-wrap');
      if (toggle) toggle.hidden = Boolean(query);

      if (!query) {
        status.textContent = '';
      } else if (resultCount) {
        status.textContent = resultCount + (resultCount === 1 ? ' matching facility.' : ' matching facilities.');
      } else {
        status.textContent = 'No payment facilities match your search.';
      }
    }

    form.addEventListener('submit', function (event) {
      event.preventDefault();
      applySearch();
    });
    input.addEventListener('input', applySearch);
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
        status.textContent = 'Complete all required fields and accept the authorization before this application can be reviewed.';
        status.className = 'application-status is-error';
        firstInvalid.focus();
        return;
      }

      config = window.CableLinkConfig || { integrations: {} };
      status.textContent = config.integrations.autoDebitEndpoint
        ? 'Not submitted. A destination is configured, but secure server validation and the approved enrollment workflow are not implemented.'
        : 'Not submitted. CableLink must provide and approve the secure destination, server validation, and enrollment workflow.';
      status.className = 'application-status is-warning';
    });
  }

  function initialise() {
    setupFacilitySearch();
    setupAutoDebitForm();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initialise);
  } else {
    initialise();
  }
}());
