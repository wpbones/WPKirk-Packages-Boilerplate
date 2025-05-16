<!--
 |
 | In $plugin you'll find an instance of Plugin class.
 | If you'd like can pass variable to this view, for example:
 |
 | return PluginClassName()->view( 'dashboard.index', [ 'var' => 'value' ] );
 |
-->

<?php ob_start() ?>

<div class="wp-kirk wrap wp-kirk-sample">

  <div class="wp-kirk-toc-content">
    <?php wpkirk_section(__('Overview', 'wp-kirk')); ?>

    <p>
      <?php wpkirk_md(__('WP Bones supports also third-party packages. It provides a simple way to integrate third-party packages into your WP Bones plugin.', 'wp-kirk')); ?>
    </p>

    <p>
      <?php wpkirk_md(__('You may use this boilerplate as a starting point for your WP Bones package.', 'wp-kirk')); ?>
    </p>

    <?php wpkirk_section(__('Available Packages', 'wp-kirk')); ?>

    <p>
      <?php wpkirk_md(__('Here you will find the current available packages:', 'wp-kirk')); ?>
    </p>

    <ul>
      <?php foreach (WPKirk\Packages\Packages::availablePackages() as $package => $data): ?>
        <li>
          <a href="<?php echo esc_url($data['url']); ?>">
            <?php wpkirk_md($data['title']); ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>

  </div>

  <?php wpkirk_toc('Packages') ?>

</div>