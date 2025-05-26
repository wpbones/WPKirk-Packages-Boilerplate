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
$eval = ['eval' => true];
$evalJson = array_merge($eval, ['language-eval' => 'json']); ?>

<?php $package = WPKirk\Packages\Packages::get('wpbones/flags') ?>

<div class='wp-kirk wrap wp-kirk-sample'>

  <div class="wp-kirk-toc-content">
    <?php wpkirk_section(__('Overview', 'wp-kirk')); ?>

    <p>
      <?php wpkirk_md(__('Flags for WP Bones is a PHP package designed for the WP Bones framework, allowing you to enable or disable features in plugins using YAML configuration files. This approach simplifies feature management and makes the plugin more flexible and easy to configure, even for non-technical users.', 'wp-kirk')); ?>
    </p>

    <?php $package->gitHubRepository() ?>
    <?php $package->installation() ?>

    <?php wpkirk_section(__('Usage', 'wp-kirk')); ?>

    <p>
      <?php wpkirk_md(__('Create a new flag file in YAML format where you want, usually in the config directory.', 'wp-kirk')); ?>
    </p>

    <?php wpkirk_code(
      "@/config/flags.yaml",
      ['language' => 'yaml']
    ); ?>

    <p>
      <?php wpkirk_md(__('In the `config/plugin.php` you can define the flags path.', 'wp-kirk')); ?>
    </p>

    <?php wpkirk_code(
      "...
/*
|--------------------------------------------------------------------------
| Flags package path Configuration
|--------------------------------------------------------------------------
|
| Here you may configure the flags path for your plugin.
|
*/
'flags' => [
  'path' => 'config/flags.yaml',
],
...",
      ['line-numbers' => true, 'line' => '11']
    ) ?>

    <?php wpkirk_code(
      "@/plugin/Http/Controllers/Packages/FlagsController.php",
      ['line-numbers' => true, 'line' => '16']
    ); ?>

    <?php wpkirk_section(__('Simple Usage', 'wp-kirk')); ?>

    <p>
      <?php wpkirk_md(__('You may use the helper function `wpbones_flags()` to access the flags. And you may use `get()` or `flags()` to access the flags.', 'wp-kirk')); ?>
    </p>

    <h3>Get</h3>

    <?php wpkirk_code(
      "echo wpbones_flags()->get('example.throttle', 10);",
      $eval
    ); ?>

    <h3>Flags</h3>

    <?php wpkirk_code(
      "echo wpbones_flags()->flags('example.throttle', 10);",
      $eval
    ); ?>

    <h3>By instance the class</h3>

    <?php wpkirk_code(
      "use WPkirk\Flags\Flags;

\$flags = new Flags();
echo \$flags->get('example.throttle', 20);",
      $eval
    ); ?>

    <h3>By static method</h3>

    <?php wpkirk_code(
      "use WPkirk\Flags\Flags;

echo Flags::get('example.throttle', 20);",
      $eval
    ); ?>

  </div>

  <?php wpkirk_toc('Flags') ?>

</div>