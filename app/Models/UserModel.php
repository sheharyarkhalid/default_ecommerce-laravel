<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UserModel extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = "users";
     
    protected $fillable = [
        'name',
        'email',
        'password',
        'user_id',
        'user_type',
        "created_at",
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    
    
    public function add_temp(){
        
        $user_id = $this->generate_unique_id();
        $data = [
            'user_id' => $user_id ,
            'user_type' => "temp_user",
            'created_at' => date("Y-m-d h:i:s")
        ];
        $this->create($data);
        return $user_id;
        
    }
    public function generate_unique_id(){
        
        $unique_id = $this->max("user_id") + 1;
        
        // $check = $this->where("user_id", $unique_id);
        
        // if()
        
        return $unique_id;
        
    }
    public function get_user($email){
        $user_details = DB::select("SELECT * FROM users  WHERE user_email = $email LIMIT 1 ");
        return $user_details[0];
    }
}
