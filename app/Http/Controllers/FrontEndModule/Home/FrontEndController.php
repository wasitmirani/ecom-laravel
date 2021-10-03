<?php

namespace App\Http\Controllers\FrontEndModule\Home;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use App\Helpers\Component;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontEndController extends Controller
{
    //

    public function index()
    {
        $latestProducts = Component::getLatestProducts();
        $featuredProducts = Component::getFeaturedProducts();
        $randomProducts = Component::getRandomProducts();
       
        // $getProductsByCategory=Product::inRandomOrder()->where('unitsInStock', '>', 0)->take(40)->with(['productImages', 'category', 'subcategory'])->get();
        return view('frontend.pages.index', compact('latestProducts', 'featuredProducts', 'randomProducts'));
    }

    public function singleProduct(Request $request)
    {
        $product=Product::where('id',$request->id)->first();
        return view('frontend.pages.singleProduct',compact('product'));
    }
    public function products()
    {
        $featuredProducts = Component::getFeaturedProducts();
        return view('frontend.pages.products',compact('featuredProducts'));
    }

    public function thankYou(){
        return view('frontend.pages.thankYou');
    }

    public function Aboutus(){
        return view('frontend.pages.aboutus');
    }
    public function contactus(Request $request){
        return view('frontend.pages.contactus');
    }

}
