<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class application extends Model
{
    use HasFactory;

    protected $table = 'application';
    protected $primaryKey = 'Application_ID';
    public $timestamps = true;

    protected $fillable = [
        'Application_ID',
        'FullName',
        'Email',
        'Location',
        'Contact',
        'UserGender',
        'AdoptionDate',
        'AdoptionStatus',
    ];
}
