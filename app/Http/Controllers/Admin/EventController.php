<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        // $events = Event::orderBy('created_at', 'desc')->paginate(10);
        $events = Event::all();

        return view('admin.event.index', [
            'events' => $events
        ]);
    }

    public function create()
    {
        return view('admin.event.form', [
            'event' => new Event()
        ]);
    }

    public function edit(Event $event)
    {

        return view('admin.event.form', [
            'event' => $event
        ]);
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('admin.events.index');
    }



}
