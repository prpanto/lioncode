<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Lesson;
use App\Http\Controllers\Controller;

class LessonController extends Controller
{
    public function __invoke()
    {
        $lessons = Lesson::with('events', 'instructors', 'topics')->get();

        return Inertia::render('Lessons', ['lessons' => $lessons]);
    }
}
