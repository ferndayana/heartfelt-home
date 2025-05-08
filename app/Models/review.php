<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'review';
    protected $primaryKey = 'Review_ID';
    public $timestamps = true;

    protected $fillable = [
        'Review_ID',
        'Comment',
        'Rating',
        'Date_Posted',
    ];
}
