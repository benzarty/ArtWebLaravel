<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Velo;
class VeloController extends Controller
{ public function index()
    {

        $velos = DB::table('velos')
        ->get();
        return view('velos.index',compact('velos'))
             ->with('i', (request()->input('page', 1) - 1) * 5);


    }
    public function index2()
    {
        $velos =DB::table('velos')
        ->get();
         return view('byccle',compact('velos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('velos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'marque' => 'required',
            'couleur' => 'required',
            'description' => 'required',
            'tarif' => 'required',

        ]);

        Velo::create($request->all());

        return redirect()->route('velos.index')
                        ->with('success','velo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Velo  $velo
     * @return \Illuminate\Http\Response
     */
    public function show(Velo $velo)
    {
        return view('velos.show',compact('velo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Velo  $velo
     * @return \Illuminate\Http\Response
     */
    public function edit(Velo $velo)
    {
        return view('velos.edit',compact('velo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Velo  $velo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Velo $velo)
    {
        $request->validate([
            'type' => 'required',
            'marque' => 'required',
            'couleur' => 'required',
            'description' => 'required',
            'tarif' => 'required',
        ]);

        $velo->update($request->all());

        return redirect()->route('velos.index')
                        ->with('success','velo updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\V  $velo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Velo $velo)
    {
        $velo->delete();

        return redirect()->route('velos.index')
                        ->with('success','velo deleted successfully');
    }



}
