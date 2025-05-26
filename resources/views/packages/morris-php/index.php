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

<?php $package = WPKirk\Packages\Packages::get('wpbones/morris-php') ?>

<div class='wp-kirk wrap wp-kirk-sample'>

  <div class="wp-kirk-toc-content">
    <?php wpkirk_section(__('Overview', 'wp-kirk')); ?>

    <p>
      <?php wpkirk_md(__('An useful wrapper for ' . '<a href="https://morrisjs.github.io/morris.js/">Morris JS</a>' . ' to display charts.', 'wp-kirk')); ?>
    </p>

    <?php $package->gitHubRepository() ?>
    <?php $package->installation() ?>

    <?php wpkirk_section(__('Usage', 'wp-kirk')); ?>

    <div id="morris-area"></div>

    <p>
      <?php wpkirk_md(__('You have to create a container element with an `id`. This element will be used to display the chart.', 'wp-kirk')); ?>
    </p>

    <?php wpkirk_code(htmlentities('<div id="morris-area"></div>'), ['language' => 'html']) ?>

    <?php wpkirk_code("echo WPKirk\MorrisPHP\Morris::area( 'morris-area' )
               ->xkey( [ 'y' ] )
               ->ykeys( [ 'a', 'b' ] )
               ->labels( [ 'Series A', 'Series B' ] )
               ->hoverCallback( 'function(index, options, content){var row = options.data[index];return \"sin(\" + row.x + \") = \" + row.y;}' )
               ->data( [
                         [ 'y' => '2006', 'a' => 100, 'b' => 90 ],
                         [ 'y' => '2007', 'a' => 75, 'b' => 65 ],
                         [ 'y' => '2008', 'a' => 50, 'b' => 40 ],
                         [ 'y' => '2009', 'a' => 75, 'b' => 65 ],
                         [ 'y' => '2010', 'a' => 50, 'b' => 40 ],
                         [ 'y' => '2011', 'a' => 75, 'b' => 65 ],
                         [ 'y' => '2012', 'a' => 100, 'b' => 90 ]
                       ] );
                       ", $eval);
    ?>



  </div>

  <?php wpkirk_toc('User Agent') ?>


</div>