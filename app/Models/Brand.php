<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
