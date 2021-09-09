<?php

namespace App\Http\Controllers;

use App\Models\Directorate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class DirectorateController extends Controller
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
        return view('directorate.create');
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
     * @param  \App\Models\Directorate  $directorate
     * @return \Illuminate\Http\Response
     */
    public function show(Directorate $directorate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Directorate  $directorate
     * @return \Illuminate\Http\Response
     */
    public function edit(Directorate $directorate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Directorate  $directorate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    public function getImage($filename){
        $file = Storage::disk('public')->get($filename);
        return new Response($file,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Directorate  $directorate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Directorate $directorate)
    {
        //
    }
}
