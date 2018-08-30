<?php namespace Acte\Carousel\Components;

use Cms\Classes\ComponentBase;
use Acte\Carousel\Models\Carousel as CarouselModel;


class Carousel extends ComponentBase
{

  public function componentDetails()
  {
    return [
      'name' => 'Carousel',
      'description' => 'Display images in a carousel',
    ];
  }

  public function defineProperties()
  {
    return [
      'imageCropMode' => [
        'title' => 'Crop mode',
        'description' => '',
        'type' => 'dropdown',
        'default' => 'crop',
        'options'     => ['auto'=>'Auto', 'crop'=>'Crop'],
        'group' => 'Image Crop',
      ],
      'imageCropWidth' => [
        'title' => 'Crop width',
        'description' => '',
        'type' => 'string',
        'default' => 640,
        'validationPattern' => '^[0-9]+$',
        'validationMessage' => 'Must be a number.',
        'group' => 'Image Crop'
      ],
      'imageCropHeight' => [
        'title' => 'Crop height',
        'description' => '',
        'type' => 'string',
        'default' => 400,
        'validationPattern' => '^[0-9]+$',
        'validationMessage' => 'Must be a number.',
        'group' => 'Image Crop'
      ],
      'maskActivate' => [
        'title' => 'Activate mask',
        'description' => 'Apply color filter on carousel pictures',
        'type' => 'checkbox',
        'group' => 'Mask'
      ],
      'maskIntensity' => [
        'title' => 'Mask intensity',
        'description' => 'Adjust color intensity',
        'type' => 'dropdown',
        'default' => 'slight',
        'options'     => [
          'slight'=>'Slight',
          'light'=>'Light',
          'strong' => 'Strong'
          ],
        'group' => 'Mask',
      ],
      'maskColor' => [
        'title' => 'Mask color',
        'description' => 'Adjust color intensity',
        'type' => 'dropdown',
        'default' => 'black',
        'options' => [
          'blue' => 'blue',
          'red' => 'red',
          'pink' => 'pink',
          'purple' => 'purple',
          'indigo' => 'indigo',
          'cyan' => 'cyan',
          'teal' => 'teal',
          'green' => 'green',
          'lime' => 'lime',
          'yellow' => 'yellow',
          'orange' => 'orange',
          'brown' => 'brown',
          'grey' => 'grey',
          'blue-grey' => 'blue-grey',
          'black' => 'black',
          'stylish' => 'stylish',
          'white' => 'white',
        ],
        'group' => 'Mask',
      ],
    ];
  }

  public function records(){

    return CarouselModel::default()->get();

  }



}
