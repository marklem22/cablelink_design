/* Public, non-secret integration configuration for the standalone prototype.
 * Leave values empty until the client supplies and approves them.
 * Production secrets and MIS/CRM credentials must never be added here.
 */
window.CableLinkConfig = Object.freeze({
  externalLinks: Object.freeze({
    facebook: 'https://www.facebook.com/CablelinkTV',
    messenger: '',
    viber: '',
    instagram: '',
    x: '',
    myLink: ''
  }),
  paymentLinks: Object.freeze({}),
  integrations: Object.freeze({
    applicationEndpoint: '',
    autoDebitEndpoint: '',
    chatbotEmbed: ''
  })
});
