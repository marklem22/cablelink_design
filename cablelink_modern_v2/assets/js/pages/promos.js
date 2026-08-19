(function () {
  'use strict';

  var cards = Array.prototype.slice.call(document.querySelectorAll('.promo-card'));
  var dialog = document.getElementById('promo-dialog');
  var closeButton = dialog && dialog.querySelector('[data-promo-dialog-close]');
  var media = dialog && dialog.querySelector('[data-promo-dialog-media]');
  var type = dialog && dialog.querySelector('[data-promo-dialog-type]');
  var title = dialog && dialog.querySelector('[data-promo-dialog-title]');
  var detail = dialog && dialog.querySelector('[data-promo-dialog-detail]');
  var price = dialog && dialog.querySelector('[data-promo-dialog-price]');
  var action = dialog && dialog.querySelector('[data-promo-dialog-action]');
  var previousFocus;

  if (!cards.length || !dialog || !closeButton || !('showModal' in dialog)) return;

  cards.forEach(function (card) {
    card.tabIndex = 0;
    card.setAttribute('aria-haspopup', 'dialog');
    card.querySelectorAll('.card-desc').forEach(function (description) {
      var descriptionCopy = description.textContent.replace(/\s+/g, ' ').trim();
      var readMore;
      if (descriptionCopy.length <= 180) return;
      description.classList.add('is-collapsible');
      readMore = document.createElement('button');
      readMore.className = 'card-desc-toggle';
      readMore.type = 'button';
      readMore.textContent = 'Read More';
      readMore.setAttribute('aria-label', 'Read more about ' + cleanText(card.querySelector('.card-title')));
      description.insertAdjacentElement('afterend', readMore);
    });

    card.addEventListener('click', function (event) {
      event.preventDefault();
      openPromo(card);
    });
    card.addEventListener('keydown', function (event) {
      if (event.key !== 'Enter' && event.key !== ' ') return;
      event.preventDefault();
      openPromo(card);
    });
  });

  function cleanText(element) {
    return element ? element.textContent.replace(/\s+/g, ' ').trim() : '';
  }
  function openPromo(card) {
    var image = card.querySelector('.card-image');
    var category = card.querySelector('.card-cat');
    var heading = card.querySelector('.card-title');
    var description = card.querySelector('.card-desc');
    var cardPrice = card.querySelector('.card-price');
    var cardAction = card.querySelector('.card-learn');

    if (dialog.open) return;
    previousFocus = document.activeElement;
    media.style.backgroundImage = image ? image.style.backgroundImage : '';
    type.textContent = cleanText(category);
    title.textContent = cleanText(heading);
    detail.textContent = cleanText(description);
    price.textContent = cleanText(cardPrice);
    action.href = cardAction ? cardAction.getAttribute('href') : 'cablelink_contact.html';
    action.textContent = cardAction ? cleanText(cardAction) : 'Inquire Now';
    action.classList.toggle('orange-btn', Boolean(cardAction && cardAction.classList.contains('orange-btn')));
    dialog.showModal();
    closeButton.focus();
  }
  function closeDialog() {
    dialog.close();
  }

  closeButton.addEventListener('click', closeDialog);
  dialog.addEventListener('click', function (event) {
    if (event.target === dialog) closeDialog();
  });
  dialog.addEventListener('close', function () {
    if (previousFocus) previousFocus.focus();
  });

  (function openRequestedPromo() {
    var requestedId = new URLSearchParams(window.location.search).get('promo');
    var requestedCard = requestedId && document.getElementById(requestedId);

    if (!requestedCard || !requestedCard.classList.contains('promo-card')) return;
    requestedCard.scrollIntoView({ block: 'center' });
    window.requestAnimationFrame(function () { openPromo(requestedCard); });
  }());
}());
