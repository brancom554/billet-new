<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventsCategories as Categories;
use App\Models\Event;
use Carbon\Carbon;
use PDF;
use Mail;



class WelcomePagesController extends Controller
{

    protected $kkiapay;

    public function __construct(Request $request)
    {

        
    }
    
    public function firstPage()
    {
        
        $events = Event::with("organiser")->get();
        $incommingEvents = Event::with("organiser")->where('start_date', '>=', \Carbon\Carbon::now()->format('Y-m-d H:i:s'))->where('is_live', '=', 1)->limit(3)->get();
        $eventsCategories = Categories::select('name')->get();
        // $sujet = 'sujet';

        // Mail::send('emailSend', ['papa', 'maman'], function ($message) use ($sujet){
        //     $message->from('kenneth30121995@gmail.com', 'Mon mail');    
        //     $message->to('kenneth30121995@gmail.com')->subject($sujet);

        // });
            
        return view('welcomePages.index', compact(['events','eventsCategories','incommingEvents']));
    }

    public function seeMore()
    {
        $events = Event::with("organiser")->where('start_date', '>=', \Carbon\Carbon::now()->format('Y-m-d H:i:s'))->where('is_live', '=', 1)->paginate(6);

        return view('welcomePages.voirPlus', compact(['events']));
    }

    public function eventsByCategory($name)
    {
        $events = Event::where('category', '=', $name)->where('is_live', '=', 1)->paginate(6);
        return view('welcomePages.eventsByCategory', compact('events'));
    }

    public function eventsDetails($event_id)
    {
   
        $event = Event::where('is_live', '=', 1)->findOrfail($event_id);
        return view('welcomePages.eventDetails', compact('event'));

    }

}
