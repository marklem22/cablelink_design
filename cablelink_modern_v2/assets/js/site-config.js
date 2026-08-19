/* Public, non-secret integration configuration for the standalone prototype.
 * Leave values empty until the client supplies and approves them.
 * Production secrets and MIS/CRM credentials must never be added here.
 */
window.CablelinkConfig = Object.freeze({
  externalLinks: Object.freeze({
    facebook: 'https://www.facebook.com/CablelinkTV',
    messenger: 'https://m.me/CablelinkTV',
    viber: 'viber://chat?service=32146',
    instagram: 'https://www.instagram.com/cablelinktv/',
    x: 'https://twitter.com/cablelinktv',
    myLink: ''
  }),
  paymentLinks: Object.freeze({}),
  integrations: Object.freeze({
    applicationEndpoint: '',
    autoDebitEndpoint: '',
    chatbotEmbed: ''
  })
});
