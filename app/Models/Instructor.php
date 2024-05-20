<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Instructor extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'priority',
        'status',
        'comment_status',
        'title',
        'short_title',
        'subtitle',
        'header',
        'company',
        'summary',
        'body',
        'ext_url',
        'social_media',
        'author_id',
        'creator_id',
    ];

    public function events(): BelongsToMany
    {
        return $this->belongsToMany(Event::class, 'event_instructor_lesson_topic', 'event_id')
            ->using(EventInstructorLessonTopic::class);
    }

    public function lessons(): BelongsToMany
    {
        return $this->belongsToMany(Lesson::class, 'event_instructor_lesson_topic', 'lesson_id')
            ->using(EventInstructorLessonTopic::class);
    }

    public function topics(): BelongsToMany
    {
        return $this->belongsToMany(Topic::class, 'event_instructor_lesson_topic', 'topic_id')
            ->using(EventInstructorLessonTopic::class);
    }
}
