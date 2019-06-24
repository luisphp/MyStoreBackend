<?php

namespace App\Http\Controllers;

use App\Product;
use App\Seller;
use App\Campaign;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $campaigns = Campaign::orderBy('id_campaign','DESC')->paginate(5);
        
        return view ('campaigns.index', compact('campaigns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('campaigns.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //Guardamos el Campaign
        $campaig = Campaign::create($request->all());
 
        return redirect()->route('campaigns.index')->with('info', 'Categoria creado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $campaign = Campaign::find($id);

         return view ('campaigns.show', compact('campaign'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $campaign = Campaign::find($id_campaign);

        //En esta seccion verificamos si el post que desea editar el usuario pertene a el de lo contrario no dejamos que lo edite

        return view ('campaigns.edit', compact('campaign'));

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
         $campaign = Campaign::find($id_campaign);


         $campaign->fill($request->all())->save();


         return redirect()->route('campaigns.index')->with('info', 'Campaign actualizada exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)

    {
        $campaign = Campaign::find($id_campaign);

        $name = Campaign::where('id_campaign', $id)->pluck('name');
        
        Campaign::find($id_campaign)->delete();

        return back()->with('info', 'Campaign '. $name.' eliminada correctamente!' );

    }
}
