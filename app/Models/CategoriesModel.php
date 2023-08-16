<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CategoriesModel;
class CategoriesModel extends Model
{
   
    protected $table = 'categories';
    
    public function __construct(){
        
    }
    
    // Function to retrieve all records from the database table
    
    public function get_all(  ){
        return self::all();
      
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    
    
  
}