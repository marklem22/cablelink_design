(function () {
  'use strict';
  var form = document.getElementById('career-inquiry-form');
  var position = document.getElementById('career-position');
  var office = document.getElementById('career-office');
  var status = document.getElementById('career-form-status');
  var selectButtons = document.querySelectorAll('[data-select-career]');
  var cards = document.querySelectorAll('[data-career-card]');
  if (!form || !position || !office || !status) return;
  function updateSelectedCareer() {
    var selectedOption = position.options[position.selectedIndex];
    var selectedId = position.value;
    office.value = selectedOption && selectedId ? selectedOption.dataset.location || '' : '';
    cards.forEach(function (card) { card.classList.toggle('is-selected', card.dataset.careerCard === selectedId); });
    selectButtons.forEach(function (button) {
      button.setAttribute('aria-pressed', String(button.dataset.selectCareer === selectedId));
      button.textContent = button.dataset.selectCareer === selectedId ? 'Selected' : 'Select role';
    });
  }
  function selectCareer(careerId) {
    position.value = careerId;
    updateSelectedCareer();
    form.scrollIntoView({ block: 'start', behavior: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 'auto' : 'smooth' });
    position.focus({ preventScroll: true });
  }
  position.addEventListener('change', updateSelectedCareer);
  selectButtons.forEach(function (button) { button.addEventListener('click', function () { selectCareer(button.dataset.selectCareer); }); });
  form.addEventListener('submit', function (event) {
    event.preventDefault();
    status.hidden = false;
    if (!form.checkValidity()) {
      status.textContent = 'Complete all required fields and acknowledge the Privacy Notice before preparing this inquiry.';
      status.className = 'form-status has-error';
      form.reportValidity();
      return;
    }
    status.textContent = 'This prototype does not transmit personal information. A secure Careers application endpoint and approved employment consent wording are required before applications can be accepted.';
    status.className = 'form-status';
  });
}());
