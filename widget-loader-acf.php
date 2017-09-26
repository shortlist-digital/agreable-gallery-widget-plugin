<?php

$key = 'widget_gallery';
$widgetplacement = self::$config['tab_placement'];

$choices = self::$config['image_choices'];
$choices['original'] = 'No crop';

$widget_config = array (
  'key' => $key,
  'name' => 'gallery',
  'label' => 'Gallery',
  'display' => 'block',
  'sub_fields' => array (
    array (
      'key' => $key . '_basic_details_tab',
      'label' => 'Basic Details',
      'type' => 'tab',
      'placement' => $widgetplacement,
    ),
    array (
      'key' => $key . '_galleryitems',
      'label' => 'Gallery items',
      'name' => 'gallery_items',
      'type' => 'gallery',
      'required' => 1,
      'preview_size' => 'large',
      'library' => 'all',
    ),
	array (
	  'key' => $key . '_crop',
	  'label' => 'Select a preferred crop size',
	  'name' => 'crop',
	  'type' => 'select',
	  'instructions' => 'This will force all items to have the same crop. Don&rsquo;t forget to manually adjust the corresponding crop for each image.',
	  'required' => 1,
	  'choices' => $choices,
	  'default_value' => 'original'
	),
    array (
      'key' => $key . '_advanced_details_tab',
      'label' => 'Advanced Details',
      'type' => 'tab',
      'placement' => $widgetplacement,
    ),
  )
);

$widget_config["content-types"] = get_option("options_" . $key . "_available_post_types");
$widget_config["content-sizes"] = array('main'); // main, sidebar
