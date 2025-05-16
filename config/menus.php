<?php

if (!defined('ABSPATH')) {
  exit();
}

/*
|--------------------------------------------------------------------------
| Plugin Menus routes
|--------------------------------------------------------------------------
|
| Here is where you can register all the menu routes for a plugin.
| In this context, the route are the menu link.
|
*/

return [
  'wp_kirk_slug_menu' => [
    "page_title" => "WP Kirk Page",
    "menu_title" => "WP Kirk Menu",
    'capability' => 'read',
    'icon' => 'wpbones-logo-menu.png',
    'items' => [
      [
        "page_title" => "Packages",
        "menu_title" => "Packages",
        'capability' => 'read',
        'route' => [
          'get' => 'Packages\PackagesController@index'
        ],
      ],
      [
        "page_title" => "Pure CSS Tab",
        "menu_title" => "Pure CSS Tab",
        'capability' => 'read',
        'route' => [
          'get' => 'Packages\PureCSSTabController@index'
        ],
      ],
      [
        "page_title" => "Pure CSS Switch",
        "menu_title" => "Pure CSS Switch",
        'capability' => 'read',
        'route' => [
          'get' => 'Packages\PureCSSSwitchController@index'
        ],
      ],
    ]
  ]
];
