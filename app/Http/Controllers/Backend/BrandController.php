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

    public function EditBrand($id){
        $brand = Brand::findOrFail($id);
        return view('backend.brand.brand_edit',compact('brand'));

    }//end method
    public function UpdateBrand(Request $request){
        $brand_id = $request->id;
        $old_img = $request->old_image;
        //check if user want to update img
        if($request->file('brand_image')){
            $image = $request->file('brand_image');
            $name_genarate = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300,300)->save('uploads/brand/'.$name_genarate);
            $save_url = 'uploads/brand/'.$name_genarate;

            //repace image
            if(file_exists($old_img)){
                unlink($old_img);
            }
    
            Brand::findOrFail($brand_id)->update([
                'brand_name' => $request->brand_name,
                'brand_slug' => strtolower(str_replace(' ','-',$request->brand_name)),
                'brand_image' => $save_url,
            ]);
            $notification = array (
                'message' =>'Brand updated with photo Successfully',
                'alert-type' =>'success'
            );
           
            return redirect()->route('all.brand')->with($notification);

        } else {
            //update without img
            Brand::findOrFail($brand_id)->update([
                'brand_name' => $request->brand_name,
                'brand_slug' => strtolower(str_replace(' ','-',$request->brand_name)),
                
            ]);
            $notification = array (
                'message' =>'Brand updated without photo Successfully',
                'alert-type' =>'success'
            );
           
            return redirect()->route('all.brand')->with($notification);
        }
        return view('backend.brand.brand_edit',compact('brand'));

    }
    public function DeleteBrand($id){
        $brand = Brand::findOrfail($id);
        $img = $brand->brand_image;
        unlink($img);

        Brand::findOrfail($id)->delete();
        $notification = array (
            'message' =>'Brand deleted Successfully',
            'alert-type' =>'success'
        );
        return redirect()->route('all.brand')->with($notification);

    }
}
