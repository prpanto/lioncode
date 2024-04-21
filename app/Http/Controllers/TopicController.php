<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Topic;
use App\Http\Controllers\Controller;

class TopicController extends Controller
{
    public function __invoke()
    {
        $topics = Topic::with('events', 'instructors', 'lessons')->get();

        return Inertia::render('Topics', ['topics' => $topics]);
    }
}
