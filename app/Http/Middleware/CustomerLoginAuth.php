<?php 
namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;
use Illuminate\Session\SessionManager;


use Closure;

class CustomerLoginAuth
{
    public function handle($request, Closure $next)
    {
        // Check if your custom session variable exists and indicates authentication
        if (session()->has('customer_loggedin') && session()->has('login_userid')) {
            
            if($_SERVER['REQUEST_URI']=="/login"){
                return redirect()->route('checkout');
            }
            return $next($request);
        }

        return redirect()->route('login'); // Redirect to login page if not authenticated
    }
}