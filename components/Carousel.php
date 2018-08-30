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
    return [];
  }

  public function records(){

    return CarouselModel::default()->get();

  }



}
