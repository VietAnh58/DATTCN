<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentCategory extends Model
{
    use HasFactory;
    protected $table = 'parent_category';
    protected $fillable = [
        'id',
        'title',
        'alias',
        'desc',
    ];



    function menu() 
    {
        return $this->belongsTo(Menu::class);
    }
}




