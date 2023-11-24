<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopping_Session extends Model
{
    use HasFactory;
    protected $table = 'shopping_session';
    protected $fillable = [
        'session_id',
        'user_id',
        'total',
    ];
}
