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
        return $this->belongsToMany(User::class, 'event_topic_lesson_instructor', 'event_id', 'lesson_id');
    }

    public function instructors(): BelongsToMany
    {
        return $this->belongsToMany(Instructor::class, 'event_topic_lesson_instructor', 'instructor_id', 'lesson_id');
    }

    public function topics(): BelongsToMany
    {
        return $this->belongsToMany(Topic::class, 'event_topic_lesson_instructor', 'topic_id', 'lesson_id');
    }
}
