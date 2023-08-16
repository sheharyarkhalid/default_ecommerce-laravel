<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CategoriesModel;
class ProductsModel extends Model
{
   
    protected $table = 'products';
    
    public function __construct(){
        
    }
    
    // Function to retrieve all records from the database table
    
    public function get_all(  ){
        return self::all();
      
    }
    public function category()
    {
        return $this->belongsTo(CategoriesModel::class);
    }
    
    
    public function get_by_category( $category_slug ){
        
        
       $productsWithCategories = self::select('products.*', 'categories.cat_name as category_name')
        ->join('categories', 'products.cat_id', '=', 'categories.cat_id')
        ->where('categories.cat_slug', $category_slug)
        ->get();
        return $productsWithCategories;
      
    }
  
}