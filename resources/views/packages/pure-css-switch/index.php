<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<?php ob_start() ?>

<?php $package = WPKirk\Packages\Packages::get('wpbones/pure-css-switch') ?>

<div class="wp-kirk wrap wp-kirk-sample">

  <div class="wp-kirk-toc-content">
    <?php wpkirk_section(__('Overview', 'wp-kirk')); ?>

    <p>
      <?php wpkirk_md(__('The Pure CSS Switch package provides a simple way to create a toggle switch using only CSS. It is a lightweight and easy-to-use package that allows you to create a toggle switch without any JavaScript or external libraries. The package includes a set of pre-defined styles and classes that you can use to customize the appearance of the toggle switch.', 'wp-kirk')); ?>
    </p>

    <?php $package->gitHubRepository() ?>
    <?php $package->installation() ?>

    <?php wpkirk_section(__('Usage', 'wp-kirk')); ?>
    <?php include 'usage.php'; ?>

    <p>
      <?php wpkirk_md(__('To display the view with the pure CSS Switch, you have to include the assets in your controller. For example:', 'wp-kirk')); ?>
    </p>

    <?php wpkirk_code("@/plugin/Http/Controllers/Packages/PureCSSSwitchController.php", ['line-numbers' => true, 'line' => '16']) ?>

    <p>
      <?php wpkirk_md(__('In your view:', 'wp-kirk')); ?>
    </p>

    <?php wpkirk_code("@/resources/views/packages/pure-css-switch/usage.php") ?>

    <?php wpkirk_section(__('Example Hook', 'wp-kirk')); ?>

    <p>
      <?php wpkirk_md(__('You can also use the hook approach to clean up your code.', 'wp-kirk')); ?>
    </p>

    <p>
      <?php include 'hook.php'; ?>
    </p>
    <?php wpkirk_code("@/resources/views/packages/pure-css-switch/hook.php") ?>

    <?php wpkirk_section(__('Use cases', 'wp-kirk')); ?>
    <p>
      <?php include 'configurator.php'; ?>
    </p>
    <?php wpkirk_code("@/resources/views/packages/pure-css-switch/configurator.php") ?>

    <?php wpkirk_section(__('Theme', 'wp-kirk')); ?>
    <p>
      <?php wpkirk_md(__('You may also style the switch button by using the `theme` method. The default theme is `flat-round`', 'wp-kirk')); ?>
    </p>

    <p>
      <?php include 'theme.php'; ?>
    </p>
    <?php wpkirk_code("@/resources/views/packages/pure-css-switch/theme.php") ?>

    <?php wpkirk_section(__('Mode', 'wp-kirk')); ?>
    <p>
      <?php wpkirk_md(__('You may use the `mode` to set up the `select` to use the switch button as selector', 'wp-kirk')); ?>
    </p>

    <p>
      <?php include 'mode.php'; ?>
    </p>
    <?php wpkirk_code("@/resources/views/packages/pure-css-switch/mode.php") ?>

  </div>

  <?php wpkirk_toc('Pure CSS Switch') ?>


</div>