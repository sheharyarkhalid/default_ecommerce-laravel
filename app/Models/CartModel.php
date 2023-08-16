<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartModel extends Model
{
   
    protected $table = 'cart';
    protected $fillable = ['product_id', 'quantity'];
    
    
    public function __construct(){
        
    }
    

}