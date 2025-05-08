<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{use HasFactory;

    // Define the fillable fields so you can mass-assign them
    protected $fillable = [
        'name', 'breed', 'gender', 'health_status', 'age', 'personal_traits', 'adoption_fee',
    ];
    
}
