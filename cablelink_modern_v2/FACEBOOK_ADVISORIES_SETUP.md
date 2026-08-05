# Facebook Advisories in the HTML Prototype

The advisories page remains `cablelink_advisories.html`. JavaScript now requests advisory data from `api/facebook-advisories.php`, which contacts Facebook on the server side. This keeps the Page Access Token out of the HTML and browser developer tools.

## Files changed

- `cablelink_advisories.html` — dynamic advisory gallery and Facebook dialog link.
- `assets/js/pages/advisories.js` — fetches, renders, filters, and opens advisories.
- `assets/css/cablelink_advisories.css` — loading, source, date, and metadata styles.
- `assets/js/data/advisories-fallback.js` — the prototype's original advisories, used before Facebook is configured.
- `api/facebook-advisories.php` — secure same-origin Facebook proxy with a five-minute cache.
- `api/facebook.config.example.php` — credential and filtering template.

The original hard-coded advisory page is retained as `cablelink_advisories.static-backup.html`.

## 1. Create the local configuration

Copy:

```text
api/facebook.config.example.php
```

to:

```text
api/facebook.config.php
```

Then enter the Page ID and Page Access Token:

```php
'page_id' => 'YOUR_REAL_PAGE_ID',
'page_access_token' => 'YOUR_REAL_PAGE_ACCESS_TOKEN',
```

Do not put the token in `advisories.js`, HTML, GitHub, or any public repository.

## 2. Mark Facebook posts as advisories

Recommended common tag:

```text
#CablelinkAdvisory
```

For a channel advisory, also add:

```text
#CablelinkChannelAdvisory
```

For a service advisory, also add:

```text
#CablelinkServiceAdvisory
```

Example:

```text
SERVICE INTERRUPTION — BACOOR

Some subscribers may experience intermittent connectivity while emergency maintenance is underway.

#CablelinkAdvisory #CablelinkServiceAdvisory
```

To temporarily retrieve all Page posts, set this in `facebook.config.php`:

```php
'required_hashtag' => '',
```

That option is less selective and may show promos or unrelated Page posts.

## 3. Run the prototype through PHP

Opening the HTML with `file:///` displays the built-in fallback cards, but a real Facebook request needs PHP.

From the project folder:

```bash
php -S localhost:8000
```

Then open:

```text
http://localhost:8000/cablelink_advisories.html
```

XAMPP is also supported: place the folder under `htdocs` and open it through `http://localhost/...`.

## 4. Test the endpoint

Open this URL in the browser:

```text
http://localhost:8000/api/facebook-advisories.php
```

A successful response contains:

```json
{
  "success": true,
  "data": [],
  "meta": {
    "source": "facebook"
  }
}
```

When credentials are missing, the endpoint returns an explanatory `503` response and the HTML automatically uses the saved prototype advisories.

## Meta app requirements

The Page administrator must create or use a Meta app, authorize the relevant Page, and obtain a Page Access Token with the permissions required to read Page content, commonly including `pages_show_list` and `pages_read_engagement`. App Review or advanced access may be required for a production app depending on app ownership, roles, and intended users.

The Graph API version is configurable in `api/facebook.config.php`. This package defaults to `v26.0`; update the value when Meta requires a later supported version.

## Production note

This is suitable for demonstrating the integration in the HTML prototype. For the final CodeIgniter 3 site, move the PHP fetching logic into a CI3 controller/library, store imported posts in the database, and run scheduled synchronization so previously imported advisories remain available during Facebook outages.
