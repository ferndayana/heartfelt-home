<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $table = 'user';

    protected $primaryKey = 'User_ID';

    public $timestamps = false;

    
    protected $fillable = [
        'User_ID', 'Email', 'Username', 'Created_at'
    ];

    // Optionally: If you want to define any relationships (e.g., with another table), you can add those here.
}
