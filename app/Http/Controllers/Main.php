<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Http\Controllers\Theme;



class Main extends Controller
{
     
    public $theme = '';
    
    public function __construct(){
        $theme = new Theme();
        $this->theme = $theme->get_active_theme();
    }
    
    public function index()
    {   
   
        return view($this->theme.'.app');
    }
}