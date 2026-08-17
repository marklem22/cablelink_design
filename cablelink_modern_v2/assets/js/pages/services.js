(() => {
  const viewer = document.querySelector('#catalog-viewer');
  const openTriggers = document.querySelectorAll('[data-catalog-open]');
  const closeButton = viewer?.querySelector('[data-catalog-close]');
  let lastTrigger = null;

  if (!viewer || !closeButton || !('showModal' in viewer)) return;

  const openViewer = (trigger) => {
    lastTrigger = trigger;
    viewer.showModal();
    closeButton.focus();
  };

  const closeViewer = () => viewer.close();

  openTriggers.forEach((trigger) => {
    trigger.addEventListener('click', () => openViewer(trigger));
  });

  closeButton.addEventListener('click', closeViewer);

  viewer.addEventListener('click', (event) => {
    if (event.target === viewer) closeViewer();
  });

  viewer.addEventListener('close', () => {
    lastTrigger?.focus();
    lastTrigger = null;
  });
})();
