<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller 
{
    public function index() {
        $products = Products::with('category')->get(); 

        return view('pages.products.index', [
           "products" => $products, 
        ]);
    }
}
