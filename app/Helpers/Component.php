<?php

namespace App\Helpers;

use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use App\Models\AppSetting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;


class Component
{


    public static function getAppSetting(){

        if (Cache::has('getAppSetting')) {
            $getAppSetting = Cache::get('getAppSetting');
        } else {
            Cache::put('getAppSetting', AppSetting::first(), sessionTimer());
            $getAppSetting = Cache::get('getAppSetting');
        }

        return   $getAppSetting;
    }
    public static function getLatestProducts()
    {

        if (Cache::has('getLatestProducts')) {
            $getLatestProducts = Cache::get('getLatestProducts');
        } else {
            Cache::put('getLatestProducts', Product::latest()->take(8)->with(['productImages', 'category', 'subcategory'])->get(), sessionTimer());
            $getLatestProducts = Cache::get('getLatestProducts');
        }

        return   $getLatestProducts;
    }

    public static function getRandomProducts()
    {
// ->where('unitsInStock', '>', 0)
        if (Cache::has('getRandomProducts')) {
            $getRandomProducts = Cache::get('getRandomProducts');
        } else {
            Cache::put('getRandomProducts', Product::inRandomOrder()->take(8)->with(['productImages', 'category', 'subcategory'])->get(), shortTimer());
            $getRandomProducts = Cache::get('getRandomProducts');
        }

        return $getRandomProducts;
    }
    public static function getFeaturedProducts()
    {
        if (Cache::has('getFeaturedProducts')) {
            $getFeaturedProducts = Cache::get('getFeaturedProducts');
        } else {
            Cache::put('getFeaturedProducts', Product::where('isfeatured', 1)->inRandomOrder()->take(8)->with(['productImages', 'category', 'subcategory'])->get(), sessionTimer());
            $getFeaturedProducts = Cache::get('getFeaturedProducts');
        }

        return   $getFeaturedProducts;
    }
    public static function getSlider()
    {
        if (Cache::has('getSlider')) {
            $getSlider = Cache::get('getSlider');
        } else {
            Cache::put('getSlider', Slider::where('sort','<','4')->orderBy('sort','ASC')->take(3)->get(), sessionTimer());
            $getSlider = Cache::get('getSlider');
        }

        return   $getSlider;
    }

    public static function getCategoriesList(){
        $category= new Category();
        if (Cache::has('getCategoriesList')) {
            $getCategoriesList = Cache::get('getCategoriesList');
        } else {
            Cache::put('getCategoriesList',
            $category->getAllCategories()
            , sessionTimer());
            $getCategoriesList = Cache::get('getCategoriesList');
        }

        return   $getCategoriesList;
    }
    public static function getCategories()
    {

        if (Cache::has('getCategories')) {
            $getCategories = Cache::get('getCategories');
        } else {
            Cache::put('getCategories',
            Category::select('categories.*', DB::raw('count(products.category_id) as total'))
                ->join('products','products.category_id','=','categories.id')
                ->take(20)
                ->groupBy('products.category_id')
                ->get()
            , sessionTimer());
            $getCategories = Cache::get('getCategories');
        }

        return   $getCategories;
    }
}
