<?php

namespace App\Services;
use App\Models\Branch;

class Branches {

  public function get(){

    $branches = Branch::get()->where('status',1);

    foreach($branches as $branch){

      $branchesArray[$branch->id] = $branch->name;

    }

    return $branchesArray;
  }
  
}