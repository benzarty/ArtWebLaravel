<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Models\Event;
class EventController extends Controller
{   public function index()
    {
        $events = Event::latest()->paginate(5);

        return view('events.index',compact('events'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
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
            'nameevent' => 'required',
            'dateajout' => 'required',
            'datefin' => 'required',
            'velo_id' => 'required',

        ]);

        Event::create($request->all());

        return redirect()->route('events.index')
                        ->with('success','event created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('events.show',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('events.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'type' => 'required',
            'nameevent' => 'required',
            'dateajout' => 'required',
            'datefin' => 'required',
            'velo_id' => 'required',
        ]);

        $event->update($request->all());

        return redirect()->route('events.index')
                        ->with('success','event updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('events.index')
                        ->with('success','event deleted successfully');
    }



}
   /* public function AddEvent(Request $request)
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
   /* public function index()
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
    public function store(Request $request)
    {
        $request->validate([
            'place' => 'required',
            'nameevent' => 'required',
            'dateajout' => 'required',
            'datefin' => 'required',
            'velo_id' => 'required',

        ]);

        Event::create($request->all());

        return redirect()->route('velos.index')
                        ->with('success','event created successfully.');
    }
*/

