<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class Eventscontroller extends Controller
{
    public function index(){
        return view('index');
    }

    public function event(){
        return view('events.event');
    }
    public function liste_event(){
        $events = Event::all(); 
        return view('events.liste',compact('events'));
    }
    public function edit_event($id){
        $events = Event::find($id);
        return view('events.edit',compact('events'));
    }
    public function destroy($id){
        event::destroy($id);
        return redirect()->route('liste_event');
    }

    public function sendevent(Request $request){
        $request->validate([
            'title'=>'required|min:3',
            'description'=>'required|min:3',
            'start_date'=>'required|date',
            'end_date'=>'required|date',
            'price'=>'required'
        ]);

        $ev = new Event();
        $ev ->title = $request->title;
        $ev ->description =$request->description;
        $ev->start_date = $request->start_date;
        $ev->end_date = $request ->end_date ;
        $ev->price = $request ->price;

        $ev -> save();
        return redirect()->route('index');


    }
    public function update_event(Request $request,$id){
        $request->validate([
            'title'=>'required|min:3',
            'description'=>'required|min:3',
            'start_date'=>'required|date',
            'end_date'=>'required|date',
            'price'=>'required'
        ]);
        $ev = Event::findOrFail($id);
        $ev ->title = $request->title;
        $ev ->description =$request->description;
        $ev->start_date = $request->start_date;
        $ev->end_date = $request ->end_date ;
        $ev->price = $request ->price;

        return redirect ()-> route('liste_event');
    }
}
