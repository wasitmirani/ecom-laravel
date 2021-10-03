<?php

namespace App\Http\Controllers\Api\Category;

use App\Helpers\Component;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiCategoryController extends Controller
{
    //
    public function index(){
        $categories=Component::getCategoriesList();
        return response()->json($categories);
    }
}
