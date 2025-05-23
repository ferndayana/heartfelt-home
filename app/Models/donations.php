<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donations extends Model
{
    use HasFactory;

    protected $table = 'donations';
    protected $primaryKey = 'Donation_ID';
    public $timestamps = true;

    protected $fillable = [
        'Donation_ID',
        'DonationDate',
        'PaymentMethod',
    ];
}
