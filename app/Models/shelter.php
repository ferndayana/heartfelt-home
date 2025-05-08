<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shelter extends Model
{
    use HasFactory;

    protected $table = 'shelter';
    protected $primaryKey = 'Shelter_ID';
    public $timestamps = false;

    protected $fillable = [
        'Shelter_ID',
        'ShelterName',
        'ShelterAddress',
        'ShelterNumber',
        'WebsiteURL',
        'Created_at',
    ];
}
