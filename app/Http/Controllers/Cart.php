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
use App\Http\Controllers\Website;
// Models
use App\Models\ProductsModel;
use App\Models\CategoriesModel;
use App\Models\CartModel;

class Cart extends Controller
{
    public $theme = '';
    public $products_model = '';
    public $categories_model = '';
    public $global_formatter = '';
    // public $website = '';
    
    
    public function __construct(){
        $this->theme = "themes.".env('CURRENT_THEME').".";
        
        $this->products_model = new ProductsModel();
        $this->categories_model = new CategoriesModel();
    
        
        $this->global_formatter = new GlobalFormat();
       
    }
    
    public function add(Request $request)
    {          
        // dd(session("session_userid"));
        // die;
        
        // dd($_SESSION);
        // echo $_SESSION['session_userid'];
        // die;
        $productId = $request->input('product_id');
        $quantity =  $request->input('quantity');
        
        $product = ProductsModel::find($productId);
        
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        $results = DB::select("SELECT * FROM cart WHERE session_userid = ".session('session_userid')." AND product_id = ". $productId);
        
        if(count($results)  == 0 ){
         
            DB::insert("INSERT INTO cart (product_id, quantity, session_userid, created_at) VALUES (".$productId.", ".$quantity.", ".session('session_userid').", '".date('Y-m-d h:i:s')."' ) ");

            
        } else {
            
            DB::statement("UPDATE  cart SET  quantity = quantity + ".$quantity." WHERE product_id = ".$productId." AND session_userid = '".session('session_userid')."' ");

        }
       
        
        // echo '<pre>';
        $cart = $this->get_data();
        $cart_info = $this->get_info();
        $data = array(
            "currency"=> env('G_CURRENCY'),
            "cart"=>$cart,
            "cart_info" => $cart_info
        );
        
        
        $cart_template =  view('include.cartData',$data )->render();
        $ret = array(
            "message"=> "Item(s) added in the Cart",
            "type"=>"success",
            "html"=> $cart_template,
            "cart_info"=> $cart_info,
        );
        
        echo json_encode($ret, true);
        
         
    }
    public function get_data(){
        $cart_products  = DB::select("SELECT * FROM cart WHERE session_userid = ".session('session_userid'));
        $cart = array();

        foreach($cart_products as $c_product){
            
            $product = ProductsModel::find($c_product->product_id);
            $product = $this->global_formatter->format_product($product);
            $temp = array(
                "product"=>$product,
                "quantity"=>$c_product->quantity
            );
            array_push($cart, $temp);
            
        }
                // dd($cart);
                // die;
        return $cart; 
    }
    public function get_info(){
         // dd($cart);
        $cart = $this->get_data();
        $currency = env("G_CURRENCY");
        $cart_total = 0;
        $subtotal = 0;
        $discounted_total = 0;
        $items_count = 0;
        $qty_count=0;
        foreach($cart as $cart_item){
            $items_count++;
            $qty_count +=$cart_item['quantity'];
            $product = $cart_item['product'][0];
            $subtotal += $cart_item['quantity']*$product['price_float'];
            
            if($product['discount']!=0){
                $cart_total += $cart_item['quantity']*$product['discounted_price_float'];
                $discounted_total += $cart_item['quantity']*$product['discounted_price_float'];
            } else {
                $cart_total += $cart_item['quantity']*$product['price_float'];
                
            }
            
        }
        $cart_info = array(
            "total"=> $currency.$cart_total,
            "subtotal"=>$currency.$subtotal,
            "discount_total"=> $currency.$discounted_total,
            "discount_float"=>$discounted_total,
            "items_count"=> $items_count,
            "qty_count"=>$qty_count
            
        );
        return $cart_info;
    }
    public function item_decrease_qty(Request $request) {
       
        $productId = $request->input('product_id');
        
        $results = DB::select("SELECT * FROM cart WHERE session_userid = ".session('session_userid')." AND product_id = ". $productId);
        $quantity = optional($results[0])->quantity; 
        if($quantity  == 1 ){
           DB::statement("DELETE FROM cart  WHERE product_id = ".$productId." AND session_userid = '".session('session_userid')."' ");
        }else {
            DB::statement("UPDATE  cart SET  quantity = quantity - 1 WHERE product_id = ".$productId." AND session_userid = '".session('session_userid')."' ");
        }
        
        $cart = $this->get_data();
        $cart_info = $this->get_info();
        
        $data = array(
            "cart"=>$cart,
            "cart_info" => $cart_info,
            "currency" => env("G_CURRENCY"),
            "categories_links" => array("hello"),
        );
         
        $cart_page_template =  view('include.cartData',$data )->render();
        
         $ret = array(
            "message"=> "Cart Updated",
            "type"=>"success",
            "html"=> $cart_page_template,
            "cart_info"=> $cart_info,
        );
        
        echo json_encode($ret, true);
        // echo $cart_page_template;
        
                
        
    }
     public function item_increase_qty(Request $request) {
       
        $productId = $request->input('product_id');
        
           
           DB::statement("UPDATE  cart SET  quantity = quantity + 1 WHERE product_id = ".$productId." AND session_userid = '".session('session_userid')."' ");
            
        $cart = $this->get_data();
        $cart_info = $this->get_info();
        // $categories_links = $this->website->categories_links();
        $data = array(
            "cart"=>$cart,
            "cart_info" => $cart_info,
            "currency" => env("G_CURRENCY")
        );
         
        // $flying_cart_template =  view($this->theme.'cart.flying_cart',$data )->render();
        $cart_page_template =  view('include.cartData',$data )->render();
        $ret = array(
            "message"=> "Cart Updated",
            "type"=>"success",
            "html"=> $cart_page_template,
            "cart_info"=> $cart_info,
        );
        
        echo json_encode($ret, true);
        
        // echo $cart_page_template;
        
        
    }
      public function remove_item(Request $request) {
       
        $productId = $request->input('product_id');
        
        DB::statement("DELETE FROM cart  WHERE product_id = ".$productId." AND session_userid = '".session('session_userid')."' ");
         
        $cart = $this->get_data();
        $cart_info = $this->get_info();
        // $categories_links = $this->website->categories_links();
        $data = array(
            "cart"=>$cart,
            "cart_info" => $cart_info,
            "currency" => env("G_CURRENCY"),
            "categories_links" => array("hello"),
        );
         
        // $flying_cart_template =  view($this->theme.'cart.flying_cart',$data )->render();
        $cart_page_template =  view('include.cartData',$data )->render();
        
        $ret = array(
            "message"=> "Cart Updated",
            "type"=>"success",
            "html"=> $cart_page_template,
            "cart_info"=> $cart_info,
        );
        
        echo json_encode($ret, true);
        // echo $cart_page_template;
        
                
        
    }
}