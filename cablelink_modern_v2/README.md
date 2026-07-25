# CableLink modern prototype

Run the folder through a local HTTP server when reviewing it. Shared design tokens and shell code live in `assets/`.

During CodeIgniter 3 migration, move `assets/css/site.css` and `assets/js/site-shell.js` into public assets, then replace the JavaScript shell with `views/layouts/header.php` and `views/layouts/footer.php`. Each page already declares its navigation state with `body[data-page]`.
