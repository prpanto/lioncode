<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Event;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function __invoke()
    {
        $events = Event::with('users', 'instructors', 'lessons', 'topics')->get();

        return Inertia::render('Events', ['events' => $events]);
    }
}
