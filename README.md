## Summary

This is a project to sharpen my skills in Laravel. It was a great experience and enjoy the journey of the coding. This project is a simple API and SPA witch show some details about companies, events, instructors, lessons and topics.

#### Why I use Inertia?

Inertia.js is excellent project because bridge Vue.js and Laravel and create a SPA application. With Inertia you avoid all the headache from Vue Spa in Laravel. The experience with Inertia is in another level because make the work more easily for a developer.

#### How can improve this project.

1. Update to laravel 11.
2. Use FormRequest on the validation request.
3. Change the frontend UI on the project.
4. Dark mode
5. Add factories and seeders to the event, instructor, lesson and topic table.
6. Add the funtionality to the user to add, edit and delete data from the tables on the spa and api.

## Build With

1. Laravel
2. Inertia.js
3. Vue.js
4. TailwindCSS

## Installation

1. `git clone https://github.com/prpanto/lioncode`
2. `composer install`
3. `cp .env.example .env`
4. Set database configs on `.env` file
5. `php artisan migrate --seed`
6. `npm i & npm run dev`

## Usage

#### API

1. Login the user on the `example.test/api/login` endpoint
2. Get the token from the login endpoint and use it on the 'example.test/api/companies' as the authentication bearer to get all the companies data
3. Get the data from the events from `example.test/api/events`
4. Get the data from the instructors from `example.test/api/instructors`
5. Get the data from the lessons from `example.test/api/lessons`
6. Get the data from the topics from `example.test/api/topics`

`*example.test is your development domain name`

#### SPA

You can visit the your development domain name like `example.test`. Press login or register, after the success of login or register redirect to the dashboard. You can visit the companies, events, instructors, lessons and topics to see all the data.

![Login Screenshot](/screenshot_1.png)
![Companies Screenshot](/screenshot_2.png)

## License

[MIT](./LICENSE)
