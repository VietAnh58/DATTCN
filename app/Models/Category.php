<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Category extends Model
{
    use SoftDeletes;

    protected $table = 'categories';
    protected $fillable = [
        'title',
        'alias',
        'parent_id',
        'is_active',
    ];

    public function parentCategory()
    {
        return $this->belongsTo(ParentCategory::class, 'parent_id');
    }
}
