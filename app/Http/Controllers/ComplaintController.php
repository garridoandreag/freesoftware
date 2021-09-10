<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\Department;
use App\Models\Vendor;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complaints = Complaint::all();

        return view('complaint.index',compact('complaints'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vendors = Vendor::get()->where('status',1)->pluck('name','id');

        return view('complaint.create',compact('vendors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'summary' => ['required', 'string', 'max:80'],
            'description' => ['required', 'string', 'max:800'],
            'anonymous' => ['nullable'],
            'nit' => ['nullable'],
            'autor' => ['nullable'],
            'vendor_id' => ['required'],
            'branchoffice_id' => ['required'],
            'department_id' => ['required'],
            'town_id' => ['required'],
            'branch_id' => ['nullable'],
            'category_id' => ['nullable'],
        ]);

        if ($validator->fails())
        {
            return response(['error' => $validator->errors()], HttpStatusCode::BadRequest);
        }

        Complaint::create([
            'summary'=> $data['summary'],
            'description'=> $data['description'],
            'anonymous' => 1,
            'vendor_id' => $data['vendor_id'],
            'branchoffice_id' => $data['branchoffice_id'],
            'department_id' => $data['department_id'],
        ]);

        return response(['message' => 'Created success'], HttpStatusCode::Created);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function show(Complaint $complaint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function edit(Complaint $complaint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Complaint $complaint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function destroy(Complaint $complaint)
    {
        //
    }
}
