<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Image;

class BrandController extends Controller
{
    public function AllBrand(){
        $brands = Brand::latest()->get();
        return view('backend.brand.brand_all',compact('brands'));
    }//end method
    public function AddBrand(){
       
        return view('backend.brand.brand_add');
    }//end method

    public function StoreBrand(Request $request){
        $image = $request->file('brand_image');
        $name_genarate = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('uploads/brand/'.$name_genarate);
        $save_url = 'uploads/brand/'.$name_genarate;

        Brand::insert([
            'brand_name' => $request->brand_name,
            'brand_slug' => strtolower(str_replace(' ','-',$request->brand_name)),
            'brand_image' => $save_url,
        ]);
        $notification = array (
            'message' =>'Brand Inserted Successfully',
            'alert-type' =>'success'
        );
       
        return redirect()->route('all.brand')->with($notification);
    }//end method
}
