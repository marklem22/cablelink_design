# Cablelink Website Client Review Implementation Brief

**Source:** Client website review dated July 24, 2026  
**Project:** Cablelink website  
**Primary use:** Implementation guide for Codex  
**Status:** Client-requested revisions; some content, links, contact details, and integrations are still pending from MIS

---

## 1. Objective

Update the existing Cablelink website based on the client's review without unnecessarily redesigning completed sections. Preserve the established Cablelink branding, visual language, responsive behavior, and reusable components unless a requirement below explicitly needs a structural change.

This document is the current client-facing source of truth for the requested revisions. When a requirement is unclear or depends on missing data, do not invent content. Add a clearly labeled TODO and keep the implementation easy to complete once MIS provides the details.

---

## 2. Implementation Rules for Codex

1. Inspect the current project structure, routes, controllers, views, components, and assets before editing.
2. Reuse existing header, footer, cards, buttons, forms, modals, and content modules where practical.
3. Keep all changes responsive for desktop, tablet, and mobile.
4. Preserve the current brand colors, typography, and design system unless the client explicitly requests a change.
5. Increase header and footer font sizes while maintaining good spacing and avoiding wrapping or overflow.
6. Do not hard-code information that MIS still needs to provide, including contact details, office data, CRM connectors, MY LINK destination, or advisory content.
7. Make frequently updated content easy for administrators to upload, replace, publish, unpublish, and remove.
8. Use accessible labels, keyboard navigation, visible focus states, semantic HTML, and descriptive link text.
9. External links should open safely and use the correct target behavior based on the current project standard.
10. Do not remove existing working functionality unless this brief explicitly says to remove or relocate it.

---

## 3. Recommended Priority

### P0 - Required Functional Changes

- Privacy notice consent flow
- Application Terms of Service and Privacy Policy acceptance flow
- Required document uploads
- Disabled application submission until required agreements are accepted
- System-generated application reference number
- CRM/CS Inquiry handoff placeholder or integration point
- Header and footer navigation restructuring
- Support, Contact Us, Payment Facilities, and Get Connected routing

### P1 - Navigation and Content Structure

- Services categorization
- Payment Facilities content
- Support sections for non-subscribers and existing subscribers
- Contact Us platform links and audience types
- Advisories categories
- Search window
- Homepage call-to-action wording harmonization

### P2 - Content Management and Presentation

- Easy upload/removal for banners, promos, TVCs, advisories, and careers content
- Larger header/footer text
- Visual key art for Residential and Enterprise
- Highlight online-capable banks/payment centers

---

# 4. Detailed Requirements

## 4.1 Home Page Pop-Up

Create or revise the home page pop-up to include:

- Privacy Notice
- A consent/acceptance action before the user proceeds, subject to clarification below
- A "Like us on Facebook" action
- Clicking the Facebook action redirects to the official Cablelink Facebook page
- An X/close control

### Acceptance Criteria

- [ ] Pop-up is responsive and accessible.
- [ ] Facebook action uses the official Facebook URL supplied by the client/MIS.
- [ ] Consent state is handled consistently and is not repeatedly requested unnecessarily, according to the approved privacy behavior.
- [ ] Close behavior is confirmed because "must agree before proceeding" may conflict with allowing the user to close the pop-up.

### Clarification Required

- Confirm whether this is one combined pop-up or separate Privacy Notice and Facebook promotional pop-ups.
- Confirm whether the X button may bypass privacy consent.
- Confirm whether consent should be saved in a cookie/local storage/session and for how long.

---

## 4.2 Header and Main Navigation

The header should include the following primary items:

- Home
- Services
- Need Help
- Promos
- Payment Facilities
- Support
- Contact Us
- Advisories
- Search
- MY LINK
- Get Connected

### Services Menu

Services should expose a category-based menu containing or linking to:

- Internet
- Cable TV / Channel Line-up
- Basic 495
- Basic Lite
- Basic Plus
- Commercial
- Plans & Pricing
- Selection / Plan selector

### Need Help

- Include a "Talk to Us" action.
- Redirect "Talk to Us" to the Contact Us page.

### Header-Specific Changes

- Move Support from the footer to the header.
- Increase header font size.
- Keep the header readable and responsive at all breakpoints.
- Use a mobile navigation pattern that supports nested Services and Support items.

### Acceptance Criteria

- [ ] All header items route correctly.
- [ ] Active navigation state is visible.
- [ ] Nested menus work with mouse, keyboard, and touch.
- [ ] Mobile menu does not overflow or hide important actions.
- [ ] Header text is larger than the current version without harming layout.

---

## 4.3 Payment Facilities Page

The Payment Facilities page should contain:

- Visit Our Payment Center
- Satellite offices, including address and map
- Banks and payment centers
- Visual highlighting for entries with clickable online payment links
- Redirect links to the relevant bank/payment provider's online process
- Auto Debit application
- General payment reminder
- Link to a dedicated Billing FAQs page
- "Need Help with Your Bill" section
- Billing-specific contact details, if available:
  - Email
  - Unique mobile number

### Structural Change

- Remove Service Availability from Payment Facilities.
- Transfer Service Availability to the Get Connected area.

### Acceptance Criteria

- [ ] Online payment-capable entries are clearly distinguishable.
- [ ] All external payment links are configurable and validated.
- [ ] Office maps and addresses are easy to update.
- [ ] Billing FAQ link opens the dedicated Billing FAQ page.
- [ ] Auto Debit application has a clear CTA and destination.
- [ ] Missing billing contact details are shown as TODOs, not fabricated.

---

## 4.4 Support Section

Create or restructure Support into two audience paths.

### A. Inquiry - Non-Subscribers

- Redirect users to Get Started / Get Connected.
- Include sales-related FAQs where appropriate.

### B. Existing Subscribers

Include:

- Billing FAQ
- Basic Troubleshooting
- CATV troubleshooting, including set-top box support
- Internet troubleshooting, including cable modem and ONU support
- Speed Test

### Acceptance Criteria

- [ ] Non-subscribers and existing subscribers can immediately identify the correct support path.
- [ ] Troubleshooting categories are easy to scan.
- [ ] Speed Test points to an approved internal tool or external service.
- [ ] Support is available from the header and removed from the footer.

---

## 4.5 Contact Us Page

Include the following with clickable platform icons or actions:

- Satellite offices, with addresses and maps
- Hotline
- Viber Business
- Messenger
- Instagram
- Email

Differentiate contact options where needed, especially email addresses or channels intended for different concerns.

### Audience Cards / Key Art

- Residential, with house-themed key art
- Enterprise, with building-themed key art

### Acceptance Criteria

- [ ] Every platform icon has an accessible label.
- [ ] Every link points to the official client-provided destination.
- [ ] Phone, email, map, and messaging links use the appropriate URL format.
- [ ] Residential and Enterprise options are visually distinct but consistent with the brand.

---

## 4.6 Advisories

Create advisory categories for:

- Channel Advisories
- Service Advisories
- Alarms & Outages

### Content Management Requirement

Advisory materials must be easy to:

- Upload
- Publish
- Unpublish
- Replace
- Remove / pull down
- Categorize

### Acceptance Criteria

- [ ] Advisories can be filtered or grouped by category.
- [ ] Each advisory supports a title, date, summary, content/media, status, and category.
- [ ] Expired advisories can be removed or unpublished without code changes.
- [ ] Empty states are handled cleanly.

---

## 4.7 Search

Add a keyword-driven website search window.

### Expected Behavior

- Search relevant pages and content within the website.
- Return useful result titles, snippets, and destination links.
- Handle no-result states.
- Work on desktop and mobile.

### Clarification Required

- Confirm whether search is limited to static pages or must also include promos, advisories, FAQs, plans, and TVCs.
- Confirm the approved search implementation for the current platform.

---

## 4.8 MY LINK Button

Add a MY LINK button to the header or approved primary navigation location.

### Pending

- Destination page and page details are still to follow from the client/MIS.
- Implement only the visual/button placeholder and configurable route until final details are supplied.

---

## 4.9 Get Connected

The Get Connected area should include:

- Service Availability
- Application Menu
- Application form
- Package selection or package computation component

### Terminology

The client uses several CTA labels:

- Get Started
- Get Connected
- Get Started Today
- "Set Connected" appears in the notes and is likely a typo

Choose one approved primary phrase and use it consistently. Recommended default: **Get Connected**, unless the client confirms otherwise.

### Acceptance Criteria

- [ ] Service Availability is located here, not under Payment Facilities.
- [ ] CTA terminology is consistent across the site.
- [ ] The application and package selection flow is clear and responsive.

---

## 4.10 Home Page Scroll Content

### Welcome Section

- Keep or revise the Welcome section.
- Main CTA should use the harmonized Get Connected/Get Started label.
- CTA should direct users to the Services page or the approved conversion page.
- Include View Plans.

### Services Section

Show a service menu or category presentation covering:

- Internet
- Cable TV / Channel Line-up
- Basic 495
- Basic Lite
- Basic Plus
- Commercial
- Plans & Pricing
- Selection

### Banner Carousel

- Current format is approved.
- Make banner material easy to upload, replace, publish/unpublish, and remove.

### Promos

- Current format is approved.
- Make promo material easy to upload, replace, publish/unpublish, and remove.
- Each promo should redirect to the Promo page or its approved detail page.

### On Air / TVCs

- Current format is approved.
- Make TVC material easy to upload, replace, publish/unpublish, and remove.

### Acceptance Criteria

- [ ] Approved formats are preserved unless a technical issue requires adjustment.
- [ ] Content updates do not require editing templates or source code.
- [ ] Media has responsive sizing and appropriate loading behavior.

---

## 4.11 Application Menu and Form

The application flow should include:

- Application form
- Package selector/computation component
- Terms of Service agreement
- Privacy Policy agreement
- Required document uploads
- Application reference number
- Submission/CRM handoff

### Terms of Service Agreement

- Add a Terms of Service checkbox.
- User must be able to open and read the actual Terms of Service.
- The agreement view should include an explicit Accept action.
- Clicking Accept should automatically check the Terms checkbox.

### Privacy Policy Agreement

- Add a Privacy Policy checkbox.
- User must be able to open and read the actual Privacy Policy.
- The policy view should include an explicit Accept action.
- Clicking Accept should automatically check the Privacy checkbox.

### Document Uploads

Add attachment fields for:

- Valid ID
- Proof of billing

### Submit Button Rules

- Keep the Apply button disabled until both required agreement checkboxes are accepted.
- Also enforce agreement validation on the server; do not rely only on disabled-button behavior.
- Validate required attachments according to final business rules.

### Application Reference Number

- Generate a unique Application Reference Number after a successful submission.
- Display the reference number to the user.
- Include it in the data sent to the processing workflow.

### CRM / CS Inquiry Handoff

- MIS will provide the CRM connector.
- Prepare a clean integration point/service layer so the submitted application can be redirected or sent to CS Inquiry for processing.
- Do not fabricate endpoints, credentials, request payloads, or success rules.
- Add TODO documentation for all required connector details.

### Security and Validation

- Validate file type and file size on both client and server.
- Sanitize filenames and form input.
- Prevent executable or unsupported uploads.
- Protect personal information and avoid exposing uploaded documents through public URLs.
- Show clear validation, failure, and success messages.

### Acceptance Criteria

- [ ] Terms document opens from the form.
- [ ] Terms Accept action checks the Terms checkbox.
- [ ] Privacy document opens from the form.
- [ ] Privacy Accept action checks the Privacy checkbox.
- [ ] Apply remains disabled until both required agreements are accepted.
- [ ] Server-side validation rejects submissions without required agreements.
- [ ] Required files can be uploaded safely.
- [ ] Successful applications receive a unique reference number.
- [ ] CRM integration is isolated and configurable.

---

## 4.12 Need Help in Choosing

The "Need Help in Choosing" section should redirect to:

- Plans & Pricing
- Selection / plan selector
- Sales-related FAQs

Also include:

- Chat with Us -> redirect to Viber Business
- Talk to Us -> redirect to Contact Us

### Chat Response Requirement

MIS should update the default inquiry response so that:

- General/non-subscriber inquiries receive an appropriate generic response.
- Existing subscribers receive a different support-oriented response.

### Acceptance Criteria

- [ ] Each CTA has a clear and correct destination.
- [ ] Viber Business uses the official client-provided link.
- [ ] Automated/default responses differ based on inquiry type when the messaging system supports it.

---

## 4.13 Footer

The footer should contain:

- Privacy Notice
- Careers
- Contact Us
- About Us
  - Mission / Vision
  - Company Overview
  - Company Profile
  - Milestone(s)

### Remove or Relocate

- Remove Terms from the footer and move it to the Application Menu.
- Remove Support from the footer and move it to the header.

### Content Management

- Careers content/material should be easy to upload, replace, publish/unpublish, and remove.

### Visual Change

- Increase footer font size while maintaining spacing, hierarchy, and mobile usability.

### Acceptance Criteria

- [ ] Footer contains the required links only.
- [ ] Terms is no longer a normal footer item.
- [ ] Support is no longer a footer item.
- [ ] About Us child pages are linked correctly.
- [ ] Footer remains readable and uncluttered on mobile.

---

# 5. Proposed Information Architecture

Use the existing project route conventions. The following slugs are recommendations only and should not override already established working routes without checking references and redirects.

```text
/
/services
/services/internet
/services/cable-tv
/services/basic-495
/services/basic-lite
/services/basic-plus
/services/commercial
/plans
/plan-selector
/promos
/payment-facilities
/payment-facilities/auto-debit
/support
/support/billing-faq
/support/troubleshooting/catv
/support/troubleshooting/internet
/support/speed-test
/contact-us
/advisories
/advisories/channel
/advisories/service
/advisories/outages
/get-connected
/get-connected/service-availability
/get-connected/application
/privacy-notice
/careers
/about-us
/about-us/mission-vision
/about-us/company-overview
/about-us/company-profile
/about-us/milestones
/my-link            # Placeholder until details are supplied
```

### Routing Notes

- Add redirects when replacing or relocating existing routes.
- Update all internal links after navigation changes.
- Avoid duplicate pages with different URLs unless canonical handling is implemented.
- Verify Odoo/CodeIgniter/current-platform route constraints before renaming any existing page.

---

# 6. Suggested Reusable UI/Functional Components

Use current project naming conventions. Possible reusable modules:

```text
HeaderNavigation
MobileNavigation
ServiceMegaMenu
SupportAudienceMenu
PrivacyConsentModal
FacebookPrompt
SiteSearch
ContactMethodCard
OfficeLocationCard
PaymentProviderCard
AdvisoryCard
AdvisoryManager/List
MediaCarousel
PromoCard
TvcCard
ServiceCategoryCard
PlanSelector
ServiceAvailabilityChecker
ApplicationForm
AgreementModal
FileUploadField
ApplicationReferenceDisplay
NeedHelpChoosing
ResidentialEnterpriseSelector
FooterNavigation
```

---

# 7. MIS / Client Dependencies

Do not block unrelated frontend work, but clearly mark these as pending:

- [ ] Official Facebook page URL
- [ ] Official Viber Business URL
- [ ] Messenger URL
- [ ] Instagram URL
- [ ] Hotline number(s)
- [ ] Residential and Enterprise email addresses or routing rules
- [ ] Billing-specific email address
- [ ] Billing-specific mobile number
- [ ] Satellite office names, addresses, map links/coordinates, and operating details
- [ ] Banks/payment centers and their online payment URLs
- [ ] Auto Debit application destination and required fields/documents
- [ ] Approved Speed Test destination
- [ ] MY LINK destination and page specifications
- [ ] Advisory content/data source and admin workflow
- [ ] Banner, Promo, TVC, and Careers upload/publishing workflow
- [ ] Approved Terms of Service document
- [ ] Approved Privacy Policy document
- [ ] Allowed upload file types and maximum file sizes
- [ ] Application reference number format
- [ ] CRM/CS Inquiry connector endpoint, authentication, payload, response contract, retry behavior, and failure handling
- [ ] Service Availability data source and validation rules
- [ ] Final approved CTA phrase: Get Connected vs Get Started
- [ ] Privacy pop-up consent and close behavior

---

# 8. Suggested Implementation Order

1. Audit current routes, pages, shared layout, forms, and content models.
2. Update header and footer structure without breaking existing pages.
3. Move Service Availability, Support, and Terms links to their new locations.
4. Build or revise Payment Facilities, Support, Contact Us, Advisories, and Get Connected structures.
5. Implement the application agreement modals, checkboxes, disabled state, validation, and uploads.
6. Add application reference number generation.
7. Add a CRM connector interface with a safe pending implementation/TODO if MIS details are unavailable.
8. Add search and MY LINK placeholder.
9. Improve content management for banners, promos, TVCs, advisories, and careers.
10. Increase header/footer font sizes and complete responsive/accessibility QA.
11. Test all routes, links, forms, uploads, validation states, and mobile layouts.

---

# 9. Final QA Checklist

## Navigation

- [ ] Header contains all approved items.
- [ ] Support is in the header, not the footer.
- [ ] Terms is in the Application Menu, not the footer.
- [ ] Service Availability is under Get Connected, not Payment Facilities.
- [ ] All redirects and internal links work.

## Forms

- [ ] Terms and Privacy documents open correctly.
- [ ] Accept actions check the corresponding boxes.
- [ ] Apply is disabled until required agreements are accepted.
- [ ] Server validation enforces all required conditions.
- [ ] ID and proof-of-billing uploads work securely.
- [ ] Reference number is unique and visible after submission.
- [ ] CRM handoff is implemented or clearly marked pending MIS details.

## Content and CMS

- [ ] Banners are easy to upload and remove.
- [ ] Promos are easy to upload and remove.
- [ ] TVCs are easy to upload and remove.
- [ ] Advisories are easy to upload, categorize, publish, and remove.
- [ ] Careers content is easy to upload and remove.

## Contact and Support

- [ ] All official contact links are present and tested.
- [ ] Residential and Enterprise paths are distinct.
- [ ] Non-subscriber and existing-subscriber support paths are distinct.
- [ ] Billing help uses the approved contact details.

## UI and Accessibility

- [ ] Header and footer font sizes are increased.
- [ ] Desktop, tablet, and mobile layouts are clean.
- [ ] Menus and modals support keyboard navigation.
- [ ] Focus states are visible.
- [ ] Icons and controls have accessible labels.
- [ ] No fabricated content remains in production.

---

# 10. Important Ambiguities to Resolve Before Final Approval

1. Does the Privacy Notice pop-up require consent before any site access, or can the X button close it without consent?
2. Is "Like us on Facebook" part of the same pop-up or a separate promotional pop-up?
3. What does "application form and the package computer" mean: package selector, price calculator, or plan recommendation tool?
4. What exact content belongs under "Selection"?
5. Should website search include only pages, or also dynamic promos, advisories, FAQs, plans, and media?
6. Which contact details are intended for Residential, Enterprise, Billing, Sales, and Existing Subscriber support?
7. What is the MY LINK destination and required behavior?
8. What is the approved CRM/CS Inquiry integration contract?
9. What is the final approved CTA terminology across the website?
10. What admin/CMS tools should be used for upload and pull-down workflows in the current platform?

---

## Source Note

This implementation brief restructures the client's July 24, 2026 review into actionable development requirements. It preserves the client's requested features while separating implementation-ready work from items awaiting clarification or MIS-provided data.
