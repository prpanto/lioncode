<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Instructor;

class InstructorController extends Controller
{
    public function __invoke()
    {
        $instructors = Instructor::with('events', 'lessons', 'topics')->get();

        return response()->json([
            'instructors' => $instructors,
        ]);
    }
}
