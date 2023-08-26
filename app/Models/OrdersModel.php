<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CategoriesModel;
use Illuminate\Support\Facades\DB;
class OrdersModel extends Model
{
   
    protected $table = 'orders';
    
    public function __construct(){
        
    }
    
    // Function to retrieve all records from the database table
    
    public function get_all(  ){
        return self::all();
      
    }
   
    
    public function generate_unique_order_id(){
        
        $maxOrderId = $this->max('order_id');
        
        if ($maxOrderId === null) {
            $maxOrderId = 1; // Set to 1 by default if there's no data
        } else {
            $maxOrderId++;
            
        }
        return $maxOrderId;
    }
    public function create_order($user_info, $payment_info, $cart  ){
        
        $order_id = $this->generate_unique_order_id();
        
        $user_id = session('login_userid');
        
        $status = 'pending';
        
        $created_at = date("Y-m-d h:i:s");
        
        DB::statement("
            INSERT INTO 
                orders 
                (
                    user_id,
                    order_id,
                    status,
                    order_info_id,
                    created_at
                )
                VALUES
                (
                    $user_id,
                    $order_id,
                    '$status',
                    1,
                    '$created_at'
                )
            
        ");
        
        $this->add_order_items($order_id, $cart);
        
        echo 'success';
        
    }
    public function add_order_items($order_id, $cart){
        
        $created_at = date("Y-m-d h:i:s");
        // dd($cart);
        foreach ($cart as $key => $cart_item){
            $item_id = $this->generate_unique_order_item_id();
        
        
            $qty = $cart_item['quantity'];
            
            $product = $cart_item['product'][0];
            
            $product_id = $product['id'];
            
            $price = $product['price_float'];
            $discount = $product['discounted_price_float'];
            
            $total_price = $qty * $product['price_float'];
            $total_discount = $qty *  $product['discounted_price_float'];
            
            if($product['discount']!=0){
                $item_subtotal = $qty *  $product['discounted_price_float'];
                
            } else {
                $item_subtotal = $qty *  $product['price_float'];
            }
            
            
            
            
            DB::statement("
                INSERT INTO 
                    order_items
                    (
                        item_id,
                        order_id,
                        product_id,
                        qty,
                        
                        actual_unit_price,
                        actual_unit_discount,
                        
                        total_price,
                        total_discount,
                        item_subtotal,
                        created_at
                    )
                    VALUES
                    (
                        $item_id,
                        $order_id,
                        $product_id,
                        $qty,
                        
                        $price,
                        $discount,
                        
                        $total_price,
                        $total_discount,
                        $item_subtotal,
                        '$created_at'
                    )
                
            ");
        }
        
    }
    public function generate_unique_order_item_id(){
        $item_id = DB::select("SELECT MAX(order_id)  AS max_order_id FROM order_items");
        $item_id = $item_id[0]->max_order_id;
        if ($item_id === null) {
            $item_id = 1; // Set to 1 by default if there's no data
        } else {
            // dd($item_id);
            
            $item_id++;
        }
        return $item_id;
        
    }
  
}