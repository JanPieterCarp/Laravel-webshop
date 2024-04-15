<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function variants()
    {
        return $this->hasMany(related:ProductVariant::class);
    }

    public function images()
    {
        return $this->hasMany(related:Image::class);
    }
}


