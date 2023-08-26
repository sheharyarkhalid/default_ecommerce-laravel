<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Session\SessionManager;



use App\Http\Controllers\Theme;
use App\Http\Controllers\Cart;
// Models
use App\Models\ProductsModel;
use App\Models\CategoriesModel;
use App\Models\CartModel;
use App\Models\OrdersModel;
use App\Models\UserModel;

class Checkout extends Controller
{
    public $order_model = '';
    public $cart = '';
    
    public function __construct(){
        
        $this->cart_controller = new Cart();
        $this->order_model = new OrdersModel();
        
    }
    
    public function place_order(Request $request){
        
        // dd($request);
        $user_info = $request->input("user_info");
        $payment_info = $request->input("payment_info");
        
        $cart = $this->cart_controller->get_data();
        
        $this->order_model->create_order($user_info,$payment_info,$cart);
        
        
    }
    public function change_order_type(Request $request){
        
        $order_type = $request->input('order_type');
        
        
        // $order_type=$this->invert_order_type($req_order_type);
       
        $order_type = $order_type != false ? $order_type : "delivery";
        
        
        session()->put('order_type',  $order_type);
        
        echo json_encode(
            array(
                "type"=>$order_type
            ),
            true
        );
         
    }
    
}