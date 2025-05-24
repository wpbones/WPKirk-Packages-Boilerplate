<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<?php ob_start() ?>

<?php $package = WPKirk\Packages\Packages::get('wpbones/wptables') ?>

<div class="wp-kirk wrap wp-kirk-sample">

  <div class="wp-kirk-toc-content">
    <?php wpkirk_section(__('Overview', 'wp-kirk')); ?>

    <p>
      <?php wpkirk_md(__('The Pure CSS Switch package provides a simple way to create a toggle switch using only CSS. It is a lightweight and easy-to-use package that allows you to create a toggle switch without any JavaScript or external libraries. The package includes a set of pre-defined styles and classes that you can use to customize the appearance of the toggle switch.', 'wp-kirk')); ?>
    </p>

    <?php $package->gitHubRepository() ?>
    <?php $package->installation() ?>

    <?php wpkirk_section(__('Usage', 'wp-kirk')); ?>

    <p>
      <?php wpkirk_md(__('First of all, in your controller you have to handle the `load` method.', 'wp-kirk')); ?>
    </p>

    <?php wpkirk_code(
      '@/plugin/Http/Controllers/Packages/WPTableController.php',
      ['line-numbers' => true, 'line' => '10,12,17,21']
    ) ?>

    <?php wpkirk_code(
      '@/plugin/Support/WPTable/DiscoTable.php',
      ['line-numbers' => true, 'line' => '10,12']
    ) ?>

    <form method="post">
      <?php
      $table->prepare_items();
      $table->display(); ?>
    </form>

  </div>

  <?php wpkirk_toc('WP Tables') ?>

</div>