<?php

namespace WPKirk\Http\Controllers\Packages;

use WPKirk\Http\Controllers\Controller;
use WPKirk\MorrisPHP\Morris;

if (!defined('ABSPATH')) {
  exit();
}

class MorrisPHPController extends Controller
{
  public function index()
  {

    Morris::enqueue();

    return WPKirk()
      ->view('packages.morris-php.index')
      ->withAdminStyle('prism')
      ->withAdminScript('prism')
      ->withAdminStyle('wp-kirk-common');
  }
}
