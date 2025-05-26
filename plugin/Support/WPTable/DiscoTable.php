<?php

namespace WPKirk\Support\WPTable;

use WPKirk\WPTables\Html\WPTable;

class DiscoTable extends WPTable
{
  protected $title = 'List of Discos';
  protected $name = "disco"; // used for `per_page`
  protected $plural = "Discos";
  protected $singular = "Disco";

  /**
   * Description
   *
   * @return string[]
   */
  public function getColumnsAttribute(): array
  {
    return [
      'id' => 'Name',
      'description' => 'Description',
    ];
  }

  public function getItems($args = []): array
  {
    $fake = [];

    for ($i = 0; $i < 20; $i++) {
      $fake[] = [
        'id' => "Disco {$i}",
        'description' => 'Some description...',
      ];
    }

    return $fake;
  }
}
