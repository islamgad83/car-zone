<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

class CategoryController extends Controller
{
    public function categoryView()
    {
        $id = Auth::user()->id;
        $categories = Category::where('admins_id', $id)->latest()->get();
        return view('backend.category.categoryView', compact('categories'));
    }

    public function categoryStore(Request $request){

        $request->validate([
            'category_name_en' => 'required',
            'category_name_ar' => 'required',
            'category_icon' => 'required',
        ],[
            'category_name_en.required' => 'Input Category English Name',
            'category_name_ar.required' => 'Input Category Arabic Name',
        ]);

        $image = $request->file('category_icon');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/category/'.$name_gen);
        $save_url = 'upload/category/'.$name_gen;

        // To check Admin
        $id = Auth::user()->id;
        $admin_id = \App\Models\Admin::where('id', $id)->max('id');

        Category::create([
            'category_name_en' => $request->category_name_en,
            'category_name_ar' => $request->category_name_ar,
            'category_slug_en' => strtolower(str_replace(' ', '-',$request->category_name_en)),
            'category_slug_ar' => str_replace(' ', '-',$request->category_name_ar),
            'category_icon' => $save_url,
            'admins_id' => $admin_id,

        ]);

        $notification = array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end method

    public function categoryEdit($id){
        $category = Category::findOrFail($id);
        return view('backend.category.categoryEdit',compact('category'));

    }

    public function categoryUpdate(Request $request ,$id){

        $old_image = $request->old_image;
//        $deleteImage = (parse_url($old_image));
        $image = $request->category_icon;
        if ($image != '') {
            $name_generation = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('upload/category/' . $name_generation);
            $last_image = 'upload/category/' . $name_generation;
            unlink($old_image);

            Category::findOrFail($id)->update([
                'category_name_en' => $request->category_name_en,
                'category_name_ar' => $request->category_name_ar,
                'category_slug_en' => strtolower(str_replace(' ', '-', $request->category_name_en)),
                'category_slug_ar' => str_replace(' ', '-', $request->category_name_ar),
                'category_icon' => $last_image,

            ]);

            $notification = array(
                'message' => 'Category Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.category')->with($notification);
        }else {
            Category::findOrFail($id)->update([
                'category_name_en' => $request->category_name_en,
                'category_name_ar' => $request->category_name_ar,
                'category_slug_en' => strtolower(str_replace(' ', '-', $request->category_name_en)),
                'category_slug_ar' => str_replace(' ', '-', $request->category_name_ar),

            ]);

            $notification = array(
                'message' => 'Category Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.category')->with($notification);
        }


    } // end method

    public function categoryDelete($id){

        Category::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end method

    private function base_url()
    {
    }


}
