<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Http\Controllers\Theme;

use App\Models\ProductsModel;



class GlobalFormat extends Controller
{
    
    public function format_products($products) {
        $data = array();
      
        
        foreach($products as $key => $product){
            $currency = env("G_CURRENCY");
         
            $data[$key]['id'] = $product->product_id;
        $data[$key]['name'] = $product->product_name;
        $data[$key]['slug'] = $product->product_slug;
        $data[$key]['desc'] = html_entity_decode($product->product_desc);
        
        
        $data[$key]['price'] = $currency.number_format($product->product_price);
        $data[$key]['price_float'] = $product->product_price;
        
        
        $data[$key]['discount'] = $product->product_discount;
        
        
        $data[$key]['discounted_price'] = $product->product_price - $product->product_discount;
        $data[$key]['discounted_price'] = $currency.$data[$key]['discounted_price'];
        $data[$key]['discounted_price_float'] = $product->product_price - $product->product_discount;
        
        $percentage = ( $product->product_discount / $product->product_price ) * 100;
        $data[$key]['discounted_percentage'] = $percentage;
        $data[$key]['pro_card_des'] = strip_tags(html_entity_decode($product->product_desc));
    
       
        }
        
        return $data;
        
    }
    
      public function format_product($product) {
        $data = array();
      
        $key = 0;
    
        $currency = env("G_CURRENCY");
        $data[$key]['id'] = $product->product_id;
        $data[$key]['name'] = $product->product_name;
        $data[$key]['slug'] = $product->product_slug;
        $data[$key]['desc'] = html_entity_decode($product->product_desc);
        
        
        $data[$key]['price'] = $currency.number_format($product->product_price);
        $data[$key]['price_float'] = $product->product_price;
        
        
        $data[$key]['discount'] = $product->product_discount;
        
        
        $data[$key]['discounted_price'] = $product->product_price - $product->product_discount;
        $data[$key]['discounted_price'] = $currency.$data[$key]['discounted_price'];
        $data[$key]['discounted_price_float'] = $product->product_price - $product->product_discount;
        
        $percentage = ( $product->product_discount / $product->product_price ) * 100;
        $data[$key]['discounted_percentage'] = $percentage;
        $data[$key]['pro_card_des'] = strip_tags(html_entity_decode($product->product_desc));
    
        
        return $data;
        
    }
    
    
    public function format_slugs($requested_slug) {
        
        
        
    }
    
    
}
  