<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int    $id
 * @property int    $contract_id
 * @property string $paymentDate1
 * @property string $paymentAmount1
 * @property string $paymentDate2
 * @property string $paymentAmount2
 * @property string $paymentDate3
 * @property string $paymentAmount3
 * @property string $paymentDate4
 * @property string $paymentAmount4
 * @property string $paymentDate5
 * @property string $paymentAmount5
 * @property string $paymentDate6
 * @property string $paymentAmount6
 * @property string $paymentDate7
 * @property string $paymentAmount7
 * @property string $paymentDate8
 * @property string $paymentAmount8
 * @property string $paymentDate9
 * @property string $paymentAmount9
 * @property string $paymentDate10
 * @property string $paymentAmount10
 * @property string $paymentDate11
 * @property string $paymentAmount11
 * @property string $paymentDate12
 * @property string $paymentAmount12
 * @property Carbon $created_at
 */
class PaymentSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'contract_id',
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
    public function contract()
    {
        return $this->belongsTo(Contract::class);
    }
}
