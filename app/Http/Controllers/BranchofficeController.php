<?php

namespace App\Http\Controllers;

use App\Models\Branchoffice;
use App\Models\Town;
use Illuminate\Http\Request;

class BranchofficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branchoffice  $branchoffice
     * @return \Illuminate\Http\Response
     */
    public function edit(Branchoffice $branchoffice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Branchoffice  $branchoffice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branchoffice $branchoffice)
    {
        //
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
