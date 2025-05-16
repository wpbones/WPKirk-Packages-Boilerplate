<?php $switch = WPKirk\PureCSSSwitch\Html\HtmlTagSwitchButton::useSwitch(); ?>

<?php echo $switch->name('test-checked')
  ->checked(true)
  ->left_label('Checked'); ?>

<hr />

<?php echo $switch->name('test-switch-3')->left_label('Left label'); ?>

<hr />

<?php echo $switch->name('test-switch-4')->right_label('Right label'); ?>

<hr />

<?php echo $switch->name('test-switch-5')
  ->left_label('Left label')
  ->right_label('Right label'); ?>

<hr />

<?php echo $switch->name('test-switch-6')
  ->disabled(true)
  ->right_label('Disabled'); ?>

<hr />

<?php echo $switch->name('test-switch-7')
  ->disabled(true)
  ->left_label('Disabled'); ?>