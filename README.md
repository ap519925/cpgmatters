# CPG Matters - Drupal 11 Future-Proof Theme & Setup Project

This directory contains a strictly modern, future-proof setup for the CPG Matters Drupal theme, meticulously structured utilizing bleeding-edge Drupal 11 capabilities. We have moved away from outdated pre-processors in favor of Single Directory Components (SDC), and away from heavy webpack setups in favor of incredibly fast Vite.

## Theme Architecture (`web/themes/custom/cpg_theme`)

*   **Technology Stack**: Uses Vite for extremely fast compilation, hot module replacement, and modern CSS/JS bundling.
*   **CSS Stack**: To ensure the codebase remains maintainable indefinitely, the theme utilizes **Vanilla CSS with PostCSS Preset Env**. This gives us CSS nesting (`&`), custom media queries, and standard native CSS features, avoiding long-term maintenance decay associated with SCSS or complex Tailwind configurations.
*   **Structure**: Based on the `stark` core theme to ensure total control over markup without legacy Drupal override overhead.
*   **Regions**: Mapped exactly to the CPG mockup (home-1.html), creating distinct editorial regions for Hero elements, Skyscrapers, Ads, Headers, content layouts, and 4-column Footers.

### Build Instructions

1.  Navigate into the theme directory: `cd web/themes/custom/cpg_theme`
2.  Install dependencies: `npm install`
3.  For development with hot reload: `npm run dev`
4.  For production build: `npm run build` (The built assets are mapped in the `cpg_theme.libraries.yml` file)

## Automation & Site Architecture (`recipes/cpg_site`)

A Drupal Recipe has been created to instantaneously set up your CPG Matters architecture without utilizing standard installation profiles.

### Activating the setup

1.  To install all the standard required modules for CPG Matters (Layout Builder, Pathauto, Metatag, Media, Responsive Image, Views, Blocks), run the recipe.
2.  Command: `php core/scripts/drupal recipe recipes/cpg_site`

## Using Single Directory Components (SDC)

To build future components like the `featured-article` (Article View Mode) or `category-label` (Taxonomy Tag):
1.  Navigate to `cpg_theme/components`.
2.  Create a folder `featured-article`.
3.  Inside, place your `featured-article.component.yml`, `featured-article.twig`, and `featured-article.css`!
