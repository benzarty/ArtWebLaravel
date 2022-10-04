<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Models\Event;
class EventController extends Controller
{
    public function AddEvent(Request $request)
    {
        $event = new Event();
        $event->place = $request->input('place');
        $event->nameevent =$request->input('nameevent');
        $event->dateajout = $request->input('dateajout');
        $event->datefin = $request->input('datefin');
       
        $event->velo_id =$request->input('velo_id');
        $event->save();
        return response()->json([
            'event' => $event,
            'success' => true
        ], 200);
    }
    public function EditEvent(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->place = $request->input('place');
        $event->nameevent =$request->input('nameevent');
        $event->dateajout = $request->input('dateajout');
        $event->datefin =$request->input('datefin');
        $event->velo_id =$request->input('velo_id');
        $event->save();

        return response()->json([
            'event' => $event,
            'success' => true
        ], 200);
    }
   /* public function getAllEvents()
    { $events =Event::latest()->get();
      //return response()->json($events);
      return view('eventsliste' , compact('events'));
    }*/
    public function index()
    {
        $events = Event::latest()->paginate(5);

        return view('events.eventsliste',compact('events'));
          
    }
    public function destroyEvent($id)
    {
       $event= Event::findOrFail($id);
       $event->delete();
       return response()->json([

        'success' => true
    ], 200);
    }

}
