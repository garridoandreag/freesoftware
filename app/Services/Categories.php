<?php

namespace App\Services;
use App\Models\Category;

class Categories {

  public function get(){

    $categories = Category::get()->where('status',1);

    foreach($categories as $category){

      $categoriesArray[$category->id] = $category->name;

    }

    return $categoriesArray;
  }
  
}