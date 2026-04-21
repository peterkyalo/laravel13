<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    protected $fillable = ['attribute_id', 'value'];

    // Define the relationship with Attribute
    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }

    // Define the relationship with Product
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}