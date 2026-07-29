(function () {
  'use strict';

  var tabs = Array.prototype.slice.call(document.querySelectorAll('[data-advisory-tab]'));
  var cards = Array.prototype.slice.call(document.querySelectorAll('[data-advisory-category]'));
  var emptyState = document.querySelector('[data-advisory-empty]');
  var dialog = document.querySelector('[data-advisory-dialog]');
  var dialogImage = document.querySelector('[data-advisory-dialog-image]');
  var dialogType = document.querySelector('[data-advisory-dialog-type]');
  var dialogTitle = document.querySelector('[data-advisory-dialog-title]');
  var dialogDetail = document.querySelector('[data-advisory-dialog-detail]');
  var closeButton = document.querySelector('[data-advisory-close]');

  if (!tabs.length || !cards.length) return;

  function selectCategory(category) {
    var count = 0;
    tabs.forEach(function (tab) {
      var isActive = tab.getAttribute('data-advisory-tab') === category;
      tab.classList.toggle('is-active', isActive);
      tab.setAttribute('aria-selected', String(isActive));
    });
    cards.forEach(function (card) {
      var isVisible = card.getAttribute('data-advisory-category') === category;
      card.hidden = !isVisible;
      if (isVisible) count += 1;
    });
    if (emptyState) emptyState.hidden = count !== 0;
  }

  tabs.forEach(function (tab) {
    tab.addEventListener('click', function () { selectCategory(tab.getAttribute('data-advisory-tab')); });
  });

  function openDetails(button) {
    if (!dialog || typeof dialog.showModal !== 'function') return;
    var card = button.closest('[data-advisory-category]');
    var image = card && card.querySelector('img');
    var title = card && card.querySelector('.advisory-card__title');
    var detail = card && card.querySelector('.advisory-card__summary');
    if (!card || !image || !title) return;

    dialogImage.src = image.currentSrc || image.src;
    dialogImage.alt = image.alt;
    dialogImage.width = image.width;
    dialogImage.height = image.height;
    dialogType.textContent = card.getAttribute('data-advisory-category') === 'service' ? 'Service Advisory' : 'Channel Advisory';
    dialogTitle.textContent = title.textContent;
    dialogDetail.textContent = detail ? detail.textContent : 'View the advisory image for complete information.';
    dialog.showModal();
    if (closeButton) closeButton.focus();
  }

  document.querySelectorAll('[data-advisory-open]').forEach(function (button) {
    button.addEventListener('click', function () { openDetails(button); });
  });

  if (closeButton && dialog) closeButton.addEventListener('click', function () { dialog.close(); });
  if (dialog) dialog.addEventListener('click', function (event) { if (event.target === dialog) dialog.close(); });

  selectCategory('channel');
}());