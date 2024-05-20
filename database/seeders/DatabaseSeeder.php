<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Event;
use App\Models\Topic;
use App\Models\Lesson;
use App\Models\Company;
use App\Models\EventInstructorLessonTopic;
use App\Models\EventUser;
use App\Models\Instructor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        User::factory()->create([
            'name' => 'Test',
            'email' => 'test@example.com',
        ]);

        User::factory(10)->create();
        Company::factory(1000)->create();
        Event::factory(1000)->create();
        Instructor::factory(1000)->create();
        Lesson::factory(1000)->create();
        Topic::factory(1000)->create();
    }
}
