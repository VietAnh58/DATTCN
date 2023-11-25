<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentDetails extends Model
{
    use HasFactory;
    protected $table = 'payment_details';
    protected $fillable = [
        'order_id',
        'amount',
        'provider',
        'status',
        'payment_method'
    ];

    public function order_details()
    {
        return $this->belongsTo(Product::class, 'order_id', 'id');
    }
}
