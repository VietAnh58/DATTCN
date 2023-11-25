<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    protected $table = 'order_details';
    protected $fillable = [
        'user_id',
        'total',
        'payemnt_id',
    ];

    public function order_items()
    {
        return $this->hasMany(OrderItems::class, 'id', 'order_id');
    }   

    // public function payment_details()
    // {
    //     return $this->belongsTo(PaymentDetails::class, 'payment_id', 'id');
    // }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
