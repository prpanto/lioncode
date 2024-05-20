<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Event extends Model
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
        'published',
        'release_date_files',
        'expiration',
        'title',
        'htmlTitle',
        'subtitle',
        'header',
        'summary',
        'body',
        'hours',
        'absences_limit',
        'enroll',
        'index',
        'feed',
        'certificate_title',
        'fb_group',
        'evaluate_topics',
        'evaluate_instructors',
        'fb_testimonial',
        'author_id',
        'creator_id',
        'view_tpl',
        'view_counter',
        'published_at',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'event_user')
            ->using(EventUser::class);
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

    public function topics(): BelongsToMany
    {
        return $this->belongsToMany(Topic::class, 'event_instructor_lesson_topic')
            ->using(EventInstructorLessonTopic::class);
    }
}
