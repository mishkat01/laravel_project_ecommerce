<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Image;

class CategoryController extends Controller
{
    public function AllCategory(){
        $categories = Category::latest()->get();
        return view('backend.category.category_all',compact('categories'));
    }//end method
    public function AddCategory(){
        return view('backend.category.category_add');
    }//end method
    
    public function StoreCategory(Request $request){
        $image = $request->file('category_image');
        $name_genarate = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(60,60)->save('uploads/category/'.$name_genarate);
        $save_url = 'uploads/category/'.$name_genarate;
 
        Category::insert([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ','-',$request->category_name)),
            'category_image' => $save_url,
        ]);
        $notification = array (
            'message' =>'Category Inserted Successfully',
            'alert-type' =>'success'
        );
       
        return redirect()->route('all.category')->with($notification);
    }//end method

    public function EditCategory($id){
        $categories = Category::findOrFail($id);
        return view('backend.category.category_edit',compact('categories'));

    }//end method

    public function UpdateCategory(Request $request){
        $cat_id = $request->id;
        $old_img = $request->old_image;
        //check if user want to update img
        if($request->file('category_image')){
            $image = $request->file('category_image');
            $name_genarate = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(60,60)->save('uploads/category/'.$name_genarate);
            $save_url = 'uploads/category/'.$name_genarate;

            //repace image
            if(file_exists($old_img)){
                unlink($old_img);
            }
    
            Category::findOrFail($cat_id)->update([
                'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ','-',$request->category_name)),
            'category_image' => $save_url,
            ]);
            $notification = array (
                'message' =>'Category updated with photo Successfully',
                'alert-type' =>'success'
            );
           
            return redirect()->route('all.category')->with($notification);

        } else {
            //update without img
            Category::findOrFail($cat_id)->update([
                'category_name' => $request->category_name,
                'category_slug' => strtolower(str_replace(' ','-',$request->category_name)),
                
            ]);
            $notification = array (
                'message' =>'Category updated without photo Successfully',
                'alert-type' =>'success'
            );
           
            return redirect()->route('all.category')->with($notification);
        }
        return view('backend.category.category_edit',compact('categories'));

    }//end method

    public function DeleteCategory($id){
        $category = Category::findOrfail($id);
        $img = $category->category_image;
        unlink($img);

        Category::findOrfail($id)->delete();
        $notification = array (
            'message' =>'Category deleted Successfully',
            'alert-type' =>'success'
        );
        return redirect()->route('all.category')->with($notification);

    }
}
