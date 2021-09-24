<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Complaint, Region, Department};
use DB;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function index(){
        $regions = Region::where('status',1)->pluck('name','id');

        $departments = Department::where('status',1)->orderBy('name','asc')->pluck('name','id');

        return view('report.index', compact('regions','departments'));
    }

    public function getComplaintPDF($id)
    {
        $complaint = Complaint::find($id);
        $now = Carbon::now();
        $pdf = \PDF::loadView('/report/complaint',[
            'complaint' => $complaint,
            'now' => $now
        ]);

        return $pdf->download('complaint.pdf');
    }

    public function getComplaintsByDatePDF(Request $request)
    {
        $data = $request->validate([
            'startDate' => ['required', 'date'],
            'endDate' => ['required', 'date'],
        ]);

        $complaints = DB::table('complaintview')
        ->select('region','department','town','vendor','address','code','summary','description','category','status','createdTZ')
        ->where('createdTZ','>=',$data['startDate'])
        ->where('createdTZ','<=',$data['endDate'])
        ->get();

        $now = Carbon::now();
        $startDate = $data['startDate'];
        $endDate = $data['endDate'];

        $pdf = \PDF::loadView('/report/complaintsByDate',compact('complaints','now','startDate','endDate'))->setPaper('a4', 'landscape');

        return $pdf->download('complaints-'.$startDate.'-to-'.$endDate.'.pdf');

    }

    public function getComplaintsByDateRegionPDF(Request $request)
    {
        $data = $request->validate([
            'startDate' => ['required', 'date'],
            'endDate' => ['required', 'date'],
        ]);

        $regions = $request->input('region_id');

        //var_dump($request->input('region_id'));
        //die();
        $quantityRegions = count(array($request->input('region_id')));

        $complaints = DB::table('complaintview')
            ->select('region','department','town','vendor','address','code','summary','description','category','status','createdTZ')
            ->whereIn('region_id',$regions)
            ->where('createdTZ','>=',$data['startDate'])
            ->where('createdTZ','<=',$data['endDate'])
            ->get();

        $now = Carbon::now();
        $startDate = $data['startDate'];
        $endDate = $data['endDate'];

        $pdf = \PDF::loadView('/report/complaintsByDate',compact('complaints','now','startDate','endDate'))->setPaper('a4', 'landscape');

        return $pdf->download('QuejasPorRegion-'.$startDate.'-A-'.$endDate.'.pdf');

    }

    
    public function getComplaintsByDateDepartmentPDF(Request $request)
    {
        $data = $request->validate([
            'startDate' => ['required', 'date'],
            'endDate' => ['required', 'date'],
        ]);

        $departments = $request->input('department_id');

        //var_dump($request->input('region_id'));
        //die();
        $quantityDepartments = count(array($request->input('department_id')));

        $complaints = DB::table('complaintview')
        ->select('region','department','town','vendor','address','code','summary','description','category','status','createdTZ')
        ->whereIn('department_id',$departments)
        ->where('createdTZ','>=',$data['startDate'])
        ->where('createdTZ','<=',$data['endDate'])
        ->get();
        

        $now = Carbon::now();
        $startDate = $data['startDate'];
        $endDate = $data['endDate'];

        $pdf = \PDF::loadView('/report/complaintsByDate',compact('complaints','now','startDate','endDate'))->setPaper('a4', 'landscape');

        return $pdf->download('QuejasPorDepartamento-'.$startDate.'-A-'.$endDate.'.pdf');

    }

    
    public function getComplaintsByDateCategoryPDF(Request $request)
    {
        $data = $request->validate([
            'startDate' => ['required', 'date'],
            'endDate' => ['required', 'date'],
        ]);

        $categories = $request->input('category_id');

        //var_dump($request->input('region_id'));
        //die();
        $quantityCategories = count(array($request->input('category_id')));

        $complaints = DB::table('complaintview')
        ->select('region','department','town','vendor','address','code','summary','description','category','status','createdTZ')
        ->whereIn('category_id',$categories)
        ->where('createdTZ','>=',$data['startDate'])
        ->where('createdTZ','<=',$data['endDate'])
        ->get();
        

        $now = Carbon::now();
        $startDate = $data['startDate'];
        $endDate = $data['endDate'];

        $pdf = \PDF::loadView('/report/complaintsByDate',compact('complaints','now','startDate','endDate'))->setPaper('a4', 'landscape');

        return $pdf->download('QuejasPorCategoria-'.$startDate.'-A-'.$endDate.'.pdf');

    }


}