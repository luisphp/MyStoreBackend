<?php

namespace App\Http\Controllers;

use App\Product;
use App\Seller;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $products = Product::orderBy('id_product','DESC')->paginate(5);
        
        return view ('products.index', compact('products'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categories = Category::orderBy('name','ASC')->pluck('name','id_category');

         $sellers = Seller::orderBy('name','ASC')->pluck('name','id_seller');
        
        return view ('products.create', compact('categories','sellers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Guardamos el Producto
        $product = Product::create($request->all());


        //Verificamos que tenemos una imagen
        if($request->file('photo_1')){


            //En caso  de tenerla la guardamos en la clase Storage en la carpeta public en la carpeta image.
            $path = Storage::disk('public')->put('image',$request->file('photo_1'));

            //Actualizamos el Post que acabamos de crear
            $post->fill(['photo_1' => asset($path)])->save();

        }

        

        return redirect()->route('products.index')->with('info', 'Producto creado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view ('products.show', compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        //En esta seccion verificamos si el post que desea editar el usuario pertene a el de lo contrario no dejamos que lo edite

        $categories = Category::orderBy('name','ASC')->pluck('name','id_category');

        $sellers = Seller::orderBy('name','ASC')->pluck('name','id_seller');


        return view ('products.edit', compact('product','categories','sellers'));
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
        
         $product = Product::find($id);


        $product->fill($request->all())->save();

           //Verificamos que tenemos una imagen
        if($request->file('photo_1')){


            //En caso  de tenerla la guardamos en la clase Storage en la carpeta public en la carpeta image.
            $path = Storage::disk('public')->put('photo_1',$request->file('photo_1'));

            //Actualizamos el Post que acabamos de crear
            $product->fill(['photo_1' => asset($path)])->save();

        }


        return redirect()->route('products.index')->with('info', 'Producto actualizado exitosamente!');
    }

   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $product = Product::find($id);

       
        $name = Product::where('id_product', $id)->pluck('name');
        
        Product::find($id)->delete();

        return back()->with('info', 'Producto '. $name.' eliminada correctamente' );
    }
}
