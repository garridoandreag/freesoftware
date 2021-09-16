<?php

namespace App\Services;
use App\Models\Department;

class Departments {

  public function get(){

    $departments = Department::get()->where('status',1);

    foreach($departments as $department){

      $departmentsArray[$department->id] = $department->name;

    }

    return $departmentsArray;
  }



  
}