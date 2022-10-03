<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Velo;
class VeloController extends Controller
{
    public function AddVelo(Request $request)
    {
        $velo = new Velo();
        $velo->type = $request->input('type');
        $velo->marque =$request->input('marque');
        $velo->description = $request->input('description');
        $velo->image = $request->input('image');
        $velo->couleur =$request->input('couleur');
        $velo->tarif =$request->input('tarif');
        $velo->save();
        return response()->json([
            'velo' => $velo,
            'success' => true
        ], 200);
    }
    public function EditVelo(Request $request, $id)
    {
        $velo = Velo::findOrFail($id);
        $velo->type = $request->input('type');
        $velo->marque =$request->input('marque');
        $velo->description = $request->input('description');
        $velo->couleur =$request->input('couleur');
        $velo->tarif =$request->input('tarif');
        $velo->save();

        return response()->json([
            'velo' => $velo,
            'success' => true
        ], 200);
    }
    public function getAllVelos()
    { $velos =Velo::latest()->get();
      return response()->json($velos);
    }
    public function destroyVelo($id)
    {
       $velo= Velo::findOrFail($id);
       $velo->delete();
       return response()->json([

        'success' => true
    ], 200);
    }



}
