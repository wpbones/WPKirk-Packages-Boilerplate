<div class="wpbones-tabs">

  <!-- first tab -->
  <?php WPKirk\PureCSSTabs\PureCSSTabsProvider::openTab(
    'Database',
    null,
    true
  ); ?>

  <div>
    <h3>Content for Database</h3>
  </div>

  <?php WPKirk\PureCSSTabs\PureCSSTabsProvider::closeTab(); ?>

  <!-- second tab -->
  <?php WPKirk\PureCSSTabs\PureCSSTabsProvider::openTab('Posts'); ?>

  <div>
    <h3>Content for Posts</h3>
  </div>

  <?php WPKirk\PureCSSTabs\PureCSSTabsProvider::closeTab(); ?>

  <!-- son on... -->

</div>