<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2016/8/17
 * Time: 17:46
 */

namespace App\Http\Middleware;
use Closure;
use Auth;
use Route;
class AdminAuthenticate{
    public function handle($request, Closure $next)
    {
        // 检查是否登录
        if(!Auth::check()){
            $returnUrl = $request->getRequestUri();
            return redirect('/auth/login?returnUrl='.$returnUrl);
        }

        $name   = Route::currentRouteName();
        return $next($request);
    }
}

