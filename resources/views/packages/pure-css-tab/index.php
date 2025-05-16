<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<?php ob_start() ?>

<?php $package = WPKirk\Packages\Packages::get('wpbones/pure-css-tabs') ?>

<div class="wp-kirk wrap wp-kirk-sample">

  <div class="wp-kirk-toc-content">
    <?php wpkirk_section(__('Overview', 'wp-kirk')); ?>

    <p>
      <?php wpkirk_md(__('The Pure CSS TAB package provide a simple way to create TAB just in CSS, without using Javascript. They are flexible and customizable. You can easily customize the appearance and behavior of the tabs to fit your design requirements.', 'wp-kirk')); ?>
    </p>

    <?php $package->gitHubRepository() ?>
    <?php $package->installation() ?>

    <?php wpkirk_section(__('Usage', 'wp-kirk')); ?>
    <?php include 'usage.php'; ?>

    <p>
      <?php wpkirk_md(__('To display the view with the pure CSS Tab, you have to include the assets in your controller. For example:', 'wp-kirk')); ?>
    </p>

    <?php wpkirk_code("@/plugin/Http/Controllers/Packages/PureCSSTabController.php", ['line-numbers' => true, 'line' => '16']) ?>

    <p>
      <?php wpkirk_md(__('In your view:', 'wp-kirk')); ?>
    </p>

    <?php wpkirk_code("@/resources/views/packages/pure-css-tab/usage.php") ?>

    <?php wpkirk_section(__('Example Hook', 'wp-kirk')); ?>

    <p>
      <?php wpkirk_md(__('You can also use the hook approach to clean up your code.', 'wp-kirk')); ?>
    </p>

    <?php include 'hook.php'; ?>
    <?php wpkirk_code("@/resources/views/packages/pure-css-tab/hook.php") ?>

  </div>

  <?php wpkirk_toc('Pure CSS Tab') ?>


</div>