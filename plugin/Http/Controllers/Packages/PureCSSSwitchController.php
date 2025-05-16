<?php

namespace WPKirk\Http\Controllers\Packages;

use WPKirk\Http\Controllers\Controller;
use WPKirk\PureCSSSwitch\PureCSSSwitchProvider;

if (!defined('ABSPATH')) {
  exit();
}

class PureCSSSwitchController extends Controller
{
  public function index()
  {
    PureCSSSwitchProvider::enqueueStyles();

    return WPKirk()
      ->view('packages.pure-css-switch.index')
      ->withAdminStyle('prism')
      ->withAdminScript('prism')
      ->withAdminStyle('wp-kirk-common');
  }
}
