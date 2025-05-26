<?php

namespace WPKirk\Http\Controllers\Packages;

use WPKirk\Http\Controllers\Controller;
use WPKirk\WPTables\Html\WPTable;

class WPTablesFluentController extends Controller
{
  public function load()
  {
    WPTable::name('Books')
      ->columns([
        'id' => 'Name',
        'description' => 'Description',
      ])
      ->screenOptionLabel('Books per Page')
      ->registerScreenOption();
  }

  public function index()
  {
    $items = [];

    for ($i = 0; $i < 20; $i++) {
      $items[] = [
        'id' => "Book {$i}",
        'description' => 'Some description...',
      ];
    }

    $table = WPTable::name('Books')
      ->title('My Awesome Books')
      ->columns([
        'id' => 'Name',
        'description' => 'Description',
      ])
      ->setItems($items);

    return WPKirk()
      ->view('packages.wptable.fluent')
      ->with('table', $table)
      ->withAdminStyle('prism')
      ->withAdminScript('prism')
      ->withAdminStyle('wp-kirk-common');
  }
}
