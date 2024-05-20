<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Lesson extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'status',
        'title',
        'htmlTitle',
        'subtitle',
        'header',
        'summary',
        'body',
        'vimeo_video',
        'vimeo_duration',
        'links',
        'bold',
        'author_id',
        'creator_id',
        'published_at',
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

    public function topics(): BelongsToMany
    {
        return $this->belongsToMany(Topic::class, 'event_instructor_lesson_topic')
            ->using(EventInstructorLessonTopic::class);
    }
}
