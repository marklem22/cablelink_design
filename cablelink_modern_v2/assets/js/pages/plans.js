(function () {
  'use strict';

  function updateButtons(carousel) {
    var grid = carousel.querySelector('.plan-grid, .cable-grid');
    var previous = carousel.querySelector('.plan-carousel__button--previous');
    var next = carousel.querySelector('.plan-carousel__button--next');
    var maximumScroll = grid.scrollWidth - grid.clientWidth;

    previous.disabled = grid.scrollLeft <= 1;
    next.disabled = grid.scrollLeft >= maximumScroll - 1;
  }

  function createButton(direction) {
    var button = document.createElement('button');
    var isPrevious = direction === 'previous';

    button.type = 'button';
    button.className = 'plan-carousel__button plan-carousel__button--' + direction;
    button.setAttribute('aria-label', isPrevious ? 'Show previous plans' : 'Show next plans');
    button.innerHTML = isPrevious
      ? '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="m15 18-6-6 6-6"/></svg>'
      : '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg>';

    return button;
  }

  function setupCarousel(grid) {
    if (grid.closest('.plan-carousel')) return;

    var carousel = document.createElement('div');
    var previous = createButton('previous');
    var next = createButton('next');
    var observer;

    carousel.className = 'plan-carousel';
    grid.parentNode.insertBefore(carousel, grid);
    carousel.appendChild(grid);
    carousel.appendChild(previous);
    carousel.appendChild(next);

    function move(direction) {
      grid.scrollBy({ left: Math.max(grid.clientWidth, 1) * direction, behavior: 'smooth' });
    }

    previous.addEventListener('click', function () { move(-1); });
    next.addEventListener('click', function () { move(1); });
    grid.addEventListener('scroll', function () { updateButtons(carousel); }, { passive: true });
    window.addEventListener('resize', function () { updateButtons(carousel); });

    observer = new MutationObserver(function () { updateButtons(carousel); });
    observer.observe(grid, { attributes: true, attributeFilter: ['class'], childList: true, subtree: true });

    updateButtons(carousel);
  }

  function initialiseCarousels() {
    document.querySelectorAll('.plan-grid, .cable-grid').forEach(setupCarousel);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initialiseCarousels);
  } else {
    initialiseCarousels();
  }
}());
