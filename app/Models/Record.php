<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $table = 'records';
    protected $primaryKey = 'Record_ID';
    public $timestamps = false;

    protected $fillable = [
        'Record_ID',
        'VaccinationStatus',
        'MedicalConditions',
        'created_at',
    ];
}
