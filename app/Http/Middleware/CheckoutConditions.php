<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;
use Illuminate\Session\SessionManager;
use App\http\Controllers\Cart;
use Illuminate\Support\Facades\Redirect;
use Closure;
use Illuminate\Http\Request;

class CheckoutConditions
{

    public function handle(Request $request, Closure $next)
    {
       
        $cart = new Cart();
        $cart_info = $cart->get_info();
      
        if($cart_info['items_count']!=0){

            if (session()->has('customer_loggedin') && session()->has('login_userid')) {
            
                    return redirect()->route('checkout');
            }
            else{
             return redirect()->route('login'); // Redirect to login page if not authenticated
            }
        }
        else{
            $error = "empty_Cart";
         //   return Redirect::back()->withErrors($error);
            return redirect()->route('home')->withErrors($error);
        }
        
       
    }
    
}
