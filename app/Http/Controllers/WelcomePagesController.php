<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventsCategories as Categories;
use App\Models\Event;



class WelcomePagesController extends Controller
{
    
    public function firstPage()
    {
        $events = Event::with(["organiser"])->get();
        $eventsCategories = Categories::select('name')->get();
        return view('welcomePages.index', compact(['events','eventsCategories']));
    }

    public function eventsByCategory($name)
    {
        $events = Event::where('category', '=', $name)->get();
        return view('welcomePages.eventsByCategory', compact('events'));
    }

    public function eventsDetails($event_id)
    {
        $event = Event::findOrfail($event_id);
        return view('welcomePages.eventDetails', compact('event'));
    }
}
