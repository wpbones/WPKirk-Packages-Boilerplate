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
    "page_title" => "Packages",
    "menu_title" => "Packages",
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
        "page_title" => "Actions & Filters JS",
        "menu_title" => "Actions & Filters JS",
        'capability' => 'read',
        'route' => [
          'get' => 'Packages\ActionsFiltersController@index'
        ],
      ],
      [
        "page_title" => "Flags",
        "menu_title" => "Flags",
        'capability' => 'read',
        'route' => [
          'get' => 'Packages\FlagsController@index'
        ],
      ],
      [
        "page_title" => "Geolocalizer",
        "menu_title" => "Geolocalizer",
        'capability' => 'read',
        'route' => [
          'get' => 'Packages\GeolocalizerController@index',
          'post' => 'Packages\GeolocalizerController@save'
        ],
      ],
      [
        "page_title" => "Morris PHP",
        "menu_title" => "Morris PHP",
        'capability' => 'read',
        'route' => [
          'get' => 'Packages\MorrisPHPController@index'
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
      [
        "page_title" => "User Agent",
        "menu_title" => "User Agent",
        'capability' => 'read',
        'route' => [
          'get' => 'Packages\UserAgentController@index'
        ],
      ],
      [
        "page_title" => "WP Tables",
        "menu_title" => "WP Tables",
        'capability' => 'read',
        'route' => [
          'load' => 'Packages\WPTableController@load',
          'get' => 'Packages\WPTableController@index'
        ],
      ],
    ]
  ]
];
