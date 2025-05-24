<?php

namespace WPKirk\Http\Controllers\Packages;

use WPKirk\Http\Controllers\Controller;
use WPKirk\Support\WPTable\DiscoTable;

class WPTableController extends Controller
{
  public function load()
  {
    DiscoTable::registerScreenOption();
  }

  public function index()
  {
    $table = new DiscoTable();

    return WPKirk()
      ->view('packages.wptable.index')
      ->with('table', $table)
      ->withAdminStyle('prism')
      ->withAdminScript('prism')
      ->withAdminStyle('wp-kirk-common');
  }
}
