<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    public function variants()
    {
        return $this->hasMany(related:ProductVariant::class);
    }

    public function image(): HasOne
    {
        return $this->hasOne(related: Image::class)->ofMany(column: 'featured', aggregate: 'max');
    }

    public function images()
    {
        return $this->hasMany(related:Image::class);
    }
}


