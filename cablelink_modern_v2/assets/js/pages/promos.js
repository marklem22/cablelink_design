(function () {
  'use strict';

  var descriptionLimit = 180;
  var descriptions = document.querySelectorAll('.promo-card .card-desc');

  descriptions.forEach(function (description, index) {
    var copy = description.textContent.replace(/\s+/g, ' ').trim();
    var descriptionId;
    var toggle;

    if (copy.length <= descriptionLimit) return;

    descriptionId = 'promo-description-' + (index + 1);
    description.id = descriptionId;
    description.classList.add('is-collapsible');

    toggle = document.createElement('button');
    toggle.className = 'card-desc-toggle';
    toggle.type = 'button';
    toggle.setAttribute('aria-controls', descriptionId);
    toggle.setAttribute('aria-expanded', 'false');
    toggle.textContent = 'Read more';

    toggle.addEventListener('click', function () {
      var expanded = toggle.getAttribute('aria-expanded') === 'true';
      toggle.setAttribute('aria-expanded', String(!expanded));
      toggle.textContent = expanded ? 'Read more' : 'Show less';
      description.classList.toggle('is-expanded', !expanded);
    });

    description.insertAdjacentElement('afterend', toggle);
  });
}());