<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Vendor::all();

        return view('vendor.index',compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendor.create');
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
            'registeredname' => ['required', 'string', 'max:100'],
            'nit' => ['required', 'string'],
        ]);

        if ($request->has('status')) {
            Vendor::create([
                'name' => $data['name'],
                'registeredname' => $data['registeredname'],
                'nit' => $data['nit'],
                'status' => 1,
            ]); 
        }else{
            Vendor::create([
                'name' => $data['name'],
                'registeredname' => $data['registeredname'],
                'nit' => $data['nit'],
                'status' => 0,
            ]);
        }


        return redirect()->route('vendor.index')
        ->with(['status' => 'Proveedor registrado con éxito!']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $vendor = Vendor::find($id);

        return view('vendor.detail', [
            'vendor' => $vendor
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendor = Vendor::find($id);

        return view('vendor.create', [
            'vendor' => $vendor
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->input('id');
        $vendor = Vendor::find($id);

        $data = $request->validate([
            'name' => ['required', 'string', 'max:80'],
            'registeredname' => ['required', 'string', 'max:100'],
            'nit' => ['required', 'string'],
        ]);

        $vendor->name = $data['name'];
        $vendor->registeredname = $data['registeredname'];
        $vendor->nit = $data['nit'];

        if ($request->has('status')) {
            $vendor->status = 1;
        }else{
            $vendor->status = 0;
        }
        $vendor->update();

        return redirect()->route('vendor.index')
        ->with(['status' => 'Proveedor actualizado con éxito!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendor $vendor)
    {
        //
    }

    public function getVendors($id){
        $vendors = Vendor::where('status','true')->pluck('name','id');
        return json_encode($vendors);
    }

}
