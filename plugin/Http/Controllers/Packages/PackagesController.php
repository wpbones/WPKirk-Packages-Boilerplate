<?php

namespace WPKirk\Http\Controllers\Packages;

use WPKirk\Http\Controllers\Controller;
use WPKirk\PureCSSTabs\PureCSSTabsProvider;

if (!defined('ABSPATH')) {
  exit();
}

class PackagesController extends Controller
{
  public function index()
  {
    return WPKirk()
      ->view('packages.index')
      ->withAdminStyle('prism')
      ->withAdminScript('prism')
      ->withAdminStyle('wp-kirk-common');
  }
}
