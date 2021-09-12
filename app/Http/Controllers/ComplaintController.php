<?php

namespace App\Http\Controllers;

use App\Models\{Complaint, Vendor};
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

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

        $data = $request->validate([
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

        Complaint::create([
            'summary'=> $data['summary'],
            'description'=> $data['description'],
            'anonymous' => 1,
            'vendor_id' => $data['vendor_id'],
            'department_id' => $data['department_id'],
            'branchoffice_id' => $data['branchoffice_id'],
            'town_id' => $data['town_id'],
            'branch_id' => 1,
        ]);

        return redirect()->route('complaint.index')
                    ->with(['status' => 'Queja registrada con éxito!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Complaint  $complaint
     * @return \Illuminate\Http\Response
     */

    public function search()
    {
        return view('complaint.search');
    }

    public function show(Request $request)
    {
        $complaint = Complaint::where('code',$request->code)->first();

        return view('complaint.detail', [
            'complaint' => $complaint
        ]);
    }

    public function detail($id){
        $complaint = Complaint::find($id);

        return view('complaint.detail', [
            'complaint' => $complaint
        ]);
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
