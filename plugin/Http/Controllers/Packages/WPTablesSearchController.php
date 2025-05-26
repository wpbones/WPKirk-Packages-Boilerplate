<?php

namespace WPKirk\Http\Controllers\Packages;

use WPKirk\Http\Controllers\Controller;
use WPKirk\Support\WPTable\SearchTable;

class WPTablesSearchController extends Controller
{
  public function load()
  {
    SearchTable::registerScreenOption();
  }

  public function index()
  {
    $table = new SearchTable();

    return WPKirk()
      ->view('packages.wptable.search')
      ->with('table', $table)
      ->withAdminStyle('prism')
      ->withAdminScript('prism')
      ->withAdminStyle('wp-kirk-common');
  }
}
