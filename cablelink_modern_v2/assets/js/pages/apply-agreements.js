(function () {
  'use strict';
  var terms = document.getElementById('terms-consent');
  var privacy = document.getElementById('privacy-consent');
  var submit = document.getElementById('application-submit');
  var previousFocus = null;
  var activeModal = null;

  if (!terms || !privacy || !submit) return;

  function updateSubmitState() {
    submit.disabled = !(terms.checked && privacy.checked);
    submit.setAttribute('aria-disabled', String(submit.disabled));
  }

  function focusableElements(modal) {
    return Array.prototype.slice.call(modal.querySelectorAll('a[href], button:not([disabled]), input:not([disabled])'));
  }

  function closeModal() {
    if (!activeModal) return;
    activeModal.hidden = true;
    activeModal = null;
    document.documentElement.classList.remove('is-agreement-modal-open');
    document.body.classList.remove('is-agreement-modal-open');
    if (previousFocus) previousFocus.focus();
  }

  function openModal(type, trigger) {
    var modal = document.getElementById(type + '-agreement-modal');
    var focusable;
    if (!modal) return;
    previousFocus = trigger;
    activeModal = modal;
    modal.hidden = false;
    document.documentElement.classList.add('is-agreement-modal-open');
    document.body.classList.add('is-agreement-modal-open');
    focusable = focusableElements(modal);
    if (focusable.length) focusable[0].focus();
  }

  document.querySelectorAll('[data-agreement-open]').forEach(function (button) {
    button.addEventListener('click', function (event) {
      event.preventDefault();
      event.stopPropagation();
      openModal(button.dataset.agreementOpen, button);
    });
  });

  document.querySelectorAll('[data-agreement-close]').forEach(function (button) {
    button.addEventListener('click', closeModal);
  });

  document.querySelectorAll('[data-agreement-accept]').forEach(function (button) {
    button.addEventListener('click', function () {
      var checkbox = button.dataset.agreementAccept === 'terms' ? terms : privacy;
      checkbox.checked = true;
      checkbox.dispatchEvent(new Event('change', { bubbles: true }));
      closeModal();
    });
  });

  [terms, privacy].forEach(function (checkbox) {
    checkbox.addEventListener('change', updateSubmitState);
  });

  submit.addEventListener('click', function () {
    if (submit.disabled) return;
    if (typeof window.submitApplication === 'function') window.submitApplication();
  });

  document.addEventListener('keydown', function (event) {
    var focusable;
    var currentIndex;
    var nextIndex;
    if (!activeModal) return;
    if (event.key === 'Escape') {
      event.preventDefault();
      closeModal();
      return;
    }
    if (event.key !== 'Tab') return;
    focusable = focusableElements(activeModal);
    if (!focusable.length) return;
    currentIndex = focusable.indexOf(document.activeElement);
    nextIndex = event.shiftKey ? currentIndex - 1 : currentIndex + 1;
    if (nextIndex < 0) nextIndex = focusable.length - 1;
    if (nextIndex >= focusable.length) nextIndex = 0;
    event.preventDefault();
    focusable[nextIndex].focus();
  });

  updateSubmitState();
}());