<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): string|null
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        if ($request->user()->tokens ?? null) {
            $userToken = $request->user()->tokens[count($request->user()->tokens) - 1];
            $tokenID = (string) $userToken->id;
            $token = (string) $userToken->token;

            // $user = $request->user()
            //     ? array_merge($request->user()->toArray(), ['token' => "{$tokenID}|{$token}"])
            //     : null;
        }

        return [
            ...parent::share($request),
            'auth' => [
                'user' => $request->user()
            ],
        ];
    }
}
