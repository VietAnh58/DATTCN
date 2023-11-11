<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'product_name',
        'alias',
        'price',
        'sale_price',
        'image',
        'category_id',
        'description',
        'inventory_id',
        'is_featured',
        'is_new',
        'is_best_seller',
      
    ];

    function category() 
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(ImageProduct::class, 'product_id');
    }



}
