<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'short_description',
        'price',
        'sale_price',
        'sku',
        'stock',
        'image',
        'featured',
        'status',
        'views',
        'sales_count',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];

    // Define the relationship with the Category model
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Autogenete slug from product name
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->slug = Str::slug($product->name);
        });
    }

    // Define the relationship with the ProductImage model
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    // Relationship with the ProductVariant model
    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    // Relationship with the Brand model
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
