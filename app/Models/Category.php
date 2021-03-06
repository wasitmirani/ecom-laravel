<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\URL;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }
    public function getThumbnailAttribute($value)
    {
        if(!empty($value))
        return categoryImage($value);
        else 
        return $value;
    }


    public function getAllCategories(){
        return Category::select('id','name','thumbnail')->orderBy('name','ASC')->take(20)->get();
    }

    public function products(){
        return $this->hasMany(Product::class,'category_id')->where('unitsInStock', '>', 0);
    }
    public function subCategories()
    {
        return $this->hasMany(SubCategory::class)->where('status',1);
    }
}
