<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\{Branchoffice, Town, Department, Vendor};

class StadisticController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function chart1()
    {
      $vendors = Vendor::get()->where('status',1)->pluck('name','id');

        return view('stadistic.chart1',compact('vendors'));

    }

    public function chart2()
    {
      $vendors = Vendor::get()->where('status',1)->pluck('name','id');

        return view('stadistic.chart2',compact('vendors'));

    }

    public function chart3()
    {
      $vendors = Vendor::get()->where('status',1)->pluck('name','id');

        return view('stadistic.chart3',compact('vendors'));

    }

    public function chart4()
    {
      $vendors = Vendor::get()->where('status',1)->pluck('name','id');

        return view('stadistic.chart4',compact('vendors'));

    }

    public function getComplaints($vendor_id = ''){// By departments

      if($vendor_id == 0){
        $complaints = DB::table('department')
        ->leftJoin('complaintview','department.id','=','complaintview.department_id')
        ->select(DB::raw('department.name as department, count(complaintview.id) as quantity'))
        ->groupBy('department.name')
        ->orderBy('department.name', 'asc')
        ->get();
      }else{
        $complaints = DB::table('department')
        ->leftJoin('complaintview', function($q) use ($vendor_id){
          $q->on('complaintview.department_id','=','department.id')
          ->where('complaintview.vendor_id','=',$vendor_id);
        })
        ->select(DB::raw('department.name as department, count(complaintview.id) as quantity'))
        ->groupBy('department.name')
        ->orderBy('department.name', 'asc')
        ->get();
      }
      
        return json_encode($complaints);
    }

    public function getComplaintsByRegion($vendor_id = ''){
      
      if($vendor_id == 0){
        $complaints = DB::table('region')
        ->leftJoin('complaintview','region.id','=','complaintview.region_id')
        ->select(DB::raw('region.name as region, count(complaintview.id) as quantity'))
        ->groupBy('region.name')
        ->get();
      }else{
        $complaints = DB::table('region')
        ->leftJoin('complaintview', function($q) use ($vendor_id){
          $q->on('complaintview.region_id','=','region.id')
          ->where('complaintview.vendor_id','=',$vendor_id);
        })
        ->select(DB::raw('region.name as region, count(complaintview.id) as quantity'))
        ->groupBy('region.name')
        ->get();
      }
      
        return json_encode($complaints);
    }

    public function getComplaintsByCategory($vendor_id = ''){
      
      if($vendor_id == 0){
        $complaints = DB::table('category')
        ->leftJoin('complaintview','category.id','=','complaintview.category_id')
        ->select(DB::raw('category.name as category, count(complaintview.id) as quantity'))
        ->groupBy('category.name')
        ->get();
      }else{
        $complaints = DB::table('category')
        ->leftJoin('complaintview', function($q) use ($vendor_id){
          $q->on('complaintview.category_id','=','category.id')
          ->where('complaintview.vendor_id','=',$vendor_id);
        })
        ->select(DB::raw('category.name as category, count(complaintview.id) as quantity'))
        ->groupBy('category.name')
        ->get();
      }
      
        return json_encode($complaints);
    }

}
