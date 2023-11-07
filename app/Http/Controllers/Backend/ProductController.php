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
    public function StoreProduct(Request $request)   {
        $image = $request->file('product_thambnail');
        $name_genarate = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(800,800)->save('uploads/product/'.$name_genarate);
        $save_url = 'uploads/product/'.$name_genarate;
        Product::insert([
            'product_name' => $request->product_name,
            'product_slug' => strtolower(str_replace(' ','-',$request->product_name)),
            'product_tags' => $request->product_tags,
            'long_descp' => $request->long_descp,
            'short_descp' => $request->short_descp,
            'product_price' => $request->product_price,
            'discount_price' => $request->discount_price,
            'product_code' => $request->product_code,
            'product_qty' => $request->product_qty,
            'brand_id' => $request->brand_id,
            'product_thambnail' => $save_url,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'hot_deals' => $request->hot_deals,
            'featured' => $request->featured,
            'speacial_offer' => $request->speacial_offer,
            'speacial_deal' => $request->speacial_deal,
         

        ]);
        $request->validate([
            'multi_img.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $multiImg = $request->file('multi_img');
        if ($request->hasFile('multi_img')) {
            foreach ($multiImg as $image) {
                $multiImage = $request->file('multi_img');
                $multiName_genarate = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($multiImage)->resize(300,300)->save('uploads/multiImage/'.$multiName_genarate);
                $save_multi = 'uploads/brand/'.$multiName_genarate;
                
                MultiImg::insert(['photo_name' => $save_multi]);
              
            
            }
    
           
        }
        $notification = array (
            'message' =>'Category Inserted Successfully',
            'alert-type' =>'success'
        );
       
        return redirect()->route('all.product')->with($notification);
    }
}
