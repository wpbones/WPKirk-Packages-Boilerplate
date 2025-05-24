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

<?php $package = WPKirk\Packages\Packages::get('wpbones/useragent') ?>

<div class="wp-kirk wrap wp-kirk-sample">

  <div class="wp-kirk-toc-content">
    <?php wpkirk_section(__('Overview', 'wp-kirk')); ?>

    <p>
      <?php wpkirk_md(__('An useful wrapper for ' . '<a href="https://github.com/serbanghita/Mobile-Detect">Mobile Detect</a>' . ' to detect mobile devices for WP Bones.', 'wp-kirk')); ?>
    </p>

    <?php $package->gitHubRepository() ?>
    <?php $package->installation() ?>

    <?php wpkirk_section(__('Usage', 'wp-kirk')); ?>

    <?php wpkirk_code('if (wpbones_user_agent()->isMobile()) {
  echo "You\'re by Mobile";
} else {
  echo "You\'re by Desktop";
}', $eval);
    ?>

    <?php wpkirk_section(__('Basic detection', 'wp-kirk')); ?>

    <?php wpkirk_code("echo wpbones_user_agent()->isMobile() ? 'Yes' : 'No';", $eval); ?>
    <?php wpkirk_code("echo wpbones_user_agent()->isTablet() ? 'Yes' : 'No';", $eval); ?>

    <?php wpkirk_section(__('Magic method', 'wp-kirk')); ?>

    <?php wpkirk_code("echo wpbones_user_agent()->isIphone() ? 'Yes' : 'No';", $eval); ?>
    <?php wpkirk_code("echo wpbones_user_agent()->isSamsung() ? 'Yes' : 'No';", $eval); ?>

    <?php wpkirk_section(__('Alternative to magic methods', 'wp-kirk')); ?>

    <?php wpkirk_code("echo wpbones_user_agent()->is('iphone') ? 'Yes' : 'No';", $eval); ?>

    <?php wpkirk_section(__('Find the version of component', 'wp-kirk')); ?>

    <?php wpkirk_code("echo wpbones_user_agent()->version('Chrome');", $eval); ?>

    <?php wpkirk_section(__('Get Browsers', 'wp-kirk')); ?>

    <?php wpkirk_code("echo json_encode(
    wpbones_user_agent()->getBrowsers(),
    JSON_PRETTY_PRINT
    );", $eval); ?>

  </div>

  <?php wpkirk_toc('User Agent') ?>


</div>