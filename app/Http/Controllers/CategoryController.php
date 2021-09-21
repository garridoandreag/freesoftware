<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\{Category};

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
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
        ]);

        Category::create([
            'name' => $data['name'],
        ]); 

        return redirect()->route('category.index')
        ->with(['status' => 'Categoría registrada con éxito!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $category = Category::find($id);

        return view('category.detail', [
            'category' => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);

        return view('category.create', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->input('id');
        $category = Category::find($id);

        $data = $request->validate([
            'name' => ['required', 'string', 'max:80'],
        ]);

        $category->name = $data['name'];

        if ($request->has('status')) {
            $category->status = 1;
        }else{
            $category->status = 0;
        }
        $category->update();

        return redirect()->route('category.index')
        ->with(['status' => 'Categoría actualizada con éxito!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        try{
            $category = Category::find($id);
    
            DB::transaction(function() use($category){
                $category->delete();
            });
    
        }catch(\Exception $e){
            return redirect()->route('category.index')
            ->with(['warning' => 'No se pudo eliminar el registro, porque ya existen movimientos.']);
        }
  
      return redirect()->route('category.index')
                      ->with(['status' => 'Se elimino el registro.']);
    }
}
