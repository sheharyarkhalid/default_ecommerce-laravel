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
// Models
use App\Models\ProductsModel;
use App\Models\CategoriesModel;
use App\Models\UserModel;



class Settings extends Controller
{
    
    public $shop_layout = 'tab_menu';
    
    
    
    
    
}