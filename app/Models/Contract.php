<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int    $id
 * @property string $person
 * @property string $passport
 * @property string $passport_date
 * @property string $givenBy
 * @property string $address
 * @property string $phone
 * @property string $product
 * @property string $amount
 * @property string $total
 * @property string $description
 * @property string $buyer
 * @property string $buyer_passport
 * @property string $buyer_passport_givenBy
 * @property string $buyer_passport_date
 * @property string $buyer_address
 * @property string $buyer_description
 * @property Carbon $created_at
 */
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
    ];

    public function paymentSchedule()
    {
        $this->hasMany(PaymentSchedule::class);
    }
}
