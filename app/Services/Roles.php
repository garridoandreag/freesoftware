<?php

namespace App\Services;
use App\Models\Role;

class Roles {

  public function get(){

    $Roles = Role::get()->where('status',1);

    foreach($Roles as $Role){

      $RolesArray[$Role->id] = $Role->name;

    }

    return $RolesArray;
  }
  
}