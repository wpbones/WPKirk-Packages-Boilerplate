<div class="wp-kirk wrap wp-kirk-sample">

  <?php echo $table; ?>

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

'screen_options' => ['cakes_per_page'],
...",
    ['line-numbers' => true, 'line' => '11']
  ) ?>

  <?php wpkirk_code(
    '@/plugin/Support/WPTable/SearchTable.php',
    ['line-numbers' => true, 'line' => '12, 19']
  ) ?>

</div>