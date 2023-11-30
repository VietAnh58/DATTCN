<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainOrder extends Model
{
    use HasFactory;
    protected $table = 'main_orders';
    protected $fillable = [
        'order_detail_id',
        'user_id',
        'product_id',
        'quantity',
        'order_status_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function order_detail()
    {
        return $this->belongsTo(OrderDetails::class, 'order_detail_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function order_status()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
