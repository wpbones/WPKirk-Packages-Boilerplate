# WPKirk-Packages-Boilerplate

Focused demo of the **official WP Bones packages** ecosystem — composer packages under the
`wpbones/*` namespace that plug into the framework. The boilerplate pulls in and demonstrates
a curated set: `actions-and-filters-js`, `flags`, `geolocalizer`, `morris-php`, `pure-css-switch`,
`pure-css-tabs`, `useragent`, `wptables`, `wpkirk-helpers`.

## What this demos

- `composer.json` → `require` pulls in the `wpbones/*` packages. They self-register into the
  framework via their own service providers.
- 8 controllers under `plugin/Http/Controllers/Packages/` — one per package — each rendering
  a live admin view that uses the package.

**Key files to read first:**

| File | What to look at |
| --- | --- |
| `composer.json` (require block) | Full list of WP Bones packages used |
| `plugin/Http/Controllers/Packages/PureCSSSwitchController.php` | Example controller using a pure-CSS package |
| `plugin/Http/Controllers/Packages/GeolocalizerController.php` | Package using IP geolocation |
| `plugin/Http/Controllers/Packages/WPTablesFluentController.php` | Fluent wp_list_table wrapper |
| `config/menus.php` | 8+ sub-menus, one per package demo |

## Smoke test (manual, ~30s)

With the plugin active:

1. Open **WP Kirk → Packages** in admin → landing page with links to each package demo.
2. Click each sub-menu item — every page should render without PHP errors.
3. Pure CSS switches / tabs should work without JS.
4. WP Tables demo should render a list table with rows.
5. `wp-content/debug.log` stays clean throughout.

## Use as a template

```sh
# 1. clone from the GitHub template
gh repo create my-packages-plugin --template wpbones/WPKirk-Packages-Boilerplate --public --clone
cd my-packages-plugin

# 2. rename the PHP namespace + plugin slug
composer install
php bones rename "My Packages Plugin"

# 3. build + activate
yarn install && yarn build
wp plugin activate my-packages-plugin
```

Browse the full list at [wpbones.com/docs/official-packages](https://wpbones.com/docs/official-packages).
Add a new WP Bones package via `php bones require wpbones/<name>` (wraps `composer require`
with any framework-side wiring).

## Framework surface exercised

This boilerplate is the **regression bed** for the packages ecosystem:

- `php bones require` — custom composer wrapper that registers the package + runs its
  post-install hook
- Service-provider auto-registration from third-party composer packages
- Asset enqueuing paths in packages that ship CSS/JS (public/vendor/*)
- Package-controller composition in `plugin/Http/Controllers/Packages/`
