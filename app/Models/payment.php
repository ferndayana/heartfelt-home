<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payment';
    protected $primaryKey = 'Payment_ID';
    public $timestamps = true;

    protected $fillable = [
        'Payment_ID',
        'Amount',
        'PaymentDate',
        'PaymentStatus',
    ];
}
