<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Session\SessionManager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Crypt;

// Controllers
use App\Http\Controllers\Theme;
use App\Http\Controllers\GlobalFormat;
use App\Http\Controllers\CustomerSession;
use App\Http\Controllers\Settings;
// Models
use App\Models\ProductsModel;
use App\Models\CategoriesModel;
use App\Models\UserModel;


class Website extends Controller
{

     
    public $theme = '';
    public $products_model = '';
    public $categories_model = '';
    public $global_formatter = '';
    public $user_model;
    
    
    public function __construct(){
        
        // session_start();
        
        $this->theme = "themes.".env('CURRENT_THEME').".";
        
        $this->products_model = new ProductsModel();
        $this->categories_model = new CategoriesModel();
        $this->settings = new Settings();
        $this->customersession = new CustomerSession();
        $this->global_formatter = new GlobalFormat();
        $this->user_model = new UserModel();
        
        $this->cart = new Cart();

   

        if ( session()->has('session_userid') ) {
            
        } else {
        
            $this->customersession->create_temp_user();
        }
        
    }
    public function get_item_count(){

        $cart_info = $this->cart->get_info();

        $items_count=$cart_info['items_count'];
       
        if($items_count!=0){

            if (session()->has('customer_loggedin') && session()->has('login_userid')) {
                $data = array(
                    "redirect"=>'checkout'
                ); 
                
            }else{
                $data = array(
                    "redirect"=>'login'
                ); 
            }
        }
        else{
            $data = array(
                "error"=>'true'
            ); 
          
        }
          echo json_encode($data, true);
       
    }
    
    public function index()
    {   

        
        if($this->settings->shop_layout=="tab_menu"){
            
            $products = $this->get_tabbed_products();
            
        } else {
             $products = $this->products_model->get_all();
            $formatted_products = $this->global_formatter->format_products($products);
        }
                 
        
        $cart = $this->cart->get_data();
        $cart_info = $this->cart->get_info();
        
        $data = array(
            "products"=> isset($formatted_products) ? $formatted_products : $products,
            "currency"=>'PKR',
             "cart"=>$cart,
            "cart_info"=>$cart_info
        );
        
        
        return view('home' , $data);
    }
    
    public function get_tabbed_products(){
        
        $data = array();
        
        $categories = DB::select("SELECT * FROM categories, products WHERE products.cat_id = categories.cat_id  ORDER BY categories.cat_name ASC");
        
        foreach ($categories as $category ){
            
            $products = DB::select("SELECT * FROM products WHERE cat_id = ".$category->cat_id." ORDER BY product_name ASC");
            $formatted_products = $this->global_formatter->format_products($products);
            $data[ $category->cat_slug ]['cat_products'] = $formatted_products;
            $data[ $category->cat_slug ]['info'] = $category;
        }
        
        // dd($data);
        return $data;
        
        
        
        
        
    }
    public function shop($category_slug = ''){
        
        
        // dd(session("session_userid"));
        // die;
        // echo $this->settings->shop_layout;
        
        if($category_slug == ""){
            
            if($this->settings->shop_layout=="tab_menu"){
                
                $products = $this->get_tabbed_products();
                
            } else {
                $products = $this->products_model->get_all();    
            }
            
        } else {
            
            if($this->settings->shop_layout=="tab_menu"){
             
                $products = $this->get_tabbed_products();
                
            } else {
             
                $products = $this->products_model->get_by_category($category_slug);
            }
        }
        // dd($products);
        
        $categories_links = $this->categories_links(); 
        if($this->settings->shop_layout!="tab_menu"){
            $formatted_products = $this->global_formatter->format_products($products);
        }
        
        $cart = $this->cart->get_data();
        $cart_info = $this->cart->get_info();
        
        $data = array(
            "products" => isset($formatted_products) ? $formatted_products : $products ,
            "ui" => array(
                "grid_layout"=>"horizontal",
            ),
            "currency" =>env("G_CURRENCY"),
            "categories_links" => $categories_links,
            "cart"=>$cart,
            "cart_info"=>$cart_info
        );
        
        return view('shop', $data);
    }
    
    public function single_product($product_url){
        
        
        
        $product_url_array = explode("-", $product_url) ;
        $product_id = end($product_url_array);
        // echo $product_id;
        $product = ProductsModel::find($product_id);
        // echo $product->cat_id;
        // $category = CategoriesModel::where("cat_id", $product->cat_id)->first();
        
        $category =  DB::select("SELECT * FROM categories WHERE cat_id =".$product->cat_id." LIMIT 1 ");
        
        if($product_url == "" || !$product ) {
            return redirect()->back()->with('error', 'Product not found.');
        }
       
        $product = $this->global_formatter->format_product($product);
        
        // UPDATE URL Slug 
        $slug = $product[0]['slug'];
        if($slug."-".$product_id != $product_url ){
            return redirect("/product/".$slug."-".$product_id);
        }
        
        
        $categories_links = $this->categories_links(); 
        
        $cart = $this->cart->get_data();
        $cart_info = $this->cart->get_info();
        
        $data = array(
            "product_info" => $product[0],
            "category_info" => $category[0],
            "ui" => array(
                "grid_layout"=>"horizontal",
            ),
            "currency" =>env("G_CURRENCY"),
            "categories_links" => $categories_links,
            "cart"=>$cart,
            "cart_info"=>$cart_info
        );
        
        return view('detailPage', $data);
        
        
        
    }
    public function get_product_popup(Request $request){
        $product_id = $request->input('product_id');
        // echo $product_id;
        $product = ProductsModel::find($product_id);
        // echo $product->cat_id;
        // $category = CategoriesModel::where("cat_id", $product->cat_id)->first();
        
        $category =  DB::select("SELECT * FROM categories WHERE cat_id =".$product->cat_id." LIMIT 1 ");
        
        if(!$product ) {
            echo json_encode( 
                array("error"=>"Product Not Found"),
                true
            );
            exit;
        }
       
        $product = $this->global_formatter->format_product($product);
        
        $categories_links = $this->categories_links(); 
        
        $cart = $this->cart->get_data();
        $cart_info = $this->cart->get_info();
        $data = array(
            "product_info" => $product[0],
            "category_info" => $category[0],
            "currency" =>env("G_CURRENCY"),
            "categories_links" => $categories_links,
            "cart"=>$cart,
            "cart_info"=>$cart_info
        );
        
        $detail_page_popup_html =  view('include/productDetails', $data)->render();
        
        echo json_encode(
            array(
                "html"=>$detail_page_popup_html
            ),
            true
        );
        exit;
        
    }
    public function cart(){
        $categories_links = $this->categories_links(); 
        $cart = $this->cart->get_data();
        $cart_info = $this->cart->get_info();
        $data = array(
          
            "currency" => env("G_CURRENCY"),
            "categories_links" => $categories_links,
            "cart"=>$cart,
            "cart_info"=>$cart_info
        );
        
        return view('cart.cart_page', $data);
        
        
        
        
    }
    
    public function checkout(){
        
        $cart = $this->cart->get_data();
        $cart_info = $this->cart->get_info();
        
        $data = array(
            "currency" =>env("G_CURRENCY"),
            "cart"=>$cart,
            "cart_info"=>$cart_info
        );
        // dd(session()->all());
        return view('checkout.checkoutPage', $data);
    }
    
    
    public function login(){
        // echo Crypt::encrypt("1234");
        // die;
        $categories_links = $this->categories_links(); 
        $cart = $this->cart->get_data();
        $cart_info = $this->cart->get_info();
        $data = array(
           
            "currency" => env("G_CURRENCY"),
            "categories_links" => $categories_links,
            "cart"=>$cart,
            "cart_info"=>$cart_info
        );
        return view('checkout.accountPage', $data);
    }
    
    
    public function login_auth(Request $request){
        // dd($request);
        // die;
        $email = DB::connection()->escape($request->input('user_email'));
        $password = $request->input('password');
        
        $user = DB::select("SELECT * FROM users WHERE user_email = $email LIMIT 1 ");
        
        //  If user exists 
        if (count($user)!=0) {
            $user_info = $this->user_model->get_user($email);
            $user_password_hash = $user_info->password; 
            
            
            // Decrypt User's saved password
            $decrypted_pass = Crypt::decrypt($user_password_hash);

            if ( $password == $decrypted_pass ) {
                
                $user = $user[0];
                
                session()->put('login_userid',  $user->user_id);
                session()->put('customer_loggedin',  1);
                
                if(session('session_userid') != $user->user_id){
                    
                    // echo 'different user';
                    $this->customersession->cart_shift_to_loggedin_user($user->user_id);
                    // session::forget("session_userid");
                    
                } else { 
                }
                
                return redirect("/checkout");
                
            } else {
                $error = "Incorrect Password";
                return Redirect::back()->withErrors($error);
            }
            die;
        } else {
           $error = "This User doesn't exists";
            return Redirect::back()->withErrors($error);
        }
        
         
        return redirect()->route('checkout');
    }

    public function categories_links(){
        $categories = $this->categories_model->get_all();
        $data = array();
        
         foreach($categories as $key => $category){
            
            $data[$key]['name'] = $category->cat_name;
            $data[$key]['url'] = "/shop/".$category->cat_slug;
            
        }
        return $data;
        
    }
    public function ordering_calculations(){
        $calculations = array();
        $cart = $this->cart->get_data();
        
        // $calculations['cart_info'] = 
        
    }
    
}
