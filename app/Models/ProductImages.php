<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getThumbnailAttribute($value)
    {
        if(!empty($value))
        return productImage($value);
        else 
        return $value;
    }
}
