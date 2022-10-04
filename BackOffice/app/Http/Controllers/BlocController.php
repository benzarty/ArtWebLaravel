<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bloc;

class BlocController extends Controller
{
    public function index()
    {
        $bloc = Bloc::all();
        return view ('bloc.index')->with('bloc', $bloc);
    }
    
    public function create()
    {
        return view('bloc.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Bloc::create($input);
        return redirect('bloc')->with('flash_message', 'Blog Addedd!');  
    }
    
    public function show($id)
    {
        $bloc = Bloc::find($id);
        return view('bloc.show')->with('bloc', $bloc);
    }
    
    public function edit($id)
    {
        $bloc = Bloc::find($id);
        return view('bloc.edit')->with('bloc', $bloc);
    }
  
    public function update(Request $request, $id)
    {
        $bloc = Bloc::find($id);
        $input = $request->all();
        $bloc->update($input);
        return redirect('bloc')->with('flash_message', 'Blog Updated!');  
    }
  
    public function destroy($id)
    {
        Bloc::destroy($id);
        return redirect('bloc')->with('flash_message', 'Blog deleted!');  
    }
}