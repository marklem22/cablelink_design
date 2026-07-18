---
name: cablelink-website
description: Build, revise, review, and migrate CableLink website pages while preserving the shared CableLink design system, reusable components, responsive behavior, accessibility, and a 1440px maximum content width. Use for the standalone HTML prototype and the later CodeIgniter 3 implementation.
---

# CableLink Website Skill

## Purpose

Use this skill whenever creating, revising, reviewing, or migrating a CableLink website page.

The goal is to make every page feel like one website, not a collection of separately generated designs. Reuse the established CableLink visual language and components, keep page CSS small, and make the HTML prototype easy to convert into CodeIgniter 3 views.

## Project Context

The current project is a standalone HTML prototype used for quick client review. The filenames below describe the intended project paths after the uploaded files are placed into the prototype folder structure.

Current shared files:

- `assets/css/site.css` — shared tokens, layout rules, shell styles, and reusable components.
- `assets/js/site-shell.js` — loads the prototype header and footer partials.
- `partials/header.html` — prototype global header and mobile navigation.
- `partials/footer.html` — prototype global footer.
- `assets/css/cablelink_<page>.css` — page-specific styles only.
- `assets/js/pages/<page>.js` — preferred location for page-specific behavior.

The future production version will use CodeIgniter 3. The prototype should therefore use clean semantic HTML, reusable partials, relative asset organization, and minimal page-specific coupling.

## Instruction Priority

When instructions conflict, follow this order:

1. The user's explicit request.
2. Existing verified client content and product data.
3. This skill's design-system and architecture rules.
4. The closest existing CableLink component or page pattern.
5. A new pattern only when no suitable reusable pattern exists.

Do not silently redesign established components just because another design looks newer.

# Non-Negotiable Rules

1. Use a maximum page content width of `1440px`.
2. Use one shared container and gutter system on every page.
3. Use `site.css` as the only source of global colors, spacing, typography, radii, shadows, breakpoints, header, footer, buttons, and common components.
4. Do not redefine `:root`, resets, `body`, the global header, global footer, or generic buttons inside page CSS.
5. Do not duplicate header or footer markup inside a new page.
6. Do not use inline styles or inline JavaScript event attributes in new code.
7. Use semantic headings with exactly one meaningful `<h1>` per page.
8. Make every page work at 320px, 375px, 768px, 1024px, 1440px, and wide desktop sizes.
9. Preserve real CableLink plan names, prices, speeds, channel information, locations, and legal copy. Never invent business data.
10. Build the HTML prototype so the main page content can later be moved into a CodeIgniter view without rewriting the markup.
11. Every new page, component, feature, and revision must be responsive by default. Test the affected layout on desktop, tablet, and mobile before considering the task complete. A feature is not complete if it works only at the viewport where it was initially created.

## Spacing Authority

When creating or revising a page, do not immediately add padding or margin to make elements appear aligned.

First identify:

1. The outer full-width section.
2. The single inner `.container`.
3. The parent component that owns its internal layout and `gap`.
4. Any nested wrapper introducing duplicate horizontal or vertical spacing.

Fix spacing at its original owner. Never compensate for an incorrect container, section, or parent gap by adding padding or margins to individual children.

Rules:

- All page-level horizontal spacing comes from the shared `.container`.
- All section-to-section vertical spacing comes from shared section modifiers.
- All internal component spacing comes from shared spacing tokens and parent `gap` values.
- Page styles may control composition, but they must not create a competing page-level spacing system.
- Use an existing shared spacing token before introducing a new value.
- Add a new token only when the spacing relationship is reusable across multiple components or pages.
- Do not use arbitrary spacing values to visually patch a revision.
- Do not change a global spacing token only to fix one page. If a shared token genuinely needs to change, verify its effect across all existing pages and shared components.
- A revision must preserve spacing in unaffected sections unless the user's request requires a broader system change.
- A new feature should inherit the spacing pattern of the closest existing component before introducing a new component variant.

# Design System Source of Truth

## Canonical Tokens

Keep all shared tokens in `assets/css/site.css`. Page files must consume these variables instead of adding competing values.

Use this token direction:

```css
:root {
  /* Brand */
  --blue-primary: #007afe;
  --blue-secondary: #02caff;
  --blue-light: #31aafe;
  --orange: #f78220;
  --orange-dark: #d96910;
  --yellow: #febb36;

  /* Neutrals */
  --white: #ffffff;
  --off-white: #f5faff;
  --dark: #0d1b3e;
  --muted: #64748b;
  --border: #cfe8ff;

  /* Typography */
  --font: "Montserrat", sans-serif;

  /* Layout */
  --container: 1440px;
  --gutter: clamp(1rem, 5vw, 4.5rem);
  --header-height: 68px;

  /* Spacing */
  --space-1: 0.25rem;
  --space-2: 0.5rem;
  --space-3: 0.75rem;
  --space-4: 1rem;
  --space-5: 1.5rem;
  --space-6: 2rem;
  --space-7: 3rem;
  --space-8: 4rem;
  --space-9: 5rem;
  --space-10: 6rem;
  --section-space-y: clamp(4rem, 7vw, 7rem);
  --section-space-y-compact: clamp(2.5rem, 4vw, 4rem);
  --section-space-y-spacious: clamp(5rem, 9vw, 9rem);

  /* Component relationships */
  --stack-xs: 0.5rem;
  --stack-sm: 1rem;
  --stack-md: 1.5rem;
  --stack-lg: 2rem;
  --stack-xl: 3rem;
  --grid-gap: clamp(1rem, 2vw, 1.75rem);

  /* Shape and depth */
  --radius-sm: 8px;
  --radius-md: 14px;
  --radius-lg: 20px;
  --radius-xl: 28px;
  --radius-pill: 999px;
  --shadow-sm: 0 2px 8px rgba(0, 122, 254, 0.12);
  --shadow-md: 0 8px 32px rgba(0, 122, 254, 0.16);
  --shadow-lg: 0 24px 64px rgba(13, 27, 62, 0.16);
}
```

Do not create aliases for the same color unless an existing page still needs them during migration. Gradually replace aliases such as `--midnight`, `--charcoal`, and `--slate-dark` with the canonical tokens.

## Container Rule

Use a full-width section with one centered inner container.

```css
.container {
  width: 100%;
  max-width: var(--container);
  margin-inline: auto;
  padding-inline: var(--gutter);
}
```

The `1440px` maximum includes the container's inner gutters because the project uses `box-sizing: border-box`.

Correct:

```html
<section class="section page-feature">
  <div class="container">
    <!-- content -->
  </div>
</section>
```

Incorrect:

```html
<section class="section container">
  <div class="another-wrapper-with-5-percent-padding">
    <!-- double gutters -->
  </div>
</section>
```

Rules:

- Full-bleed background colors, gradients, and images belong on the outer section.
- Text, cards, controls, and grids belong inside `.container`.
- Do not add `max-width: 1120px`, `1200px`, `1280px`, or `1480px` to a page's main layout.
- A deliberately narrow text column may use a component-level limit such as `max-width: 46rem`; it must still live inside `.container`.
- Do not apply horizontal page gutters to both the section and its container.


## Layout Alignment Contract

Every top-level page area must use the same left and right `.container` boundaries.

The following elements MUST share the same container system:

- Global header
- Hero
- Main sections
- CTA bands
- Footer

Rules:

1. There must be exactly **one** horizontal gutter system.
2. Never apply horizontal page spacing to both a section and its inner container.
3. Never use arbitrary page gutters such as:
   - `padding-inline: 5%`
   - `padding-inline: 7%`
   - `padding-inline: 9%`
   - extra wrapper padding
   - compensating margins
4. Horizontal page spacing belongs only to `.container`.
5. Sections own only:
   - full-width backgrounds
   - shared vertical section spacing
   - decorative effects
6. Components own only their internal layout and spacing.
7. Left-aligned header, hero, section, card-grid, CTA, and footer content must begin on the same content edge.
8. Centered, narrow, or intentionally offset components are allowed only when they remain inside the shared `.container`; they must not redefine page gutters.
9. Before considering a page complete, verify the container boundaries first, then verify intentional component alignment inside them.
10. Never compensate for layout problems by adding more padding or margins. Find the element introducing the duplicate gutter and remove it.


## Section and Component Spacing

Default section:

```css
.section {
  padding-block: var(--section-space-y);
}
```

Compact section:

```css
.section--compact {
  padding-block: var(--section-space-y-compact);
}
```

Spacious section:

```css
.section--spacious {
  padding-block: var(--section-space-y-spacious);
}
```

Rules:

- Do not invent a different large vertical padding for each page.
- Use section padding only for separation between top-level page sections.
- Use parent `gap` for repeated relationships inside grids, flex layouts, forms, card groups, action groups, and content stacks.
- Prefer `gap` on the parent before adding margins to individual children.
- Use `--stack-xs` through `--stack-xl` for component relationships.
- Use `--grid-gap` for the default reusable grid gap.
- Use margin only for a deliberate one-direction relationship that cannot be represented cleanly by a parent `gap`.
- Do not use margins to repair container alignment, card height differences, or section rhythm.
- When revising a feature, change the spacing owner instead of stacking new overrides on its children.

## Typography

Use Montserrat throughout unless the client explicitly approves another family.

Recommended shared scale:

```css
.display-title {
  font-size: clamp(2.5rem, 5vw, 4.75rem);
  line-height: 1.03;
  letter-spacing: -0.045em;
  font-weight: 900;
}

.page-title {
  font-size: clamp(2.25rem, 4.2vw, 4rem);
  line-height: 1.08;
  letter-spacing: -0.04em;
  font-weight: 900;
}

.section-title {
  font-size: clamp(1.75rem, 3vw, 2.75rem);
  line-height: 1.15;
  letter-spacing: -0.03em;
  font-weight: 900;
}

.card-title {
  font-size: clamp(1.1rem, 1.5vw, 1.4rem);
  line-height: 1.25;
  font-weight: 800;
}

.body-copy {
  font-size: clamp(0.95rem, 1vw, 1.05rem);
  line-height: 1.7;
}
```

Rules:

- One `<h1>` per page.
- Page hero titles must use `<h1>`, not `<h2>`.
- Section headings normally use `<h2>`.
- Card titles normally use `<h3>`.
- Do not select a heading level based on its desired font size. Use semantic order, then style it.
- Avoid manual `<br>` tags in headings unless a deliberate approved line break is needed. Prefer a controlled `max-width`.
- Body copy should normally remain between `55ch` and `72ch` for readability.

## Brand Use

- Blue is the primary brand and structural color.
- Orange is the primary action and emphasis color.
- Cyan and light blue are supporting accents.
- Dark navy is the default text color.
- Do not use orange for long body text.
- Do not add a new accent color unless it communicates a real status such as success, warning, or error.
- Decorative gradients should stay within the CableLink blue/cyan/orange family.

## Radius and Shadow Use

- Buttons and small controls: `--radius-sm`.
- Standard cards and inputs: `--radius-md`.
- Feature cards and large panels: `--radius-lg`.
- Promotional or hero artwork panels: `--radius-xl` only when visually justified.
- Use `--shadow-sm` for normal cards, `--shadow-md` for elevated cards, and `--shadow-lg` sparingly.
- Do not give every object a shadow.

# Responsive Rules

Use a small, stable breakpoint set instead of adding a custom breakpoint for every component.

```css
/* Desktop-first structural adjustment */
@media (max-width: 1050px) { }

/* Tablet */
@media (max-width: 768px) { }

/* Mobile */
@media (max-width: 600px) { }

/* Small mobile, only when genuinely needed */
@media (max-width: 380px) { }
```

Rules:

- Prefer fluid values using `clamp()`, `min()`, `max()`, `minmax()`, and `auto-fit` before adding media queries.
- Do not use arbitrary breakpoints such as 680, 700, 720, 760, 900, 950, 960, 1024, and 1100 across separate pages unless a component genuinely breaks there.
- Use `grid-template-columns: repeat(auto-fit, minmax(min(100%, 18rem), 1fr));` for reusable responsive card grids.
- Never depend on fixed card heights for content alignment.
- Avoid horizontal scrolling except for an intentional, labeled data table or controlled tab strip.
- Mobile tap targets must be at least `44px` high and wide where practical.
- The fixed header height must come from `--header-height`.

# Shared Components

Before creating new markup, check whether one of these components already solves the need.

## 1. Global Header and Footer

Prototype:

- Load `partials/header.html` and `partials/footer.html` through `site-shell.js`.
- Every page must set a unique `data-page` value on `<body>` so the correct navigation item receives `aria-current="page"`.
- Do not include legacy `.site-header`, `.mob-menu`, or page-local footer markup in new pages.

CodeIgniter 3:

- Replace JavaScript partial loading with PHP views.
- Do not use `fetch()` for the production header or footer.

## 2. Page Hero

Canonical structure:

```html
<section class="hero hero--page-name">
  <div class="container hero__inner">
    <div class="hero__content">
      <span class="eyebrow">Section label</span>
      <h1 class="page-title hero__title">Clear page promise</h1>
      <p class="body-copy hero__description">
        One concise supporting paragraph that explains the page.
      </p>
      <div class="hero__actions">
        <a class="btn btn--primary" href="cablelink_apply.html">Get Connected</a>
      </div>
    </div>
  </div>
</section>
```

Rules:

- `.hero` owns the full-width background and vertical spacing.
- `.hero__inner` uses the same 1440px content edge as all other sections.
- Page-specific CSS may change hero background art, grid columns, alignment, or foreground color.
- Page-specific CSS must not redefine the general hero container, typography scale, buttons, or header offset.
- Background artwork must preserve text contrast and must not compete with the copy.
- Provide a mobile crop or mobile background asset when the desktop artwork does not crop safely.

## 3. Section Header

```html
<header class="section-header">
  <span class="eyebrow">Optional label</span>
  <h2 class="section-title">Section heading</h2>
  <p class="section-description">Short supporting copy.</p>
</header>
```

Variants:

- `.section-header--center`
- `.section-header--left`
- `.section-header--narrow`

Do not create a new section-heading class name on every page.

## 4. Buttons

Canonical classes:

- `.btn`
- `.btn--primary`
- `.btn--secondary`
- `.btn--outline-light`
- `.btn--text`
- `.btn--sm`
- `.btn--lg`
- `.btn--block`

Rules:

- Use orange for the main conversion action.
- Limit a section to one visually dominant primary action.
- Use `<a>` for navigation and `<button>` for actions.
- Do not create page-specific button classes only to change ordinary padding or color.
- Buttons must include visible focus styles and disabled states when applicable.

## 5. Cards

Base structure:

```html
<article class="card feature-card">
  <div class="feature-card__icon" aria-hidden="true"></div>
  <h3 class="card-title">Card title</h3>
  <p>Card description.</p>
  <a class="btn btn--text" href="...">Learn more</a>
</article>
```

Rules:

- Use `.card` for common border, background, radius, and shadow.
- Add a component class only for unique internal layout.
- Do not copy an entire card appearance into page CSS.
- Avoid deeply nested cards.
- Keep card action placement consistent within the same grid.

## 6. Responsive Grid

```css
.card-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(min(100%, 18rem), 1fr));
  gap: var(--grid-gap);
}
```

Use modifiers only when the content needs a different minimum:

- `.card-grid--wide`
- `.card-grid--compact`
- `.card-grid--two`

## 7. CTA Strip

Use one shared CTA component for endings such as “Ready to Get Connected?”

```html
<section class="cta-band">
  <div class="container cta-band__inner">
    <div>
      <span class="eyebrow">Start today</span>
      <h2 class="section-title">Ready to get connected?</h2>
    </div>
    <a class="btn btn--primary btn--lg" href="cablelink_apply.html">Apply Now</a>
  </div>
</section>
```

Do not create a visually unrelated CTA at the end of each page.

## 8. Tabs and Filters

Use buttons with accessible selected state:

```html
<div class="tabs" role="tablist" aria-label="Plan types">
  <button class="tabs__button is-active" type="button" role="tab" aria-selected="true">Internet</button>
  <button class="tabs__button" type="button" role="tab" aria-selected="false">Cable TV</button>
</div>
```

Rules:

- Use `.is-active` for visual state.
- Update `aria-selected`, `tabindex`, and panel visibility in JavaScript.
- Tabs must remain usable with a keyboard.
- Do not indicate active state using inline color styles.

## 9. Forms

Use shared field markup:

```html
<div class="field">
  <label class="field__label" for="account-number">Account number</label>
  <input class="field__control" id="account-number" name="account_number" type="text" autocomplete="off">
  <p class="field__help" id="account-number-help">Find this on your latest bill.</p>
  <p class="field__error" id="account-number-error" hidden></p>
</div>
```

Rules:

- Every form control needs a visible label.
- Error text must explain how to correct the input.
- Do not use placeholder text as the only label.
- Use real `<form>` elements for submissions rather than button-only simulated forms.
- Keep prototype data handling clearly separated from future server validation.
- The production CI3 version must validate and sanitize on the server even when client-side validation exists.

## 10. Accordion / FAQ

- Use a `<button>` for the question.
- Connect button and panel using `aria-controls` and matching IDs.
- Update `aria-expanded`.
- Keep content available without relying on hover.

## 11. Breadcrumbs

Use breadcrumbs only on deeper utility pages, not automatically on every page.

```html
<nav class="breadcrumbs" aria-label="Breadcrumb">
  <ol>
    <li><a href="cablelink_modern_v2.html">Home</a></li>
    <li aria-current="page">Payment Facilities</li>
  </ol>
</nav>
```

## 12. Stats Strip

Use a shared stat item and do not hardcode a different layout for every page.

```html
<div class="stats-grid">
  <div class="stat">
    <strong class="stat__value">...</strong>
    <span class="stat__label">...</span>
  </div>
</div>
```

Do not invent numerical claims. Use verified client data only.

# CSS Architecture

## File Responsibilities

### `site.css`

May contain:

- Reset and base styles.
- Design tokens.
- Typography.
- Container and section layout.
- Header and footer.
- Buttons.
- Shared cards.
- Shared forms.
- Shared tabs, accordions, CTA bands, breadcrumbs, badges, and utilities.
- Shared responsive behavior.

### Page CSS

May contain:

- Page hero artwork.
- A unique page composition.
- Unique visual treatment for a page-specific component.
- Page-specific grid behavior not covered by shared grid modifiers.
- Page-specific decorative elements.

Page CSS must not contain:

- `:root` token definitions.
- Universal reset rules.
- Global `body` typography or colors.
- Header, mobile menu, or footer styles.
- Reimplemented generic buttons.
- Reimplemented `.container` rules.
- Repeated generic section heading rules.

## CSS Load Order

Use this order:

```html
<link rel="stylesheet" href="assets/css/site.css">
<link rel="stylesheet" href="assets/css/pages/cablelink_page-name.css">
```

The page stylesheet loads after the shared stylesheet, but it may override only page-specific composition. Do not use this order as permission to override shared foundations.

For stronger future isolation, progressively introduce cascade layers:

```css
@layer reset, tokens, base, layout, components, pages, utilities;
```

## Naming Convention

Prefer BEM-like reusable component names:

- Block: `.plan-card`
- Element: `.plan-card__price`
- Modifier: `.plan-card--featured`
- State: `.is-active`, `.is-open`, `.is-loading`, `.has-error`
- Page scope: `.page-promos`, `.page-payment`
- Utility: `.u-text-center`, `.u-sr-only`

Do not use IDs for styling.

Avoid vague names such as `.box1`, `.left`, `.new-card`, `.wrapper2`, or `.blue-section`.

## Specificity

- Prefer one or two classes per selector.
- Avoid `!important` in new code.
- Avoid styling based on a long DOM chain.
- Avoid element selectors that unintentionally affect another page.
- Scope unique page styles with the body page identifier when needed:

```css
body[data-page="payment"] .payment-map { }
```

## Inline Styles

Do not add `style="..."` attributes in new markup.

Use classes or data attributes for variants:

```html
<article class="promo-card promo-card--fiber"></article>
```

Do not use:

```html
<article class="promo-card" style="background: blue"></article>
```

# JavaScript Architecture

## Shared JavaScript

`site-shell.js` should handle only shared shell behavior such as:

- Loading prototype partials.
- Setting active navigation state.
- Opening and closing the mobile menu.
- Escape-key handling.
- Focus management for the mobile menu.
- Locking page scroll while the mobile menu is open.

## Page JavaScript

Move page-specific behavior into:

```text
assets/js/pages/home.js
assets/js/pages/plans.js
assets/js/pages/payment.js
assets/js/pages/apply.js
```

Rules:

- Do not place large scripts directly inside HTML.
- Do not use inline `onclick`, `onchange`, or similar attributes.
- Use `data-*` attributes for JavaScript hooks.
- Keep styling classes and JavaScript hooks separate when practical.
- Check for the target element before binding events.
- Use an IIFE or module pattern to avoid global variables.
- Respect `prefers-reduced-motion` for nonessential animation.
- Interactive content must still present useful information when JavaScript fails.

# HTML and Accessibility Rules

- Use semantic landmarks: `<header>`, `<nav>`, `<main>`, `<section>`, `<footer>`.
- Wrap page content in `<main id="main-content">`.
- Add a skip link to the shared header.
- Use one `<h1>` per page.
- Every meaningful image needs accurate `alt` text.
- Decorative images should use empty `alt=""` or CSS backgrounds.
- Icon-only buttons need an accessible name.
- Do not use `href="#"` for unfinished actions. Use the actual route, a disabled button, or clearly mark the item as unavailable.
- External links opened in a new tab need `rel="noopener noreferrer"`.
- Maintain visible focus styles.
- Text and controls must meet reasonable color contrast.
- Do not convey important status only through color.
- Use `aria-live` for important dynamic success or error messages.
- Keep source order logical when CSS grid changes visual order.
- Validate closing tags and remove malformed markup.

# Images and Media

- Use optimized WebP or AVIF when the delivery environment supports it; retain fallback images when necessary.
- Use descriptive filenames such as `hero-payment-centers-desktop.webp`.
- Specify `width` and `height` on content images to reduce layout shift.
- Use `loading="lazy"` for below-the-fold images.
- Do not lazy-load the main hero image when it is the largest contentful paint element.
- Use `<picture>` when desktop and mobile crops are materially different.
- Keep critical text out of background images.
- Avoid remote image dependencies in the final production build unless approved.
- Keep third-party libraries such as Leaflet version-pinned and load them only on pages that need them.

# Prototype Page Template

Use this baseline for a new standalone prototype page:

```html
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Page-specific CableLink description.">
  <title>Page Name — CableLink</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/site.css">
  <link rel="stylesheet" href="assets/css/pages/cablelink_page-name.css">

  <script src="assets/js/site-shell.js" defer></script>
  <script src="assets/js/pages/page-name.js" defer></script>
</head>
<body data-page="page-name" class="page-page-name">
  <main id="main-content">
    <section class="hero hero--page-name">
      <div class="container hero__inner">
        <div class="hero__content">
          <span class="eyebrow">Page category</span>
          <h1 class="page-title hero__title">Page title</h1>
          <p class="body-copy hero__description">Concise supporting description.</p>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <header class="section-header section-header--center">
          <span class="eyebrow">Section label</span>
          <h2 class="section-title">Section title</h2>
          <p class="section-description">Section description.</p>
        </header>

        <div class="card-grid">
          <!-- reusable cards -->
        </div>
      </div>
    </section>

    <section class="cta-band">
      <div class="container cta-band__inner">
        <h2 class="section-title">Ready to get connected?</h2>
        <a class="btn btn--primary" href="cablelink_apply.html">Apply Now</a>
      </div>
    </section>
  </main>
</body>
</html>
```

# CodeIgniter 3 Migration

## Recommended Structure

```text
application/
  controllers/
    Home.php
    Plans.php
    Services.php
    Promos.php
    Payment.php
    Apply.php
  views/
    layouts/
      header.php
      footer.php
    components/
      hero.php
      section_header.php
      cta_band.php
      plan_card.php
      promo_card.php
    pages/
      home.php
      internet_plans.php
      tv_bundle_plans.php
      services.php
      channels.php
      promos.php
      payment.php
      apply.php
assets/
  css/
    site.css
    pages/
      home.css
      plans.css
      payment.css
  js/
    site.js
    pages/
      home.js
      plans.js
      payment.js
  images/
```

## CI3 Layout Pattern

Controller:

```php
public function index()
{
    $data = [
        'page_id' => 'services',
        'page_title' => 'Services — CableLink',
        'page_css' => 'services.css',
        'page_js' => 'services.js',
    ];

    $this->load->view('layouts/header', $data);
    $this->load->view('pages/services', $data);
    $this->load->view('layouts/footer', $data);
}
```

Header view:

```php
<body data-page="<?= html_escape($page_id) ?>" class="page-<?= html_escape($page_id) ?>">
```

Use CodeIgniter helpers for routes and assets:

```php
<?= base_url('assets/css/site.css') ?>
<?= site_url('plans') ?>
```

Rules:

- Replace prototype file links such as `cablelink_plans.html` with named CI3 routes.
- Replace `site-shell.js` partial fetching with server-rendered header and footer views.
- Keep component markup in reusable views when the same structure appears on multiple pages.
- Pass content and state into a component rather than copying the component.
- Escape dynamic text using `html_escape()`.
- Use CSRF protection, server-side validation, and sanitization for forms.
- Keep business data out of CSS and JavaScript.
- Store plans, promos, channels, locations, and payment partners in structured data or a database when the backend is ready.

# AI Workflow for Creating or Revising a Page

## Step 1: Inspect Before Editing

Before writing code:

0. Audit layout spacing before adding or changing any padding, margin, or `gap`.

Identify:
- every `.container`
- wrappers with horizontal padding
- wrappers with horizontal margins
- nested containers
- duplicated gutters
- section padding owners
- component `gap` owners
- child margins that duplicate a parent gap

Determine which element owns horizontal and vertical spacing before making visual changes. Remove conflicting spacing before adding a new rule.

1. Read `site.css`.
2. Read the shared header and footer.
3. Identify the closest existing page pattern.
4. Search for an existing component before creating a new one.
5. Confirm actual client content and links.

## Step 2: Plan Reuse

State internally:

- Existing components to reuse.
- New component, if genuinely necessary.
- Shared CSS changes required.
- Page-specific CSS changes required.
- Page-specific JavaScript required.

Prefer improving a shared component over copying it into a page.

## Step 3: Build the HTML

- Use the prototype template.
- Add a unique `data-page` value.
- Use semantic landmarks and headings.
- Use `.container` for every main content edge.
- Reuse shared button, card, grid, heading, and CTA classes.

## Step 4: Build the CSS

- Add shared behavior to `site.css` only when it is reusable across pages.
- Add only page-specific composition and artwork to the page stylesheet.
- Use tokens for all shared values.
- Reuse the nearest existing section, stack, grid, form, or action-group spacing pattern.
- Do not change global spacing tokens to solve a page-local composition problem.
- Remove obsolete spacing overrides instead of layering new overrides above them.
- Avoid `!important`.
- Avoid fixed heights.

## Step 5: Add Behavior

- Use a separate page JavaScript file.
- Add keyboard and ARIA behavior.
- Preserve a usable no-JavaScript state.

## Step 6: Test

Check:

- 320px width.
- 375px width.
- 768px width.
- 1024px width.
- 1440px width.
- 1920px width.
- Browser zoom at 200%.
- Keyboard-only navigation.
- Reduced-motion mode.
- Empty, long, and missing content states.
- No horizontal page overflow.
- No text overlapping background art.
- Header and anchor offsets.
- Real links and routes.
- Test every new or modified feature at all required viewport widths, even when the rest of the page was not changed.
- Confirm that the feature reflows appropriately rather than merely shrinking.
- Check long text, empty states, active states, open menus, expanded accordions, form errors, and other interactive states on mobile.

## Step 7: Report Changes

When finishing a page, summarize:

- Reused components.
- New shared components.
- New page-specific code.
- Any placeholder content or route still needing client confirmation.
- Any migration note for CodeIgniter 3.

# Definition of Done

A CableLink page is complete only when all are true:

- [ ] The page uses the shared header and footer.
- [ ] `<body>` has a unique `data-page` value.
- [ ] The page has one `<h1>`.
- [ ] Every main section uses the shared 1440px container.
- [ ] Horizontal gutters are not doubled.
- [ ] Header, hero, all sections, CTA, and footer use the exact same left and right `.container` boundaries.
- [ ] No nested `.container` elements exist.
- [ ] No wrapper introduces additional horizontal page gutters.
- [ ] Left-aligned primary content begins at the same x-coordinate across every page.
- [ ] Centered or narrow content remains inside the shared container and does not introduce new page gutters.
- [ ] Top-level sections use only the shared section spacing variants.
- [ ] Component spacing uses shared tokens and parent `gap` values instead of arbitrary child margins.
- [ ] Unaffected sections retain their established spacing after the revision.
- [ ] Any global spacing-token change has been checked across existing pages and shared components.
- [ ] Shared tokens are used for color, spacing, radii, and shadows.
- [ ] Page CSS does not redefine global foundations.
- [ ] No new inline styles are present.
- [ ] No new inline event attributes are present.
- [ ] No placeholder `href="#"` remains for a real action.
- [ ] Interactive controls work with keyboard input.
- [ ] Focus states are visible.
- [ ] Images have correct alt behavior and dimensions.
- [ ] The page works across the required viewport widths.
- [ ] No horizontal overflow exists.
- [ ] Text remains readable over background images.
- [ ] Page-specific JavaScript is separated from HTML.
- [ ] Client data has not been invented.
- [ ] The markup can move into a CI3 content view with minimal changes.

# Prohibited Patterns

Do not:

- Add another `:root` block in a page stylesheet.
- Add another site-wide reset in a page stylesheet.
- Copy the header, mobile menu, or footer into a new page.
- Use a different maximum content width on each page.
- Add random `5%`, `7%`, or `9%` horizontal padding to individual sections.
- Add arbitrary vertical section padding when a shared section modifier already exists.
- Add child margins to compensate for an incorrect parent `gap`, section padding, or container.
- Create page-local spacing tokens that compete with the shared spacing scale.
- Add page-specific versions of generic buttons.
- Use inline style attributes for active states or visual variants.
- Use inline JavaScript event handlers.
- Place 8,000–14,000 characters of page logic inside the HTML file.
- Use malformed tags to achieve a visual effect.
- Keep duplicate desktop and mobile navigation logic in both shared and page scripts.
- Add a breakpoint only to repair an overly fixed desktop layout.
- Invent plans, prices, speeds, dates, partner names, locations, or claims.
- Use a visual heading level that breaks the document outline.
- Use `!important` as the normal way to make the shared and page styles agree.

# Current Prototype Cleanup Priorities

Apply these gradually; do not block client presentation work unnecessarily.

## Priority 1: Stabilize the Shared Foundation

1. Keep only one canonical token set in `site.css`.
2. Make all main containers use `--container: 1440px` and the shared gutter.
3. Load `site.css` before page CSS.
4. Ensure every new page contains only `<main>` content and relies on the shared shell.
5. Add the missing shared component classes described in this skill.

## Priority 2: Remove Duplication

1. Remove repeated navigation and footer CSS from each page stylesheet.
2. Remove legacy header, mobile menu, and footer markup from page HTML after the prototype partial loader is confirmed.
3. Move large inline scripts into page JavaScript files.
4. Replace inline styles and inline event attributes with classes and event listeners.
5. Consolidate repeated CTA, section header, card, and button styles.

## Priority 3: Correct Quality Issues

1. Replace malformed closing tags such as unmatched `</em>` tags.
2. Replace placeholder links with real routes or clear disabled states.
3. Update the footer year dynamically in CodeIgniter or use the current approved year in the prototype.
4. Make all page hero titles actual `<h1>` elements.
5. Add form semantics and server-ready field names to the application page.
6. Add menu focus management, Escape-key closing, outside-click behavior, and scroll locking.
7. Verify third-party map loading and provide a useful fallback when it fails.

## Priority 4: Prepare Structured Content

Prepare plans, promos, channels, payment partners, offices, and service areas as structured data rather than hardcoding repeated markup. This will make the CI3 migration and future updates much safer.

# Visual Rendering Requirements

These rules were added after rendering all current prototype pages at 1440 × 1000, 1024 × 768, 768 × 1024, and 390 × 844.

## Required Visual Test Matrix

Before considering a new or revised page complete, render it at these minimum viewport sizes:

- 1440 × 1000 — primary desktop review.
- 1024 × 768 — small laptop and landscape tablet review.
- 768 × 1024 — portrait tablet review.
- 390 × 844 — primary mobile review.
- Also spot-check 360 × 800 when the page contains filters, steppers, comparison tables, or unusually long labels.

For every viewport, verify:

1. `document.documentElement.scrollWidth` does not exceed the viewport width.
2. The header, hero, page content, and footer align to the same gutter system.
3. No heading, tab, filter, step label, price, or CTA is clipped.
4. Text remains readable when an image fails to load.
5. The page does not become unnecessarily long because every desktop card or partner item was stacked individually.
6. Fixed or sticky elements do not cover headings, form fields, tabs, or anchor targets.

## Hero Variants

Do not let each page invent a different hero height. Use one of these explicit variants:

```css
.hero--campaign {
  min-height: min(52rem, 100svh);
}

.hero--page {
  min-height: clamp(22rem, 42vw, 34rem);
}

.hero--compact {
  min-height: clamp(17rem, 28vw, 24rem);
}
```

- Use `hero--campaign` only for major marketing pages such as Home or a featured promotion.
- Use `hero--page` for primary landing pages.
- Use `hero--compact` for utility pages such as Channels, Apply, and Payment when the content begins immediately below.
- On mobile, avoid forcing an internal-page hero to `100vh` unless there is a clear content reason.
- Every hero must retain readable text when its background image is missing. Supply a real background color or gradient fallback before the image layer.

## Do Not Apply Text-Block Widths to Sections

A class that limits heading copy must never limit the width of the entire `<section>`.

Incorrect:

```html
<section class="hero section__header">...</section>
```

Correct:

```html
<section class="hero hero--page">
  <div class="container">
    <div class="section-heading">...</div>
  </div>
</section>
```

`.section-heading` may use a readable `max-width`, but the hero or section itself must remain full width.

## Prevent Double Gutters

A `.container` must not add another full page gutter when it is nested inside an element that already uses the shared container rule.

Incorrect:

```html
<div class="container">
  <div class="container">...</div>
</div>
```

Also avoid a page wrapper with `padding-inline: 5%` containing a `.container` that adds another `5%` or shared gutter. At 1440px this can push content more than 130px from each edge while other pages begin at 72px.

Use this top-level page-section pattern:

```html
<section class="section">
  <div class="container">...</div>
</section>
```

Do not place `.container` on the outer page section. The outer section owns the full-width background and vertical spacing; the inner `.container` owns the shared horizontal boundaries.

## Mobile Page-Length Control

Responsive design is not complete when a desktop grid is simply changed to one column.

When a 390px render becomes excessively long because of repeated plans, locations, channels, or payment partners:

- Group related content under tabs or accordions.
- Show a useful initial subset and provide an explicit “Show all” control.
- Use a two-column compact grid for simple logos and partner tiles when readability permits.
- Use horizontal snap scrolling for comparable cards only when the next card is visibly discoverable.
- Keep filtering controls sticky only when they do not consume too much vertical space.
- Do not hide important contractual details merely to shorten the page.

As a review trigger, investigate any mobile page that exceeds roughly 8,000 rendered pixels or ten viewport heights. The number is not a hard cap, but it signals that progressive disclosure should be considered.

## Mobile Filters and Steppers

- A filter row must wrap cleanly without making an input extend beyond the viewport.
- Every flex child containing an input must use `min-width: 0`.
- Do not use fixed widths that cause a 390px page to lay out at 400px or wider.
- A five-step application stepper must use short labels, an icon/number-only compact state, or horizontal scrolling with a visible affordance.
- Never clip a step label with `overflow: hidden` merely to remove horizontal overflow.
- The current step must remain identifiable through text, not color alone.

## Semantic Heading Check

Every page must contain exactly one meaningful `<h1>`. Styling a hero title as an `<h2>` is not acceptable. Section titles below it should continue with `<h2>`, followed by `<h3>` for cards or subsections.

## Project-Specific Audit Notes

Keep temporary page defects, completed fixes, and one-off cleanup findings in `docs/cablelink-audit.md`, not in this permanent skill. Review that audit when working on an affected page, and remove resolved findings from the audit instead of changing the permanent spacing contract.

# Final Principle

A new CableLink page should look new because of its content and page-specific imagery, not because it introduces new spacing, widths, buttons, navigation, or typography. Reuse the system first; extend it carefully only when the content requires a genuinely new component. When revising a page, fix spacing at the container, section, or parent-component level rather than patching individual children.
