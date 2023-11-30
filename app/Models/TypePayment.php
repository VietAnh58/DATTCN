<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypePayment extends Model
{
    protected $table = 'type_payment';
    protected $fillable = [
        'id',
        'type_payment_name',
       
    ];


}
