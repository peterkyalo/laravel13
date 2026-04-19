<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Brand extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'image',
        'status',
    ];

    // Relationship with Product model (assuming a brand has many products)
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // Autogenete slug from product name
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($brand) {
            $brand->slug = Str::slug($brand->name);
        });
    }
}
