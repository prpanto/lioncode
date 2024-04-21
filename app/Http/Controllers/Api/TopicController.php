<?php

namespace App\Http\Controllers\Api;

use App\Models\Topic;
use App\Http\Controllers\Controller;

class TopicController extends Controller
{
    public function __invoke()
    {
        $topics = Topic::with('event', 'instructors', 'lessons')->get();

        return response()->json([
            'topics' => $topics,
        ]);
    }
}
