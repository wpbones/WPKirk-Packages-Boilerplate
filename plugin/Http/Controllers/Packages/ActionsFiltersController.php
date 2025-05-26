<?php

namespace WPKirk\Http\Controllers\Packages;

use WPKirk\Http\Controllers\Controller;
use WPKirk\ActionsAndFiltersJS\ActionsAndFiltersJSProvider;

if (!defined('ABSPATH')) {
  exit();
}

class ActionsFiltersController extends Controller
{
  public function index()
  {
    ActionsAndFiltersJSProvider::enqueueScripts();

    return WPKirk()
      ->view('packages.actions-filters-js.index')
      ->withAdminStyle('prism')
      ->withAdminScript('prism')
      ->withAdminStyle('wp-kirk-common');
  }
}
