<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Lesson;

class LessonController extends Controller
{
    public function __invoke()
    {
        $lessons = Lesson::with('event', 'instructors', 'topics')->get();

        return response()->json([
            'lessons' => $lessons,
        ]);
    }
}
