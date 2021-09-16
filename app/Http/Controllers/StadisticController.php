<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\{Branchoffice, Town, Department, Vendor};

class StadisticController extends Controller
{
    public function charts()
    {
      $vendors = Vendor::get()->where('status',1)->pluck('name','id');

        return view('stadistic.charts',compact('vendors'));

    }

    public function getComplaints(){

        $complaints = DB::table('stadistic')->select(DB::raw('department, sum(quantity) as quantity'))->groupBy('department')->get();

        return json_encode($complaints);
    }


}
