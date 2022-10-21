<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Models\Event;
class EventController extends Controller
{   public function index()
    {
       
    
        $event = Event::all();
        return view ('event.index')->with('event', $event);
    }
    
    public function create()
    {
        return view('event.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Event::create($input);
        return redirect('event')->with('flash_message', 'event Addedd!');  
    }
    
    public function show($id)
    {
        $event = Event::find($id);
        return view('event.show')->with('event', $event);
    }
    
    public function edit($id)
    {
        $event = Event::find($id);
        return view('event.edit')->with('event', $event);
    }
  
    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $input = $request->all();
        $event->update($input);
        return redirect('event')->with('flash_message', 'event Updated!');  
    }
  
    public function destroy($id)
    {
        Event::destroy($id);
        return redirect('event')->with('flash_message', 'Event deleted!');  
    }
    }

