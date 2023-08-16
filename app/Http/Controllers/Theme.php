<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;




class Theme extends Controller
{
    public $theme_dir = 'themes';
    public $theme_name = 'theme_one';
    public $theme = '';
    
    public function __construct(){
        
        $this->theme = $this->theme_dir. '.' .$this->theme_name; 
        
    }
    
    
    public function get_active_theme()
    {   
        return $this->theme;
        
    }
}