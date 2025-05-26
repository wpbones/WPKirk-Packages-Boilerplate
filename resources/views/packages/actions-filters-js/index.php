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

<?php $package = WPKirk\Packages\Packages::get('wpbones/actions-and-filters-js') ?>

<div class='wp-kirk wrap wp-kirk-sample'>

  <div class="wp-kirk-toc-content">
    <?php wpkirk_section(__('Overview', 'wp-kirk')); ?>

    <p>
      <?php wpkirk_md(__('A Javascript version of the actions and filters used in PHP in WordPress for WP Bones.', 'wp-kirk')); ?>
    </p>

    <?php $package->gitHubRepository() ?>
    <?php $package->installation() ?>

    <?php wpkirk_section(__('Usage', 'wp-kirk')); ?>

    <?php wpkirk_code(
      "@/plugin/Http/Controllers/Packages/ActionsFiltersController.php",
      ['line-numbers' => true, 'line' => '16']
    ); ?>

    <h3><?php wpkirk_md(__('Actions', 'wp-kirk')); ?></h3>

    <p>
      <?php wpkirk_md(__('In your Javascript code, you can use `wpbones_add_action()` and `wpbones_do_action()`', 'wp-kirk')); ?>
    </p>

    <?php wpkirk_code(
      htmlentities(
        "wpbones_add_action('wpkirk_init', function() {
  console.log('Hello World!');
});

wpbones_do_action('wpkirk_init');"
      ),
      ['line-numbers' => true, 'line' => '16']
    ); ?>

    <h3><?php wpkirk_md(__('Filters', 'wp-kirk')); ?></h3>

    <p>
      <?php wpkirk_md(__('In your Javascript code, you can use `wpbones_add_filter()` and `wpbones_apply_filters()`', 'wp-kirk')); ?>
    </p>

    <?php wpkirk_code(
      htmlentities(
        "wpbones_add_filter('wpkirk_filter', function(value = 'Hello') {
  return value + ' World!';
});

const result = wpbones_apply_filters('wpkirk_filter', 'WP Bones');
console.log(result); // WP Bones World!"
      ),
      ['line-numbers' => true, 'line' => '16']
    ); ?>

    <?php wpkirk_section(__('Example', 'wp-kirk')); ?>

    <?php include_once 'form.php' ?>

    <?php wpkirk_code(
      "@/resources/views/packages/actions-filters-js/form.php",
      ['line-numbers' => true, 'line' => '3,10']
    ); ?>


  </div>

  <?php wpkirk_toc('Actions and Filters JS') ?>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      wpbones_add_action('wpkirk_init', function() {
        console.log('Hello World!');
      });
      wpbones_do_action('wpkirk_init');

      wpbones_add_filter('wpkirk_filter', function(value = 'Hello') {
        return value + ' World!';
      });

      const initial = wpbones_apply_filters('wpkirk_filter');
      console.log('Initial:', initial);

      const result = wpbones_apply_filters('wpkirk_filter', 'WP Bones');
      console.log("After:", result);
    });
  </script>
</div>