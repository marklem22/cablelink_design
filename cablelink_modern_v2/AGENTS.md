# Cablelink Website - Client Revision Implementation Instructions

## Purpose

Implement the approved Cablelink website revisions accurately, conservatively, and in a way that is ready for client review.

This file is the authoritative implementation brief for this revision cycle. Use it together with the existing repository, current approved Cablelink design, and actual project configuration.

Do not redesign unrelated pages, invent business content, or replace working architecture unless a change is required by this brief.

---

## 1. Required Working Method

Before editing code:

1. Inspect the repository structure and identify:
   - framework and version;
   - routes;
   - controllers;
   - views/templates;
   - shared header and footer;
   - reusable components/partials;
   - CSS and JavaScript entry points;
   - application and Auto Debit form handling;
   - database/MIS/CRM integration points;
   - existing privacy popup, advisories, social links, chatbot, and payment facility data.

2. Confirm whether the project is CodeIgniter 3. It is expected to be CI3, but use the repository as the source of truth. Do not migrate the framework.

3. Find the current implementation of every requested item before changing it. Reuse existing components and styles where practical.

4. Prepare a concise implementation plan listing:
   - files to modify;
   - files to create;
   - routes affected;
   - data or credentials still required;
   - possible conflicts or regressions.

5. Implement the smallest complete set of changes needed for this revision.

6. Run available tests, linting, build checks, and manual route checks. If the repository has no automated tests, perform the acceptance checks in this document.

Do not claim that an integration is complete unless it is connected to a real configured endpoint and a successful test has been performed.

---

## 2. Project Guardrails

- Preserve the existing Cablelink brand, approved typography, colors, component language, spacing system, and responsive behavior.
- Do not introduce a new visual style or gradients unless already part of the approved implementation.
- Keep shared elements reusable. Do not duplicate the header, footer, buttons, form controls, cards, or navigation markup across pages when a shared partial/component exists.
- Do not alter unrelated content, routes, database tables, or business logic.
- Do not remove working functionality unless the client explicitly requested its removal.
- Do not use placeholder business information as final production content.
- Do not invent plan names, plan prices, coverage locations, office details, contact numbers, legal language, social URLs, MIS credentials, or advertising assets.
- Preserve existing SEO metadata where possible and update page titles/descriptions only when the page purpose changes.
- All changes must work on desktop, tablet, and mobile.
- Use accessible keyboard navigation, visible focus states, labels, error messages, and semantic HTML.
- Icon-only links must have accessible names using `aria-label`, title text, or equivalent.
- Maintain backward compatibility with existing valid URLs unless a redirect is deliberately added.

---

## 3. Exact Client Wording Rules

### 3.1 Application-oriented CTA

Use **Get Connected** as the standard CTA for actions that begin or continue the service application journey.

Replace application CTAs such as:

- Get Now
- Get Today
- Apply Today
- other equivalent application-start wording

with:

- Get Connected

### 3.2 Do Not Rename Unrelated Actions

Do not change labels whose functions are different. Keep clear labels such as:

- View Plans
- Contact Us
- View Privacy Notice
- Like Us on Facebook
- Continue to Website
- Search
- Submit
- Upload
- Learn More, when it does not begin the application journey

The wording rule is not permission to rename every button on the website.

---

## 4. Information Architecture and User Journey

The intended conversion flow is:

1. User understands Cablelink's value proposition.
2. User reviews services or plans.
3. User selects **Get Connected**.
4. User checks service availability or coverage.
5. User continues to the application.
6. User submits the required information and documents.
7. The application is sent to the configured internal MIS/CRM for staff review.
8. Installation scheduling occurs through the client's internal process.

The homepage should support a clear **Learn -> Choose -> Apply** journey rather than displaying disconnected competing CTAs.

---

## 5. Homepage Revisions

### Required

- Increase the visual height and impact of the hero/header section.
- Make the primary value proposition understandable immediately.
- Keep hero text readable and do not allow background artwork to interfere with it.
- Use **Get Connected** for the primary application CTA.
- Improve section order and CTA hierarchy so users naturally move from services/plans to Get Connected and then to the application.
- Remove service advisories from prominent homepage content.
- Keep the homepage focused on service discovery, plan selection, application, and support.
- Ensure the hero and all sections remain responsive.

### Do Not

- Do not make the hero so large that users cannot see the next useful content on common laptop screens.
- Do not add several equal-priority primary buttons.
- Do not invent new promotional copy or offers.
- Do not display September, October, or November campaign artwork until approved assets/copy are supplied.

### Acceptance Checks

- One obvious primary application CTA is visible.
- Application-oriented CTA text is consistently **Get Connected**.
- The next step after the hero is clear.
- Advisories no longer dominate or clutter the homepage.
- No text/background collision occurs at common desktop and mobile widths.

---

## 6. Header and Main Navigation

### Required

- Add or retain a clear **Contact Us** button in the header.
- Add **Support** as a primary navigation item.
- The Support menu must provide access to:
  - FAQ
  - Existing Subscribers
  - Advisories
  - Payment Options
  - Billing Support
- **Get Connected** must route directly into the application journey.
- Keep navigation understandable on desktop and mobile.

### About Us Placement

The confirmed safe revision is to add **About Us** in the footer.

Do not add About Us to the main header unless:
- it already exists and should remain; or
- the client separately confirms that it belongs in the header.

### Acceptance Checks

- Header Contact Us button works.
- Support submenu/items work with keyboard and touch.
- Mobile navigation contains the same required destinations.
- Get Connected does not lead to a generic marketing page.

---

## 7. Services and Plans

The current Services area was reported as confusing and must be simplified.

### Required Organization

Organize services into understandable top-level categories:

- Residential Internet
- Cable TV
- Bundled Plans
- Enterprise

Use the actual plans and content already approved in the repository/client data. Do not invent missing products.

### Plan Presentation

Users must quickly understand:

- what plans are available;
- which category each plan belongs to;
- important differences;
- pricing, when approved pricing exists;
- the next action;
- where to apply.

Keep **View Plans** where it accurately opens a plan list or plan details. Use **Get Connected** when the action begins the application.

### Acceptance Checks

- A new user can distinguish the four service categories.
- Plans are not presented as one undifferentiated list.
- Cards/tables are readable on mobile.
- Pricing and plan details come from existing approved data.
- Each plan journey has a clear next step.

---

## 8. Get Connected, Coverage, and Application Journey

### Routing Requirement

**Get Connected** must lead directly into the application journey.

The preferred journey is:

`Get Connected -> Check Service Availability -> Continue Application`

Coverage checking should be part of this journey instead of forcing users to leave the application flow and visit an unrelated page.

### Preserve Useful Coverage Functionality

Do not delete a working standalone coverage route solely because coverage is being integrated into Get Connected. Preserve it if it is linked externally or used elsewhere, but make the Get Connected journey the primary route.

### Acceptance Checks

- Every primary Get Connected CTA reaches the intended journey.
- Availability checking appears before or as the first step of the application.
- User input is not lost when moving between availability and application steps.
- Invalid/unavailable areas receive a helpful next action rather than a dead end.

---

## 9. Application Form

### Required Fields and Controls

Add or verify:

- required consent checkbox before submission;
- attachment upload;
- Proof of Billing upload;
- Proof of Address upload only if confirmed by the current form requirements or client;
- clear required-field indicators;
- client-side validation for usability;
- server-side validation for security and correctness;
- clear success and error states.

### Consent

The consent checkbox must:

- be unchecked by default;
- have understandable consent/privacy wording;
- be required server-side, not only through JavaScript;
- link to the Privacy Notice or Privacy Policy when appropriate.

Do not invent final legal consent wording. Use approved content or clearly mark it as pending client approval.

### File Upload Security

At minimum:

- allow only approved document/image file types;
- enforce a reasonable maximum size in both client and server validation;
- generate safe server-side filenames;
- reject executable or dangerous content;
- prevent path traversal;
- store files outside the public web root when the existing architecture supports it;
- never expose server file paths to users;
- display clear validation errors.

Use the project's established upload/storage approach rather than creating an incompatible subsystem.

---

## 10. MIS/CRM Integration

The client requires submitted applications to connect to the internal MIS/CRM.

### Critical Rule

Do not invent an API endpoint, credentials, payload schema, authentication method, database connection, or success response.

### Implementation Approach

1. Locate any existing MIS/CRM integration.
2. Reuse its service/model/client and configuration pattern.
3. Keep credentials and URLs in environment/configuration, never hard-coded.
4. Map application fields and uploaded documents to the confirmed MIS schema.
5. Handle:
   - successful submission;
   - validation rejection;
   - authentication/configuration failure;
   - network timeout;
   - duplicate submission;
   - logging without exposing personal data.
6. Show users a truthful status.

If MIS details are not provided:

- complete the validated application UI and secure local form-handling structure;
- create a clearly named integration boundary/service;
- document the exact missing endpoint, credentials, field mapping, and expected response;
- keep the integration disabled or in a clearly marked non-production state;
- do not show a false "sent to MIS" success message.

### Definition of Complete

MIS integration is complete only when:

- real configuration is present;
- a test submission reaches the intended system;
- the expected record is created or acknowledged;
- failure handling is verified;
- no secrets are committed.

---

## 11. Contact Us and "Need Help Choosing?"

### Required

The **Need Help Choosing?** area must offer direct actions without sending users through an unnecessary intermediate page:

- Messenger
- Viber
- Contact Us

Use the official URLs/contact details already configured or provided by the client.

### Contact Platform Display

Where the design calls for a compact contact/social list:

- show platform icons only;
- make each icon a working link;
- include accessible labels and tooltips;
- open external platforms safely;
- do not show duplicate text labels unless needed for accessibility or mobile clarity.

### Acceptance Checks

- Messenger, Viber, and Contact Us actions are direct.
- No placeholder links such as `#` remain.
- Icon links are understandable to screen-reader and keyboard users.
- The header Contact Us button and footer contact details are consistent.

---

## 12. Footer

Expand the footer to contain useful detailed information instead of only copyright text.

### Required Content

Use approved existing data for:

- company information;
- contact details;
- social media/platform links;
- useful navigation links;
- About Us;
- Privacy Policy or Privacy Notice;
- support destinations where appropriate.

### Rules

- Do not invent missing company details.
- Do not add About Us to the header based only on this requirement.
- Keep the footer responsive and readable.
- Avoid repeating an excessive amount of page content.

---

## 13. Support and Billing Support

### Support Navigation

Support must expose:

- FAQ
- Existing Subscribers
- Advisories
- Payment Options
- Billing Support

### Billing Support

Treat Billing Support as distinct from general Contact Us.

The Billing Support page/section should use actual available billing assistance content and contact channels. Do not invent policies, response times, account processes, or payment dispute rules.

### Acceptance Checks

- Support destinations are easy to find.
- Billing Support is clearly separated from general inquiries.
- Existing Subscriber support is not mixed with new service applications.

---

## 14. Payment Facilities

### Required

- Remove Coverage Area content from the Payment Facilities page.
- Keep the page focused on:
  - payment methods;
  - payment partners/facilities;
  - payment instructions.
- Add search/filtering for payment facilities or payment methods.
- Add an online fillable Auto Debit application form.

### Search Behavior

- Search must be fast and understandable.
- Match useful fields available in the data, such as name, location, partner, or method.
- Include a no-results state.
- Do not fabricate facility records.
- Preserve the original order or an intentional documented sort.

### Auto Debit Form

- Use the client's confirmed fields and consent language.
- Validate on client and server.
- Do not replace a required signed/legal workflow unless the client confirms the online form is sufficient.
- Do not claim successful enrollment unless it reaches the real configured destination.
- Protect any personal and banking-related data using the project's approved secure handling.
- Do not log sensitive full account information.

### Acceptance Checks

- Coverage content is absent from Payment Facilities.
- Search returns correct matching facilities.
- No-results state is clear.
- Auto Debit form cannot submit invalid or incomplete required data.
- Submission behavior is truthful and documented.

---

## 15. Privacy Notice and Entry Popup

### Required

Keep or add a website-entry popup that:

- displays a short Privacy Notice;
- provides a **View Privacy Notice** action;
- invites users to like/follow Cablelink's official Facebook page;
- provides a **Like Us on Facebook** action;
- provides a **Continue to Website** action;
- includes a clear close control;
- links users to the complete Privacy Notice/Privacy Policy available from the footer.

Suggested approved structure from the notes:

**Stay Updated with Cablelink**

"By continuing to browse this website, you acknowledge Cablelink's Privacy Notice."

Actions:

- View Privacy Notice
- Like Us on Facebook
- Continue to Website

Treat the quoted notice as suggested copy, not finalized legal content, unless the client approves it.

### Popup Behavior

- Do not display on every page navigation.
- Use the current consent/session pattern if one exists.
- If no pattern exists, show it on first entry and store dismissal/acknowledgment appropriately.
- The popup must be keyboard accessible.
- Focus must be managed correctly.
- Escape/close behavior must be clear.
- Background scrolling/focus should be controlled while modal is open.
- Do not use deceptive consent patterns.

### Dependency

The finalized full Privacy Policy/Notice content must come from Cablelink. Do not invent legal text.

---

## 16. Chatbot

Add or retain a website chatbot/chatbox.

### Before Implementation

Check whether the client has supplied:

- chatbot platform/vendor;
- embed code or API;
- account/workspace identifier;
- allowed pages;
- welcome message;
- operating hours;
- escalation contact;
- privacy/data handling requirements.

If these are missing, create only a safe integration placeholder/configuration point if useful. Do not select a vendor, create an account, or fabricate a production bot.

### Acceptance Checks

- Widget does not cover important mobile controls.
- Keyboard and close controls work.
- Loading failure does not break the page.
- No secret keys are exposed in frontend code.
- Chatbot is not presented as fully operational without real configuration.

---

## 17. Service Advisories

### Required

- Remove service advisories from prominent homepage placement.
- Keep advisories available through:
  - the dedicated Advisories destination under Support; and/or
  - the client's official X (Twitter) channel, when confirmed.

### Do Not

- Do not delete historical advisory data without instruction.
- Do not invent an X account URL.
- Do not embed an external feed if the official account and embed approach are not confirmed.
- Do not remove the Advisories link from Support.

---

## 18. Monthly Advertising Campaigns

The notes request three monthly ad campaigns:

- September
- October
- November

These are content/design deliverables, not permission to invent final promotions.

### Required Handling

- Locate any approved assets/copy already supplied.
- Create implementation slots/components only when needed.
- Use clear asset naming and responsive image handling.
- Do not publish unapproved promotional claims, prices, dates, or artwork.
- Record missing assets/copy as client dependencies.

---

## 19. Data and Content Dependencies

Before marking the entire revision complete, confirm receipt of:

- finalized Privacy Policy/Privacy Notice;
- official Facebook URL;
- official Messenger URL;
- official Viber contact/link;
- official X (Twitter) URL;
- finalized header/footer company and contact details;
- approved plan content and pricing;
- coverage/availability data source;
- MIS/CRM endpoint and authentication;
- MIS/CRM field/payload mapping;
- required document types and upload limits;
- Auto Debit form fields, destination, consent, and processing rules;
- chatbot vendor/embed/configuration;
- September, October, and November ad copy/assets.

Create a `CLIENT_DEPENDENCIES.md` or equivalent project note only if the repository has an appropriate documentation location. Do not scatter unresolved TODOs throughout production UI.

---

## 20. Technical Quality Requirements

### Forms and Security

- Apply server-side validation.
- Use CSRF protection provided by the framework.
- Escape output.
- Sanitize and normalize accepted input appropriately.
- Rate-limit or otherwise protect public forms when supported.
- Avoid exposing personal data in logs, URLs, analytics, or error messages.
- Do not commit secrets or live credentials.
- Use secure upload handling.
- Preserve submitted data after validation errors when safe.

### Frontend

- Reuse tokens/components.
- Avoid inline styles when the project has a stylesheet system.
- Avoid duplicated JavaScript event handlers.
- Do not introduce large dependencies for simple UI behavior.
- Support common modern browsers used by the current site.
- Prevent layout shift from images, popup, chatbot, and asynchronous content.
- Use lazy loading appropriately without hiding above-the-fold content.

### CodeIgniter 3, If Confirmed

- Follow existing controller/model/view conventions.
- Use configured base URLs and route helpers.
- Keep business logic out of views.
- Use form validation and upload libraries where consistent with the project.
- Reuse shared templates/partials for header and footer.
- Keep configuration environment-specific.
- Do not modify `system/` framework files.
- Do not introduce CodeIgniter 4 patterns into a CI3 project.

---

## 21. Implementation Priority

### Priority 0 - Must Not Be Guessed

- MIS/CRM details
- finalized privacy/legal content
- official contact/social URLs
- approved plan/pricing data
- Auto Debit processing requirements
- chatbot configuration
- monthly ad assets/copy

### Priority 1 - Core Client Revision

- larger/improved homepage hero;
- standardized application CTA wording;
- clearer homepage flow;
- refined service categories and plan presentation;
- Get Connected routing into availability/application;
- application consent and document uploads;
- Contact Us header button;
- Support navigation;
- direct Need Help Choosing actions;
- expanded footer;
- Payment Facilities cleanup/search;
- privacy popup and footer link;
- advisories removed from homepage.

### Priority 2 - Integration-Dependent

- live MIS/CRM connection;
- production Auto Debit submission;
- production chatbot;
- official X advisory integration;
- monthly advertising campaigns.

---

## 22. Required Final QA Checklist

Before presenting the work as ready for client review, verify:

### Navigation and Routes

- [ ] No broken header, footer, Support, plan, contact, privacy, advisory, payment, coverage, or application links.
- [ ] Get Connected routes to the intended availability/application journey.
- [ ] Existing public URLs still work or have intentional redirects.
- [ ] Mobile menu contains required items.

### Content and Wording

- [ ] Application CTAs use Get Connected.
- [ ] Unrelated action labels were not incorrectly renamed.
- [ ] No invented prices, addresses, contacts, policies, endpoints, or campaign claims.
- [ ] About Us is in the footer unless otherwise confirmed.
- [ ] Advisories are not prominently displayed on the homepage.

### Services and Plans

- [ ] Four clear service categories are present.
- [ ] Approved plan data is preserved.
- [ ] View Plans and Get Connected have distinct correct purposes.
- [ ] Plan layouts work on mobile.

### Application

- [ ] Availability check is integrated into the journey.
- [ ] Consent is required server-side.
- [ ] Required attachments work.
- [ ] Invalid file types/sizes are rejected.
- [ ] Validation and error messages are clear.
- [ ] MIS status is represented truthfully.

### Contact and Support

- [ ] Contact Us is available in the header.
- [ ] Support includes all five required destinations.
- [ ] Need Help Choosing links directly to Messenger, Viber, or Contact Us.
- [ ] Icon-only links include accessible labels.
- [ ] Billing Support is distinct from general contact.

### Payment Facilities

- [ ] Coverage Area content is removed from the payment page.
- [ ] Search/filter works.
- [ ] No-results state works.
- [ ] Auto Debit form validation works.
- [ ] Submission destination is real or clearly documented as pending.

### Privacy, Chatbot, and Advisories

- [ ] Entry popup is accessible and not shown repeatedly during normal navigation.
- [ ] View Privacy Notice reaches the full notice/policy link.
- [ ] Facebook action uses the official URL.
- [ ] Chatbot does not block mobile UI.
- [ ] Advisories remain accessible through Support/dedicated page.

### Visual and Regression Testing

- [ ] Desktop widths tested.
- [ ] Tablet widths tested.
- [ ] Mobile widths tested.
- [ ] No text overlaps, clipped controls, horizontal overflow, or broken menus.
- [ ] Forms work with keyboard only.
- [ ] Focus states are visible.
- [ ] Existing pages outside this revision still render and function.
- [ ] Browser console has no new relevant errors.
- [ ] Server/PHP logs have no new relevant errors.

---

## 23. Required Completion Report

At the end of the Codex task, report:

1. **Implemented**
   - grouped by page/feature.

2. **Files Changed**
   - with a short reason for each.

3. **Routes Changed or Added**

4. **Validation Performed**
   - tests, commands, routes, screen sizes, form scenarios.

5. **Client Dependencies Remaining**
   - exact missing content, credentials, URLs, assets, or decisions.

6. **Not Implemented**
   - anything intentionally deferred and why.

7. **Risks or Follow-up**
   - migrations, deployment configuration, credentials, storage permissions, external integrations, or client confirmation.

Do not use vague statements such as "everything is done." Be precise and distinguish completed UI, backend wiring, and live external integration.

---

## 24. Recommended Codex Task Prompt

Use this repository instruction file as the source of truth.

Inspect the current Cablelink project first, then implement the client revision in reviewable stages. Preserve the current framework and approved design. Do not invent missing business content, legal copy, contact URLs, plan data, MIS/CRM details, Auto Debit processing rules, chatbot configuration, or monthly advertising assets.

Start by reporting the affected files, routes, existing implementation, and unresolved dependencies. Then implement Priority 1 items, validate them, and only implement Priority 2 integrations when real configuration is available. Finish with the completion report required by this file.
