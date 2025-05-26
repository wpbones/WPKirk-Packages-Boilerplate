<?php

if (!defined('ABSPATH')) {
  exit();
}

/*
|--------------------------------------------------------------------------
| Custom page routes
|--------------------------------------------------------------------------
|
| Here is where you can register all page routes for your custom view.
| Then you will use $plugin->getPageUrl( 'custom_page' ) to get the URL.
|
*/

return [
  'wp_tables_search' => [
    'title'      => __('WP Rables Search Example', 'wp-kirk'),
    'capability' => 'read',
    'route'      => [
      'load' => 'Packages\WPTablesSearchController@load',
      'get' => 'Packages\WPTablesSearchController@index'
    ]
  ],
  'wp_tables_fluent' => [
    'title'      => __('WP Tables Fluent Example', 'wp-kirk'),
    'capability' => 'read',
    'route'      => [
      'load' => 'Packages\WPTablesFluentController@load',
      'get' => 'Packages\WPTablesFluentController@index'
    ]
  ]
];
