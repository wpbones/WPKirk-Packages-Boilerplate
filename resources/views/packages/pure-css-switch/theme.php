<?php $switch = WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::useSwitch(); ?>

<?php echo $switch->name('test-theme-1')
  ->theme('flat-square')
  ->left_label('Square'); ?>

<hr />

<?php echo $switch->name('test-theme-1')
  ->theme('flat-round')
  ->left_label('Round'); ?>