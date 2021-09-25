<?php

namespace App\Services;
use App\Models\Vendor;

class Vendors {

  public function get(){

    $vendors = Vendor::get()->where('status',1)->sortBy('name');

    foreach($vendors as $vendor){

      $vendorsArray[$vendor->id] = $vendor->name;

    }

    return $vendorsArray;
  }
  
}