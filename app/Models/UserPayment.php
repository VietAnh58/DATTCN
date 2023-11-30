<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPayment extends Model
{
    use HasFactory;
    protected $table = 'user_payments';
    protected $fillable = [
        'user_id',
        'payment_id',
        'provider',
        'account_no',
        'expiry',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function type_payment()
    {
        return $this->belongsTo(TypePayment::class,'payment_id', 'id');
    }

    public function order_detail()
    {
        return $this->belongsTo(OrderDetails::class,'id', 'user_payment_id');
    }
}
