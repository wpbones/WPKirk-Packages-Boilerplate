<?php [$openTabs, $closeTabs] = WPKirk\PureCSSTabs\PureCSSTabsProvider::useTabs() ?>

<div class="wpbones-tabs">

  <!-- first tab -->
  <?php $openTabs(['Settings', 'hook'], null, true); ?>

  <div>
    <h3>Content for Settings</h3>
  </div>

  <?php $closeTabs(); ?>

  <!-- second tab -->
  <?php $openTabs(['Dashboard', 'hook']); ?>

  <div>
    <h3>Content for Dashboard</h3>
  </div>

  <?php $closeTabs(); ?>

  <!-- son on... -->

</div>