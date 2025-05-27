<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<?php
ob_start();

$ip_stack_key = $plugin->options->get('ip_stack.key');

$eval = ['eval' => true];
$evalJson = array_merge($eval, ['language-eval' => 'json']); ?>

<?php $package = WPKirk\Packages\Packages::get('wpbones/geolocalizer') ?>

<div class='wp-kirk wrap wp-kirk-sample'>

  <?php if (isset($feedback)): ?>
    <div id="message" class="updated notice is-dismissible">
      <p>
        <?php echo $feedback; ?>
      </p>
    </div>
  <?php endif; ?>

  <div class="wp-kirk-toc-content">
    <?php wpkirk_section(__('Overview', 'wp-kirk')); ?>

    <p>
      <?php wpkirk_md(__('Geo Localizer provides a set of utilities to manage geolocation for WordPress/WP Bones.', 'wp-kirk')); ?>
    </p>

    <?php $package->gitHubRepository() ?>
    <?php $package->installation() ?>

    <?php wpkirk_section(__('Database', 'wp-kirk')); ?>

    <p>
      <?php wpkirk_md(__('In the package `database` folder you will find the migration and seed files to create the `countries` table into the base. Remember to copy them into your `database` plugin folder. After that, deactivate the plugin and activate it again.', 'wp-kirk')); ?>
    </p>

    <?php $countries = wpbones_geo()->countries(); ?>

    <?php if (empty($countries)): ?>
      <p class="notice-error notice">
        <span style="padding: 10px;display: block">
          <?php wpkirk_md(__('⚠️ Copy the migration and seed files into your project.', 'wp-kirk')); ?>
        </span>
      </p>
    <?php else : ?>
      <p class="notice-success notice">
        <span style="padding: 10px;display: block">
          <?php wpkirk_md(__('✅ Database countries table installed.', 'wp-kirk')); ?>
        </span>
      </p>
    <?php endif; ?>

    <?php if (empty($ip_stack_key)) : ?>
      <h3>IP Stack API Key missing!</h3>
      <p class="notice notice-error">
        <span style="padding: 10px;display: block">
          <?php wpkirk_md(__('🛑 To use this package, you need to set your ' . '<a href="https://ipstack.com/signup/free">IP Stack API key</a>' . ' in the WordPress settings.', 'wp-kirk')); ?>
        </span>
      </p>

    <?php endif; ?>

    <form action="" method="post">
      <?php wp_nonce_field('IP_STACK'); ?>
      <p style="display: flex;align-items: center;gap: 8px;">
        <label for="ip_stack/key">IP Stack Key</label>
        <input size="38" type="text" name="ip_stack/key" id="ip_stack/key"
          value="<?php echo $plugin->options->get('ip_stack.key'); ?>" />
        <button class="button button-primary" type="submit">Update</button>
      </p>
    </form>

    <?php wpkirk_code(
      '$geo = \WPKirk\GeoLocalizer\GeoLocalizerProvider::geoIP();' . "\n\n" .
        json_encode($geo, JSON_PRETTY_PRINT),
    ); ?>

    <?php if (empty($geo) || isset($geo['error'])): ?>
      <p class="notice notice-warning">
        <span style="padding: 10px;display: block">
          <?php wpkirk_md(__('⚠️ No geolocation information available. Check your ' . '<a href="https://ipstack.com/signup/free">IP Stack API key</a>', 'wp-kirk')); ?>
        </span>
      </p>

    <?php else : ?>

      <?php wpkirk_section(__('Usage', 'wp-kirk')); ?>

      <p>
        <?php wpkirk_md(__('First of all use the filter `wpbones_geolocalizer_ipstack_api_key` to setup your IP Stack API key.', 'wp-kirk')); ?>
      </p>

      <?php wpkirk_code("add_filter('wpbones_geolocalizer_ipstack_api_key', function () {
  // get your api key from your settings
  // for example, \$plugin->options->get('General/ipstack_api_key');
  return \$your_api_key;
});
      "); ?>

      <p>
        <?php wpkirk_md(__('Therefore, you can use the `wpbones_geo()` helper function to get the geolocation information.', 'wp-kirk')); ?>
      </p>

      <?php wpkirk_code("echo wpbones_geo()->city;", $eval); ?>

      <?php wpkirk_section(__('Class method', 'wp-kirk')); ?>

      <?php wpkirk_code("\$geo = new\WPKirk\GeoLocalizer\GeoLocalizerProvider();
echo \$geo->continent_name;", $eval); ?>


      <?php wpkirk_section(__('Static method', 'wp-kirk')); ?>

      <?php wpkirk_code("echo \WPKirk\GeoLocalizer\GeoLocalizerProvider::geoIp()['country_name'];", $eval); ?>

      <?php wpkirk_section(__('Countries', 'wp-kirk')); ?>

      <?php wpkirk_code("\$countries = wpbones_geo()->countries();
echo json_encode(\$countries, JSON_PRETTY_PRINT);
      ", ['eval' => true, 'details' => false]); ?>


    <?php endif; ?>

  </div>

  <?php wpkirk_toc('Geolocalizer') ?>

</div>