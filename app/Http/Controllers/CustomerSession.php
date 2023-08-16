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
use App\Models\UserModel;

class CustomerSession extends Controller
{
    public $theme = '';
    public $products_model = '';
    public $categories_model = '';
    public $global_formatter = '';
    public $user_model = '';
    
    
    public function __construct(){
        $this->theme = "themes.".env('CURRENT_THEME').".";
        
        $this->products_model = new ProductsModel();
        $this->categories_model = new CategoriesModel();
        $this->user_model = new UserModel();
    
        
        $this->global_formatter = new GlobalFormat();
        
    }
    
    public function create_temp_user(){
        $user_id = $this->user_model->add_temp();
        session()->put('session_userid', $user_id);
        
    }
}