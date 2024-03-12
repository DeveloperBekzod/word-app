<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'person',
        'passport',
        'passport_date',
        'givenBy',
        'address',
        'phone',
        'product',
        'amount',
        'total',
        'description',
        'buyer',
        'buyer_passport',
        'buyer_passport_givenBy',
        'buyer_passport_date',
        'buyer_address',
        'buyer_description',
        'paymentDate1',
        'paymentAmount1',
        'paymentDate2',
        'paymentAmount2',
        'paymentDate3',
        'paymentAmount3',
        'paymentDate4',
        'paymentAmount4',
        'paymentDate5',
        'paymentAmount5',
        'paymentDate6',
        'paymentAmount6',
        'paymentDate7',
        'paymentAmount7',
        'paymentDate8',
        'paymentAmount8',
        'paymentDate9',
        'paymentAmount9',
        'paymentDate10',
        'paymentAmount10',
        'paymentDate11',
        'paymentAmount11',
        'paymentDate12',
        'paymentAmount12',
    ];
}
