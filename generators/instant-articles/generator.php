<?php
namespace Agreable\Widgets\Gallery\Generators\InstantArticles;

use Timber;

class Generator {
  public function get($widget) {

    $images = $widget['gallery_items'];

    $html_as_string = Timber::compile(
      './template.twig',
      array(
        'images' => $images
      )
    );

    return $html_as_string;
  }
}
