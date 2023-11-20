<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


// Trong model Menu.php
class Menu extends Model
{
    use SoftDeletes;

    protected $table = 'menu';
    protected $fillable = [
        'name',
        'alias',
        'link',
        'order_number',
        'is_active',
    ];

    public function parentCategories()
    {
        return $this->hasMany(ParentCategory::class, 'menu_id', 'id');
    }
}

// Trong model ParentCategory.php

