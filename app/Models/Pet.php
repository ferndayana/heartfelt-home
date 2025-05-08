<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $table = 'pet'; // Explicit since it's not the default 'pets'
    protected $primaryKey = 'Pet_ID';
    public $timestamps = false;

    protected $fillable = [
        'Pet_ID',
        'PetName',
        'PetType',
        'Breed',
        'PetGender',
        'Age',
        'HealthStatus',
        'PersonalTraits',
        'AdoptionFee',
    ];
}
