<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
    public function config()
    {
        return view('user.config');
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = \Auth::user();
        $id = $user->id;

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id
        ]);

        //Datos del formulario
        $name = $request->input('name');
        $email = $request->input('email');

        //Asignar valores al objeto de user
        $user->name = $name;
        $user->email = $email;

        //
        $image_path = $request->file('image');        

        if($image_path){
            //colocarle un nombre unico
            $image_fullpath= time().$image_path->getClientOriginalName();
            
            //guardar en la carpeta storage (storage/app/users)
            Storage::disk('users')->put($image_fullpath,File::get($image_path));
        
            //setear el nombre de la imagen en el objeto
            $user->image = $image_fullpath;
            
            //$user->save();

            //$user->update();
        }
        //Ejecutar consulta y cambios en la base de datos
        $user->update();

        return redirect()->route('user.config')
                        ->with(['message' => 'Usuario actualizado correctamente.']);

    }

    public function getImage($filename){
        $file = Storage::disk('users')->get($filename);
        return new Response($file,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
