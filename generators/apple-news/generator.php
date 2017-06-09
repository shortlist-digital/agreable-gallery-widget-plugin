<?php
namespace Agreable\Widgets\Gallery\Generators\AppleNews;

use \Timber;

class Generator {
  public function get(array $widget) {

    $images = $widget['gallery_items'];

    $json_as_string = Timber::compile(
      './template.json.twig',
      array(
        'images' => $images
      )
    );

    $json_as_object = json_decode($json_as_string);

    return $json_as_object;
  }
}
