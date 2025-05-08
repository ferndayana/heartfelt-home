<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'Admin_ID';
    public $timestamps = false;

    protected $fillable = ['Admin_ID', 'AdminUsername', 'Password', 'Created_at'];
}
