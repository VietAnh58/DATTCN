<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempOrder extends Model
{
    use HasFactory;

    protected $table = 'temp_orders';
    protected $fillable = [
        'order_detail_id',
        'user_id',
        'product_id',
        'quantity',
        'order_status_id',
    ];
}
