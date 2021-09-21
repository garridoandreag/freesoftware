<?php
namespace App\Services;

class Statuses {

  public function get(){

    $statusArray[0] = 'Inactivo';
    $statusArray[1] = 'Activo';
    $statusArray[2] = 'Revisado';

    return $statusArray;
  }
  
}