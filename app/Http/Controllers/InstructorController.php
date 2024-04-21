<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Instructor;
use App\Http\Controllers\Controller;

class InstructorController extends Controller
{
    public function __invoke()
    {
        $instructors = Instructor::with('events', 'lessons', 'topics')->get();

        return Inertia::render('Instructors', ['instructors' => $instructors]);
    }
}
