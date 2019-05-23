<?php

namespace App\Http\Controllers;

use App\Product;
use App\Seller;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id_category','DESC')->paginate(5);
        
         return view ('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //Guardamos el Category
            $category = Category::create($request->all());

        

        

        return redirect()->route('categories.index')->with('info', 'Categoria creado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $category = Category::find($id);

        return view ('categories.show', compact('category'));
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

        //En esta seccion verificamos si el post que desea editar el usuario pertene a el de lo contrario no dejamos que lo edite

        return view ('categories.edit', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $category = Category::find($id);


        $category->fill($request->all())->save();


        return redirect()->route('categories.index')->with('info', 'Category actualizada exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        $name = Category::where('id_category', $id)->pluck('name');
        
        Category::find($id)->delete();

        return back()->with('info', 'Category '. $name.' eliminado correctamente!' );

    }
}
