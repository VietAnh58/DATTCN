<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    use HasFactory;
    protected $table = 'order_items';
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
    ];

    public function product()
    {
        return $this->belongsTo(OrderDetails::class, 'product_id', 'id');
    }

    public function order_details()
    {
        return $this->belongsTo(Product::class, 'order_id', 'id');
    }
}
