<?php

namespace WPKirk\Http\Controllers\Packages;

use WPKirk\Http\Controllers\Controller;

if (!defined('ABSPATH')) {
  exit();
}

class GeolocalizerController extends Controller
{
  public function index()
  {
    add_filter('wpbones_geolocalizer_ipstack_api_key', function () {
      return WPKirk()->options->get('ip_stack.key');
    });

    $geo = \WPKirk\GeoLocalizer\GeoLocalizerProvider::geoIP();

    return WPKirk()
      ->view('packages.geolocalizer.index')
      ->with('geo', $geo)
      ->withAdminStyle('prism')
      ->withAdminScript('prism')
      ->withAdminStyle('wp-kirk-common');
  }

  public function save()
  {
    if ($this->request->verifyNonce('IP_STACK')) {
      WPKirk()->options->update($this->request->getAsOptions());
      $feedback = 'IP STACK KEY updated!';
    }

    add_filter('wpbones_geolocalizer_ipstack_api_key', function () {
      return WPKirk()->options->get('ip_stack.key');
    });

    $geo = \WPKirk\GeoLocalizer\GeoLocalizerProvider::geoIP();

    return WPKirk()
      ->view('packages.geolocalizer.index')
      ->with('feedback', $feedback)
      ->with('geo', $geo)
      ->withAdminStyle('prism')
      ->withAdminScript('prism')
      ->withAdminStyle('wp-kirk-common');
  }
}
