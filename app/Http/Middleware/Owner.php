<?php

namespace App\Http\Middleware;

use App\Models\Package;
use Closure;


class Owner
{
			/**
				* Handle an incoming request.
				*
				* @param  \Illuminate\Http\Request $request
				* @param  \Closure $next
				* @return mixed
				* @internal param null|string $guard
				*/
    public function handle($request, Closure $next)
    {
       $user= $request->user();
        if($user && $user->hasRole('superAdmin') ){
            return $next($request);
        }

        dd($package=Package::find($request->input('packageId')));
        if ($package->userId==$request->user()->id)
        {
            return $next($request);
        }
        return response(404);

    }

}
