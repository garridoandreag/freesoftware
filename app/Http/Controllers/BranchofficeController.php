<?php

namespace App\Http\Controllers;

use App\Models\{Branchoffice, Town, Department, Vendor};
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class BranchofficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branchoffices = Branchoffice::all();

        return view('branchoffice.index',compact('branchoffices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::get()->where('status',1)->pluck('name','id');
        $vendors = Vendor::get()->where('status',1)->pluck('name','id');

        return view('branchoffice.create',compact('departments','vendors'));
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
            'name' => ['required', 'string', 'max:80'],
            'addnit' => ['nullable', 'int', 'max:1'],
            'nit' => ['nullable', 'string', 'max:8'],
            'zone' => ['nullable', 'string', 'max:2'],
            'address' => ['required', 'string', 'max:255'],
            'vendor_id' => ['required'],
            'town_id' => ['required'],
        ]);

        Branchoffice::create([
            'name' => $data['name'],

            'zone' => $data['zone'],
            'address' => $data['address'],
            'vendor_id' => $data['vendor_id'],
            'town_id' => $data['town_id'],
        ]); 

        return redirect()->route('branchoffice.index')
        ->with(['status' => 'Sucursal registrada con éxito!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branchoffice  $branchoffice
     * @return \Illuminate\Http\Response
     */
    public function show(Branchoffice $branchoffice)
    {
        //
    }

    public function detail($id){
        $branchoffice = Branchoffice::find($id);

        return view('branchoffice.detail', [
            'branchoffice' => $branchoffice
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branchoffice  $branchoffice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $branchoffice = Branchoffice::find($id);

        $departments = Department::get()->where('status',1)->pluck('name','id');
        $vendors = Vendor::get()->where('status',1)->pluck('name','id');

        return view('branchoffice.create', compact('branchoffice', 'departments', 'vendors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Branchoffice  $branchoffice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->input('id');
        $branchoffice = Branchoffice::find($id);

        $data = $request->validate([
            'name' => ['required', 'string', 'max:80'],
            'addnit' => ['nullable', 'int', 'max:1'],
            'nit' => ['nullable', 'string', 'max:8'],
            'zone' => ['nullable', 'string', 'max:2'],
            'address' => ['required', 'string', 'max:255'],
            'vendor_id' => ['required'],
            'town_id' => ['required'],
        ]);

        $branchoffice->name = $data['name'];
        $branchoffice->zone = $data['zone'];
        $branchoffice->address = $data['address'];
        $branchoffice->vendor_id = $data['vendor_id'];
        $branchoffice->town_id = $data['town_id'];

        if ($request->has('status')) {
            $branchoffice->status = 1;
        }else{
            $branchoffice->status = 0;
        }

        if ($request->has('addnit')) {
            $branchoffice->addnit = 1;
            $branchoffice->nit = $data['nit'];
        }else{
            $branchoffice->addnit = 0;
        }

        $branchoffice->update();

        return redirect()->route('branchoffice.index')
        ->with(['status' => 'Sucursal actualizada con éxito!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branchoffice  $branchoffice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branchoffice $branchoffice)
    {
        //
    }

    public function get($vendor_id, $town_id, $zone_val = ''){

        if(!empty($zone_val)){
            $branchoffices = Branchoffice::where('vendor_id',$vendor_id)
            ->where('town_id',$town_id)
            ->where('zone',$zone_val)->pluck('address','id');
        }else{ 
            $branchoffices = Branchoffice::where('vendor_id',$vendor_id)
            ->where('town_id',$town_id)->pluck('address','id');
        }
        return json_encode($branchoffices);
    }

    public function getZones($vendor_id,$town_id){
        $zones = Branchoffice::where('town_id',$town_id)
        ->where('vendor_id',$vendor_id)->pluck('zone','zone');

        return json_encode($zones);

    }

}
