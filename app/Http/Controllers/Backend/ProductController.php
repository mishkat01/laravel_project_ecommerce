<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\MultiImg;
use App\Models\Brand;
use Image;

class ProductController extends Controller
{
    public function AllProduct(){
        $products = Product::latest()->get();
        return view('backend.product.product_all',compact('products'));
    }//end method

    public function AddProduct(){
        $brands = Brand::latest()->get();
        $categories = Category::latest()->get();
        $subcategories = Brand::latest()->get();

        return view('backend.product.product_add',compact('brands','categories'));
    }//end method
}
