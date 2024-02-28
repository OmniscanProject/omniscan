<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;


class Authenticate extends Middleware
{

    protected $guards;

    public function handle($request, Closure $next, ...$guards)
    {
        $this->guards = $guards;

        return parent::handle($request, $next, ...$guards);
    }

       /**
        * Get the path the user should be redirected to when they are not authenticated.
        *
        * @param  \Illuminate\Http\Request $request
        * @return string|null
        */
    protected function redirectTo($request)
    {
        // dd($request->isJson());
        if (! $request->expectsJson()) {
            if (Arr::first($this->guards) === 'admin') {
                return route('admin.login');
            }

            return route('login');
        }
    }

    // /**
    //  * Get the path the user should be redirected to when they are not authenticated.
    //  */
    // protected function redirectTo(Request $request): ?string
    // {
    //     if (!$request->expectsJson()) {
    //         if (Auth) {
    //             return route('login');
    //         }
    //         else if (/* visitor tried to access an admin guard protected route */) {
    //             return route('admin.login');
    //         }
    //     }
    //     return $request->expectsJson() ? null : route('login');
    // }
}
