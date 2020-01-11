<?php

namespace App;

use Illuminate\Support\Facades\Log;

class UserRegistrationLog
{

    public static $time;

    /**
     * Log registration user time.
     *
     * @param  App\User  $user
     */
    public static function log(User $user)
    {
        self::$time = $user->created_at;

        Log::info("Time registration", [
            'name' => $user->name,
            'email' => $user->email,
            'time' => $user->created_at
        ]);
    }
}