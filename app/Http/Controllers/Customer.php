<?php

namespace App\Http\Controllers;

use App\Product;
use App\Seller;
use App\Customer;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class Customer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::orderBy('id_customer','DESC')->paginate(10);
        
         return view ('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view ('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Guardamos el Customer
            $customer = Customer::create($request->all());

        return redirect()->route('customers.index')->with('info', 'Customer creado exitosamente!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);

        return view ('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $customer = Customer::find($id);

        //En esta seccion verificamos si el post que desea editar el usuario pertene a el de lo contrario no dejamos que lo edite

        return view ('customers.edit', compact('customer'));
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
         $customer = Customer::find($id);

         $customer->fill($request->all())->save();

        return redirect()->route('customers.index')->with('info', 'Customer actualizado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
       
        $name = Customer::where('id_customer', $id)->pluck('name');
        
        Customer::find($id)->delete();

        return back()->with('info', 'Customer '. $name.' eliminado correctamente!' );

    }
}
