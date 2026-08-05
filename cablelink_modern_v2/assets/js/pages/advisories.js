(function () {
  'use strict';

  var API_URL = 'api/facebook-advisories.php';
  var DEFAULT_IMAGE = 'assets/icons/cablelink_logo.png';
  var tabs = Array.prototype.slice.call(document.querySelectorAll('[data-advisory-tab]'));
  var gallery = document.querySelector('#advisory-gallery');
  var emptyState = document.querySelector('[data-advisory-empty]');
  var sourceStatus = document.querySelector('[data-advisory-source-status]');
  var dialog = document.querySelector('[data-advisory-dialog]');
  var dialogImage = document.querySelector('[data-advisory-dialog-image]');
  var dialogType = document.querySelector('[data-advisory-dialog-type]');
  var dialogTitle = document.querySelector('[data-advisory-dialog-title]');
  var dialogDetail = document.querySelector('[data-advisory-dialog-detail]');
  var dialogDate = document.querySelector('[data-advisory-dialog-date]');
  var facebookLink = document.querySelector('[data-advisory-facebook-link]');
  var closeButton = document.querySelector('[data-advisory-close]');
  var activeCategory = 'channel';
  var advisoryMap = Object.create(null);

  if (!tabs.length || !gallery) return;

  function normaliseCategory(value) {
    return String(value || '').toLowerCase() === 'service' ? 'service' : 'channel';
  }

  function normaliseAdvisory(item, index) {
    var message = String(item.message || item.summary || '').trim();
    var title = String(item.title || '').trim();

    if (!title && message) {
      title = message.split(/\r?\n/).filter(Boolean)[0].replace(/#\w+/g, '').trim();
    }

    return {
      id: String(item.id || ('advisory-' + index)),
      category: normaliseCategory(item.category),
      title: title || 'CableLink Advisory',
      message: message || 'View the advisory image for complete information.',
      summary: String(item.summary || message || 'View the advisory image for complete information.').trim(),
      image_url: String(item.image_url || item.full_picture || DEFAULT_IMAGE),
      image_alt: String(item.image_alt || title || 'CableLink advisory'),
      created_time: String(item.created_time || ''),
      permalink_url: String(item.permalink_url || ''),
      source: String(item.source || 'facebook')
    };
  }

  function truncate(text, maxLength) {
    if (text.length <= maxLength) return text;
    return text.slice(0, maxLength).replace(/\s+\S*$/, '') + '…';
  }

  function formatDate(value) {
    if (!value) return '';
    var date = new Date(value);
    if (Number.isNaN(date.getTime())) return '';
    return new Intl.DateTimeFormat('en-PH', {
      year: 'numeric',
      month: 'long',
      day: 'numeric'
    }).format(date);
  }

  function createElement(tagName, className, text) {
    var element = document.createElement(tagName);
    if (className) element.className = className;
    if (typeof text === 'string') element.textContent = text;
    return element;
  }

  function createCard(advisory, index) {
    var article = createElement('article', 'card advisory-card');
    article.setAttribute('data-advisory-id', advisory.id);
    article.setAttribute('data-advisory-category', advisory.category);

    var imageWrapper = createElement('div', 'advisory-card__image');
    var image = document.createElement('img');
    image.src = advisory.image_url || DEFAULT_IMAGE;
    image.alt = advisory.image_alt;
    image.loading = index === 0 ? 'eager' : 'lazy';
    image.width = 1080;
    image.height = 1080;
    image.addEventListener('error', function () {
      if (!image.src.endsWith(DEFAULT_IMAGE)) image.src = DEFAULT_IMAGE;
    }, { once: true });
    imageWrapper.appendChild(image);

    var content = createElement('div', 'advisory-card__content');
    var meta = createElement('div', 'advisory-card__meta');
    var type = createElement(
      'span',
      'advisory-card__type',
      advisory.category === 'service' ? 'Service Advisory' : 'Channel Advisory'
    );
    meta.appendChild(type);

    var formattedDate = formatDate(advisory.created_time);
    if (formattedDate) {
      var time = createElement('time', 'advisory-card__date', formattedDate);
      time.dateTime = advisory.created_time;
      meta.appendChild(time);
    }

    var title = createElement('h3', 'advisory-card__title', advisory.title);
    var summary = createElement('p', 'advisory-card__summary', truncate(advisory.summary, 245));
    var button = createElement('button', 'btn btn--primary btn--sm advisory-card__link', 'Learn more');
    button.type = 'button';
    button.setAttribute('data-advisory-open', '');
    button.setAttribute('aria-haspopup', 'dialog');

    content.appendChild(meta);
    content.appendChild(title);
    content.appendChild(summary);
    content.appendChild(button);
    article.appendChild(imageWrapper);
    article.appendChild(content);

    return article;
  }

  function renderAdvisories(items) {
    advisoryMap = Object.create(null);
    gallery.textContent = '';

    items.forEach(function (item, index) {
      var advisory = normaliseAdvisory(item, index);
      advisoryMap[advisory.id] = advisory;
      gallery.appendChild(createCard(advisory, index));
    });

    gallery.setAttribute('aria-busy', 'false');
    selectCategory(activeCategory);
  }

  function selectCategory(category) {
    var cards = Array.prototype.slice.call(gallery.querySelectorAll('[data-advisory-category]'));
    var count = 0;
    activeCategory = normaliseCategory(category);

    tabs.forEach(function (tab) {
      var isActive = tab.getAttribute('data-advisory-tab') === activeCategory;
      tab.classList.toggle('is-active', isActive);
      tab.setAttribute('aria-selected', String(isActive));
      tab.tabIndex = isActive ? 0 : -1;
    });

    cards.forEach(function (card) {
      var isVisible = card.getAttribute('data-advisory-category') === activeCategory;
      card.hidden = !isVisible;
      if (isVisible) count += 1;
    });

    if (emptyState) emptyState.hidden = count !== 0;
  }

  function openDetails(advisoryId) {
    var advisory = advisoryMap[advisoryId];
    if (!advisory || !dialog || typeof dialog.showModal !== 'function') return;

    dialogImage.src = advisory.image_url || DEFAULT_IMAGE;
    dialogImage.alt = advisory.image_alt;
    dialogType.textContent = advisory.category === 'service' ? 'Service Advisory' : 'Channel Advisory';
    dialogTitle.textContent = advisory.title;
    dialogDetail.textContent = advisory.message;

    var formattedDate = formatDate(advisory.created_time);
    if (dialogDate) {
      dialogDate.textContent = formattedDate;
      dialogDate.dateTime = advisory.created_time;
      dialogDate.hidden = !formattedDate;
    }

    if (facebookLink) {
      facebookLink.href = advisory.permalink_url || '#';
      facebookLink.hidden = !advisory.permalink_url;
    }

    dialog.showModal();
    if (closeButton) closeButton.focus();
  }

  function showSourceStatus(source, count, message) {
    if (!sourceStatus) return;

    if (source === 'facebook') {
      sourceStatus.textContent = 'Showing ' + count + ' advisory post' + (count === 1 ? '' : 's') + ' from the official CableLink Facebook Page.';
      sourceStatus.classList.remove('is-warning');
      return;
    }

    sourceStatus.textContent = message || 'Facebook is not configured yet. Showing saved prototype advisories.';
    sourceStatus.classList.add('is-warning');
  }

  function getFallbackData() {
    return Array.isArray(window.CABLELINK_ADVISORY_FALLBACK)
      ? window.CABLELINK_ADVISORY_FALLBACK
      : [];
  }

  function fetchFacebookAdvisories() {
    var controller = typeof AbortController === 'function' ? new AbortController() : null;
    var timeoutId = controller ? window.setTimeout(function () { controller.abort(); }, 8000) : null;

    return fetch(API_URL, {
      method: 'GET',
      headers: { Accept: 'application/json' },
      cache: 'no-store',
      signal: controller ? controller.signal : undefined
    }).then(function (response) {
      if (timeoutId) window.clearTimeout(timeoutId);
      return response.json().catch(function () { return {}; }).then(function (payload) {
        if (!response.ok) {
          throw new Error(payload.message || 'Facebook advisory endpoint is unavailable.');
        }
        return payload;
      });
    }).then(function (payload) {
      var items = Array.isArray(payload.data) ? payload.data : [];
      renderAdvisories(items);
      showSourceStatus('facebook', items.length);
    }).catch(function () {
      var fallback = getFallbackData();
      renderAdvisories(fallback);
      showSourceStatus('prototype', fallback.length);
    });
  }

  tabs.forEach(function (tab) {
    tab.addEventListener('click', function () {
      selectCategory(tab.getAttribute('data-advisory-tab'));
    });
  });

  gallery.addEventListener('click', function (event) {
    var button = event.target.closest('[data-advisory-open]');
    if (!button) return;
    var card = button.closest('[data-advisory-id]');
    if (card) openDetails(card.getAttribute('data-advisory-id'));
  });

  if (closeButton && dialog) {
    closeButton.addEventListener('click', function () { dialog.close(); });
  }

  if (dialog) {
    dialog.addEventListener('click', function (event) {
      if (event.target === dialog) dialog.close();
    });
  }

  fetchFacebookAdvisories();
}());
