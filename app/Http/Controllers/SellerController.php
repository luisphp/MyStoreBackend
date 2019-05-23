<?php

namespace App\Http\Controllers;

use App\Product;
use App\Seller;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $sellers = Seller::orderBy('id_seller','DESC')->paginate(5);
        
         return view ('sellers.index', compact('sellers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        
        return view ('sellers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
            //Guardamos el Seller
            $seller = Seller::create($request->all());


            //Verificamos que tenemos una imagen
            if($request->file('company_logo')){


            //En caso  de tenerla la guardamos en la clase Storage en la carpeta public en la carpeta image.
            $path = Storage::disk('public')->put('company_logo',$request->file('company_logo'));

            //Actualizamos el Post que acabamos de crear
            $post->fill(['company_logo' => asset($path)])->save();

        }

        

        return redirect()->route('sellers.index')->with('info', 'Seller creado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $seller = Seller::find($id);

        return view ('sellers.show', compact('seller'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $seller = Seller::find($id);

        //En esta seccion verificamos si el post que desea editar el usuario pertene a el de lo contrario no dejamos que lo edite

        return view ('sellers.edit', compact('seller'));
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
         
        $seller = Seller::find($id);


        $seller->fill($request->all())->save();

           //Verificamos que tenemos una imagen
        if($request->file('company_logo')){


            //En caso  de tenerla la guardamos en la clase Storage en la carpeta public en la carpeta image.
            $path = Storage::disk('public')->put('company_logo',$request->file('company_logo'));


            //Actualizamos el Post que acabamos de crear
            $product->fill(['company_logo' => asset($path)])->save();

        }


        return redirect()->route('sellers.index')->with('info', 'Seller actualizado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $seller = Seller::find($id);

       
        $name = Seller::where('id_seller', $id)->pluck('name');
        
        Seller::find($id)->delete();

        return back()->with('info', 'Seller '. $name.' eliminado correctamente!' );
    }
}
