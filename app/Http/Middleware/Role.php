<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string  $roles
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, $roles): Response
    {
        if (!Auth::check()) {
            logger()->info('User not authenticated');
            abort(403, 'Belum Mempunyai account');
        }

        $roles = explode('|', $roles);
        $user = Auth::user();

        // Debugging: Check the user and method
        logger()->info('Authenticated user:', ['user' => $user]);
        logger()->info('Checking roles:', ['roles' => $roles]);

        if (method_exists($user, 'hasRole')) {
            logger()->info('hasRole method exists on user model');
            foreach ($roles as $role) {
                logger()->info('Checking role:', ['role' => $role]);
                if ($user->hasRole($role)) {
                    logger()->info('Role matched:', ['role' => $role]);
                    return $next($request);
                }
            }
            logger()->info('No matching role found for user');
        } else {
            logger()->error('Method hasRole does not exist on user model.');
        }

        return redirect('/');
    }
}
