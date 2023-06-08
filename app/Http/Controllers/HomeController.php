<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __invoke()
    {

        $events = \App\Models\Event::orderBy('created_at', 'desc')->paginate(8);

        return view('home', [
            'events' => $events
        ]);
    }
}
