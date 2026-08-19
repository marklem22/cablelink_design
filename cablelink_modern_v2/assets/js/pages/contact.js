(() => {
  const dialog = document.querySelector('#enterprise-email-dialog');
  const openButton = document.querySelector('[data-enterprise-email-open]');
  const closeButton = dialog?.querySelector('[data-enterprise-email-close]');
  const copyButton = dialog?.querySelector('[data-enterprise-email-copy]');
  const status = dialog?.querySelector('[data-enterprise-email-status]');
  const email = 'sales@cablelink.com.ph';

  if (!dialog || !openButton || !closeButton || !copyButton || !('showModal' in dialog)) return;

  const closeDialog = () => dialog.close();

  openButton.addEventListener('click', () => {
    status.textContent = '';
    dialog.showModal();
    closeButton.focus();
  });

  closeButton.addEventListener('click', closeDialog);

  dialog.addEventListener('click', (event) => {
    if (event.target === dialog) closeDialog();
  });

  copyButton.addEventListener('click', async () => {
    try {
      await navigator.clipboard.writeText(email);
      status.textContent = 'Email address copied.';
    } catch {
      const temporaryField = document.createElement('textarea');
      temporaryField.value = email;
      temporaryField.setAttribute('readonly', '');
      temporaryField.className = 'enterprise-email-dialog__copy-field';
      document.body.append(temporaryField);
      temporaryField.select();
      document.execCommand('copy');
      temporaryField.remove();
      status.textContent = 'Email address copied.';
    }
  });
})();
