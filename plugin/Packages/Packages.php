<?php

namespace WPKirk\Packages;

class Packages
{

  protected $package;

  public $key;
  public $url;
  public $tag;

  public function __construct($key)
  {
    $this->package = self::availablePackages()[$key];

    $this->key = $key;
    $this->url = $this->package['url'];
    $this->tag = $this->package['tag'];
  }

  public static function availablePackages()
  {
    return [
      'wpbones/actions-and-filters-js' => [
        'title' => 'Actions and Filters JS',
        'url' => 'https://github.com/wpbones/actions-and-filters-js',
        'tag' => '1.1',
      ],
      'wpbones/flags' => [
        'title' => 'Flags',
        'url' => 'https://github.com/wpbones/flags',
        'tag' => '1.1',
      ],
      'wpbones/geolocalizer' => [
        'title' => 'Geolocalizer',
        'url' => 'https://github.com/wpbones/geolocalizer',
        'tag' => '1.1',
      ],
      'wpbones/morris-php' => [
        'title' => 'Morris PHP',
        'url' => 'https://github.com/wpbones/morris-php',
        'tag' => '1.1',
      ],
      'wpbones/pure-css-switch' => [
        'title' => 'Pure CSS Switch',
        'url' => 'https://github.com/wpbones/pure-css-switch',
        'tag' => '1.2',
      ],
      'wpbones/pure-css-tabs' => [
        'title' => 'Pure CSS Tabs',
        'url' => 'https://github.com/wpbones/pure-css-tabs',
        'tag' => '1.1',
      ],
      'wpbones/useragent' => [
        'title' => 'UserAgent',
        'url' => 'https://github.com/wpbones/useragent',
        'tag' => '1.1',
      ],
      'wpbones/wptables' => [
        'title' => 'WPTables',
        'url' => 'https://github.com/wpbones/wptables',
        'tag' => '1.1',
      ],
    ];
  }

  public static function get($key)
  {
    $instance = new self($key);

    return $instance;
  }

  public function gitHubRepository()
  {
?>
    <p>
      <a href="<?php echo esc_attr($this->url) ?>"><?php wpkirk_md(__('GitHub Respository', 'wp-kirk')); ?></a>
    </p>
  <?php
  }

  public  function installation()
  {
    $key = $this->key;
    $tag = $this->tag;
  ?>
    <?php wpkirk_section(__('Installation', 'wp-kirk')); ?>

    <p>
      <?php wpkirk_md(__('You can install third party packages by using:', 'wp-kirk')); ?>
    </p>

    <?php wpkirk_code("php bones require {$key}", ['language' => 'bash']) ?>

    <p>
      <?php wpkirk_md('I advise to use this command instead of `composer require` because doing this an automatic renaming will done.') ?>
    </p>

    <?php wpkirk_code("composer require {$key}", ['language' => 'bash']) ?>

    <p>
      <?php wpkirk_md('You may also to add `"' . $key . '": "~' . $tag . '"` in the `composer.json` file of your plugin:') ?>
    </p>

    <?php wpkirk_code('"require": {
  "php": ">=7.4",
  "wpbones/wpbones": "~1.9",
  "' . $key . '": "~' . $tag . '"
},', ['language' => 'json']) ?>
<?php
  }
}
