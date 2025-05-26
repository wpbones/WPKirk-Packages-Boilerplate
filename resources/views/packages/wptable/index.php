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
      <?php wpkirk_md(__('The WPTables Packages allow you to create tables in your WordPress site. You can use them to display data in a structured and organized way.', 'wp-kirk')); ?>
    </p>

    <?php $package->gitHubRepository() ?>
    <?php $package->installation() ?>

    <?php wpkirk_section(__('Usage', 'wp-kirk')); ?>

    <p>
      <?php wpkirk_md(__('First of all, edit the `config/plugin.php` file and add your screen options in the `screen_options` array. This setting is used to define the number of items to display per page.', 'wp-kirk')); ?>
    </p>

    <?php wpkirk_code(
      "...
/*
|--------------------------------------------------------------------------
| Screen options
|--------------------------------------------------------------------------
|
| Here is where you can register the screen options for List Table.
|
*/

'screen_options' => ['disco_per_page'],
...",
      ['line-numbers' => true, 'line' => '11']
    ) ?>

    <p>
      <?php wpkirk_md(__('The `disco` is the name of your table.', 'wp-kirk')); ?>
    </p>

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

    <?php wpkirk_section(__('Search Example', 'wp-kirk')); ?>
    <a href="<?php echo $plugin->getPageUrl('wp_tables_search') ?>" class="button"><?php wpkirk_md(__('Search', 'wp-kirk')); ?></a>

    <?php wpkirk_section(__('Fluent Example', 'wp-kirk')); ?>
    <a href="<?php echo $plugin->getPageUrl('wp_tables_fluent') ?>" class="button"><?php wpkirk_md(__('Search', 'wp-kirk')); ?></a>

  </div>

  <?php wpkirk_toc('WP Tables') ?>

</div>