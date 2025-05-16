<?php

namespace WPKirk\Http\Controllers\Packages;

use WPKirk\Http\Controllers\Controller;
use WPKirk\PureCSSTabs\PureCSSTabsProvider;

if (!defined('ABSPATH')) {
  exit();
}

class PureCSSTabController extends Controller
{
  public function index()
  {
    PureCSSTabsProvider::enqueueStyles();

    return WPKirk()
      ->view('packages.pure-css-tab.index')
      ->withAdminStyle('prism')
      ->withAdminScript('prism')
      ->withAdminStyle('wp-kirk-common');
  }
}
