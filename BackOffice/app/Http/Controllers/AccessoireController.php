<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\Accessoire;
class AccessoireController extends Controller
{
    public function index()
    {
        $accessoires = Accessoire::latest()->paginate(5);

        return view('accessoires.index',compact('accessoires'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accessoires.create');
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
            'nom' => 'required',
            'prix_sup' => 'required',


        ]);

        Accessoire::create($request->all());

        return redirect()->route('accessoires.index')
                        ->with('success','accessoire created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Accessoire  $accessoire
     * @return \Illuminate\Http\Response
     */
    public function show(Accessoire $accessoire)
    {
        return view('accessoires.show',compact('accessoire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Accessoire  $accessoire
     * @return \Illuminate\Http\Response
     */
    public function edit(Accessoire $accessoire)
    {
        return view('accessoires.edit',compact('accessoire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Accessoire  $accessoire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accessoire $accessoire)
    {
        $request->validate([
            'nom' => 'required',
            'prix_sup' => 'required',
        ]);

        $accessoire->update($request->all());

        return redirect()->route('accessoires.index')
                        ->with('success','accessoire updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accessoire  $accessoire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accessoire $accessoire)
    {
        $accessoire->delete();

        return redirect()->route('accessoires.index')
                        ->with('success','accessoire deleted successfully');
    }



}

