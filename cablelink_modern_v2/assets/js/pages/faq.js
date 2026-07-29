(function () {
  'use strict';

  var audienceTabs = Array.prototype.slice.call(document.querySelectorAll('[data-faq-audience]'));
  var audiencePanels = Array.prototype.slice.call(document.querySelectorAll('.faq-audience-panel'));

  function activateAudience(key) {
    audienceTabs.forEach(function (tab) {
      var active = tab.dataset.faqAudience === key;
      tab.classList.toggle('is-active', active);
      tab.setAttribute('aria-selected', String(active));
    });
    audiencePanels.forEach(function (panel) {
      panel.hidden = panel.id !== key + '-faqs';
    });
  }

  function activateCategory(panel, key) {
    panel.querySelectorAll('[data-faq-category]').forEach(function (tab) {
      var active = tab.dataset.faqCategory === key;
      tab.classList.toggle('is-active', active);
      tab.setAttribute('aria-selected', String(active));
    });
    panel.querySelectorAll('.faq-category-panel').forEach(function (categoryPanel) {
      categoryPanel.hidden = categoryPanel.id !== key;
    });
  }

  audienceTabs.forEach(function (tab) {
    tab.addEventListener('click', function () {
      activateAudience(tab.dataset.faqAudience);
    });
  });

  audiencePanels.forEach(function (panel) {
    panel.querySelectorAll('[data-faq-category]').forEach(function (tab) {
      tab.addEventListener('click', function () {
        activateCategory(panel, tab.dataset.faqCategory);
      });
    });
  });

  document.querySelectorAll('.faq-accordion__trigger').forEach(function (button) {
    button.addEventListener('click', function () {
      var item = button.closest('.faq-accordion');
      var answer = document.getElementById(button.getAttribute('aria-controls'));
      var expanded = button.getAttribute('aria-expanded') === 'true';
      button.setAttribute('aria-expanded', String(!expanded));
      item.classList.toggle('is-open', !expanded);
      answer.hidden = expanded;
    });
  });

  function scrollToAudiencePanel(panel) {
    window.requestAnimationFrame(function () {
      window.requestAnimationFrame(function () {
        panel.scrollIntoView({ block: 'start' });
      });
    });
  }
  function applyHashTarget() {
    var target = document.getElementById(window.location.hash.slice(1));
    var audiencePanel;
    if (!target) return;
    if (target.classList.contains('faq-category-panel')) {
      audiencePanel = target.closest('.faq-audience-panel');
      activateAudience(audiencePanel.id.replace('-faqs', ''));
      activateCategory(audiencePanel, target.id);
      scrollToAudiencePanel(audiencePanel);
    } else if (target.classList.contains('faq-accordion__panel')) {
      audiencePanel = target.closest('.faq-audience-panel');
      activateAudience(audiencePanel.id.replace('-faqs', ''));
      activateCategory(audiencePanel, target.closest('.faq-category-panel').id);
      target.hidden = false;
      target.closest('.faq-accordion').classList.add('is-open');
      document.querySelector('[aria-controls="' + target.id + '"]').setAttribute('aria-expanded', 'true');
      window.requestAnimationFrame(function () {
        window.requestAnimationFrame(function () {
          target.closest('.faq-accordion').scrollIntoView({ block: 'start' });
        });
      });
    } else if (target.classList.contains('faq-audience-panel')) {
      activateAudience(target.id.replace('-faqs', ''));
    } else if (target.classList.contains('faq-audience-panel__header')) {
      audiencePanel = target.closest('.faq-audience-panel');
      activateAudience(audiencePanel.id.replace('-faqs', ''));
    }
  }

  applyHashTarget();
  window.addEventListener('hashchange', applyHashTarget);
}());