# Beat Explorer • Sound Systems

The site now has static HTML pages for GitHub Pages. The pages use the existing images and downloads in this repository; no PHP runtime is required to serve them.

## Pages

- `index.html` — home and contact details
- `pa.html` — P.A. services
- `studio.html` — recording studio
- `repetitieruimtes.html` — rehearsal rooms
- `winkel.html` — shop and brands
- `route.html` — directions
- `links.html` — partner and band links

The existing Pages workflow (`.github/workflows/static.yml`) deploys the repository root. Once these changes are pushed to `main`, GitHub Actions will publish the static files. Check **Settings → Pages** and make sure the source is set to **GitHub Actions**. The PHP files are retained as source, but the static pages and their navigation use `.html` URLs.
