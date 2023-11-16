<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\MultiImg;
use App\Models\Brand;


class IndexController extends Controller
{
    public function ProductDetails($id,$slug ){
        $product = Product::findOrFail($id);

        $multiImage =  MultiImg:: where ('product_id',$id)->get();
        return view ('frontend.product.product_details',compact('product','multiImage'));
    }//end method

    public function ProductViewAjax($id){
        $product = Product::findOrFail($id);
        return response()->json(array(
            'product' =>  $product
        ));
    }
}
