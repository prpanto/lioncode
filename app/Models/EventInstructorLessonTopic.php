<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class EventInstructorLessonTopic extends Pivot
{
    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class, 'event_instructor_lesson_topic', 'event_id');
    }

    public function instructor(): BelongsTo
    {
        return $this->belongsTo(Instructor::class, 'event_instructor_lesson_topic', 'instructor_id');
    }

    public function lesson(): BelongsTo
    {
        return $this->belongsTo(Lesson::class, 'event_instructor_lesson_topic', 'lesson_id');
    }

    public function topic(): BelongsTo
    {
        return $this->belongsTo(Topic::class, 'event_instructor_lesson_topic', 'topic_id');
    }
}
