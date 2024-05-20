<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Topic extends Model
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
        'summary',
        'body',
        'author_id',
        'creator_id',
        'email_template',
    ];

    public function events(): BelongsToMany
    {
        return $this->belongsToMany(Event::class, 'event_instructor_lesson_topic')
            ->using(EventInstructorLessonTopic::class);
    }

    public function instructors(): BelongsToMany
    {
        return $this->belongsToMany(Instructor::class, 'event_instructor_lesson_topic')
            ->using(EventInstructorLessonTopic::class);
    }

    public function lessons(): BelongsToMany
    {
        return $this->belongsToMany(Lesson::class, 'event_instructor_lesson_topic')
            ->using(EventInstructorLessonTopic::class);
    }
}
