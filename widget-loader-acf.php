<?php

$widgetplacement = self::$config['tab_placement'];

$choices = self::$config['image_choices'];
$choices['original'] = 'Original';

$widget_config = array (
  'key' => 'widget_gallery',
  'name' => 'gallery',
  'label' => 'Gallery',
  'display' => 'block',
  'sub_fields' => array (
    array (
      'key' => 'gallery_basic_details_tab',
      'label' => 'Basic Details',
      'type' => 'tab',
      'placement' => $widgetplacement,
    ),
    array (
      'key' => 'widget_gallery_galleryitems',
      'label' => 'Gallery items',
      'name' => 'gallery_items',
      'type' => 'gallery',
      'required' => 1,
      'preview_size' => 'large',
      'library' => 'all',
    ),
    array (
      'key' => 'gallery_advanced_details_tab',
      'label' => 'Advanced Details',
      'type' => 'tab',
      'placement' => $widgetplacement,
    ),
    array (
      'key' => 'widget_gallery_crop',
      'label' => 'Select a preferred crop size',
      'name' => 'crop',
      'type' => 'select',
      'required' => 1,
      'choices' => $choices,
      'default_value' => 'original'
    ),
  )
);

$widget_config["content-types"] = array('post', 'page', 'sponsored_post', 'sponsored_longform'); // section, post
$widget_config["content-sizes"] = array('main'); // main, sidebar
