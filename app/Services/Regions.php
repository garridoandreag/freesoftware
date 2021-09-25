<?php

namespace App\Services;
use App\Models\Region;

class Regions {

  public function get(){

    $regions = Region::get()->where('status',1)->sortBy('name');

    foreach($regions as $region){

      $regionsArray[$region->id] = $region->name;

    }

    return $regionsArray;
  }
  
}