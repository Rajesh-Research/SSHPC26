# PHP website edition

This folder contains the complete PHP, HTML and CSS edition of the International Sports Science & Human Performance Conclave 2026 website.

## Requirements

- PHP 8.0 or later
- Apache or Nginx hosting
- No database
- No JavaScript runtime or Node.js build process

## Local preview

Run from this folder:

```bash
php -S localhost:8080
```

Then open `http://localhost:8080`.

## Deployment

Upload the contents of this folder to the web root of any PHP-enabled server. For Apache, the included `.htaccess` supplies basic security and caching headers. For Nginx, configure `index.php` as the index and route PHP files to PHP-FPM.

Editable website content is stored in `data.php`. The layout is in `index.php`, styling is in `styles.css`, and all images are under `assets/images`.

