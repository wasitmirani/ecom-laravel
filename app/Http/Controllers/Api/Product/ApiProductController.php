<?php

namespace App\Http\Controllers\Api\Product;

use App\Models\Product;
use App\Helpers\Component;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiProductController extends Controller
{
    //

    public function products(Request $request){

        $query=!empty(request('query')) ? request('query') : "";

        $category_id=!empty(request('category_id')) ? request('category_id') : "";
        $categories_list=!empty(request('categories_list')) ? request('categories_list') : "";

        $prices=explode(",",$request->prices);
        $products=Product::latest()->where('name', 'like', '%' . $query . '%');
        $min=[];
        $max=[];
        foreach ($prices as $key => $value) {
            if(!empty($value)){
                $price=explode("-",$value);
                $min[]=$price[0];
                $max[]=$price[1];
            }

            # code...
        }
        if(!empty($min) && !empty($max)){
            $products=$products->whereIn('unitPrice',min($min))
                               ->whereIn('unitPrice',max($max));
        }


        if(!empty($categories_list))
        {
            $products= $products->whereIn('category_id',explode(",",$categories_list));
        }

        $products=$products->with(['productImages', 'category', 'subcategory'])->paginate(env('PER_PAGE'));

        return response()->json($products,200);
    }

    public function getProducts(){
        $latestProducts = Component::getLatestProducts();
        $featuredProducts = Component::getFeaturedProducts();
        $randomProducts = Component::getRandomProducts();
        return response()->json(['latestProducts'=>$latestProducts,'featuredProducts'=>$featuredProducts,'randomProducts'=>$randomProducts],200);
    }


    public function findProducts(Request $request){

        $query =!empty(request('query')) ? request('query'): "";
        if($query=="null")
            $query="";

        $category_id=!empty(request('category_id')) ? request('category_id'):null;
         $products=Product::latest()->where('name', 'like', '%' . $query . '%');

         if(!empty($category_id))
        {
            if( $category_id!="null")
            {
                 $products=  $products->where('category_id', $category_id);
            }


        }

       $products=  $products->take(60)->with(['productImages', 'category', 'subcategory'])->get();
       $relatedproducts=Product::whereIn('category_id',$products->pluck('category_id'))->take(60)->get();
       $latestproducts=Product::latest()->take(10)->get();
       $otherproducts=Product::inRandomOrder()->take(60)->get();

        return response()->json(['products'=>$products,'relatedproducts'=>$relatedproducts,'latestproducts'=>$latestproducts,'otherproducts'=>$otherproducts]);
     }
}
