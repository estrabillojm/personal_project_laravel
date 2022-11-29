<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;


    
    protected $casts = [
        'array' => 'extra_access'
    ];

    
    protected $hidden = [
        'password',
    ];
}
