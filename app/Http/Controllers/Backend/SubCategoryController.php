<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubCategoryController extends Controller
{
    public function subCategoryView()
    {
        $id = Auth::user()->id;
        $categories = Category::where('admins_id', $id)->orderBy('category_name_en', 'ASC')->get();
        $subCategories = SubCategory::where('admins_id', $id)->latest()->get();
        return view('backend.category.subCategoryView', compact('subCategories', 'categories'));
    }

    public function subCategoryStore(Request $request){

        $request->validate([
            'category_id' => 'required',
            'subcategory_name_en' => 'required',
            'subcategory_name_ar' => 'required',
        ],[
            'category_id.required' => 'Please select Any option',
            'subcategory_name_en.required' => 'Input SubCategory English Name',
        ]);

        // To check Admin
        $id = Auth::user()->id;
        $admin_id = \App\Models\Admin::where('id', $id)->max('id');
        SubCategory::create([
            'category_id' => $request->category_id,
            'subcategory_name_en' => $request->subcategory_name_en,
            'subcategory_name_ar' => $request->subcategory_name_ar,
            'subcategory_slug_en' => strtolower(str_replace(' ', '-',$request->subcategory_name_en)),
            'subcategory_slug_ar' => str_replace(' ', '-',$request->subcategory_name_ar),
            'admins_id' => $admin_id,
        ]);

        $notification = array(
            'message' => 'SubCategory Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end method


    public function subCategoryEdit($id){
        $categories = Category::orderBy('category_name_en','ASC')->get();
        $subcategory = SubCategory::findOrFail($id);
        return view('backend.category.subCategoryEdit',
            compact('subcategory','categories'));

    }

    public function subCategoryUpdate(Request $request){

        $subcategory_id = $request->id;

        SubCategory::findOrFail($subcategory_id)->update([
            'category_id' => $request->category_id,
            'subcategory_name_en' => $request->subcategory_name_en,
            'subcategory_name_ar' => $request->subcategory_name_ar,
            'subcategory_slug_en' => strtolower(str_replace(' ', '-',$request->subcategory_name_en)),
            'subcategory_slug_ar' => str_replace(' ', '-',$request->subcategory_name_ar),
        ]);

        $notification = array(
            'message' => 'SubCategory Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('all.subcategory')->with($notification);

    }  // end method

    public function subCategoryDelete($id){

        SubCategory::findOrFail($id)->delete();

        $notification = array(
            'message' => 'SubCategory Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    }

//    =================== Sub subCategory ===================================

    public function subSubCategoryView()
    {
        $id = Auth::user()->id;
        $categories = Category::where('admins_id', $id)->orderBy('category_name_en', 'ASC')->get();
        $subSubCategories = SubSubCategory::where('admins_id', $id)->latest()->get();
        return view('backend.category.subSubCategoryView', compact('subSubCategories', 'categories'));
    }

    public function getSubCategory($category_id)
    {
        $id = Auth::user()->id;
        $subCategory = SubCategory::where('admins_id', $id)->where('category_id', $category_id)->orderBy('subcategory_name_en', 'ASC')->get();
        return json_encode($subCategory);
    }
    public function getSubSubCategory($subcategory_id)
    {
        $id = Auth::user()->id;
        $subsubCategory = SubSubCategory::where('admins_id', $id)->where('subcategory_id', $subcategory_id)->orderBy('subsubcategory_name_en', 'ASC')->get();
        return json_encode($subsubCategory);
    }
    public function subSubCategoryStore(Request $request){

        $request->validate([
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'subsubcategory_name_en' => 'required',
            'subsubcategory_name_ar' => 'required',
        ],[
            'category_id.required' => 'Please select Any option',
            'subsubcategory_name_en.required' => 'Input SubCategory English Name',
        ]);

        // To check Admin
        $id = Auth::user()->id;
        $admin_id = \App\Models\Admin::where('id', $id)->max('id');
        SubSubCategory::create([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'subsubcategory_name_en' => $request->subsubcategory_name_en,
            'subsubcategory_name_ar' => $request->subsubcategory_name_ar,
            'subsubcategory_slug_en' => strtolower(str_replace(' ', '-',$request->subsubcategory_name_en)),
            'subsubcategory_slug_ar' => str_replace(' ', '-',$request->subsubcategory_name_ar),
            'admins_id' => $admin_id,
        ]);

        $notification = array(
            'message' => 'Sub-SubCategory Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } // end method

    public function subSubCategoryEdit($id){
        $categories = Category::orderBy('category_name_en','ASC')->get();
        $subcategory = SubCategory::orderBy('subcategory_name_en','ASC')->get();
        $subSubcategory = SubSubCategory::findOrFail($id);
        return view('backend.category.subSubCategoryEdit',
            compact('categories','subcategory','subSubcategory'));
    }

    public function subSubCategoryUpdate(Request $request){

        $subSubcategory_id = $request->id;

        SubSubCategory::findOrFail($subSubcategory_id)->update([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'subsubcategory_name_en' => $request->subsubcategory_name_en,
            'subsubcategory_name_ar' => $request->subsubcategory_name_ar,
            'subsubcategory_slug_en' => strtolower(str_replace(' ', '-',$request->subsubcategory_name_en)),
            'subsubcategory_slug_ar' => str_replace(' ', '-',$request->subsubcategory_name_ar),
        ]);

        $notification = array(
            'message' => 'SubCategory Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('all.subSubcategory')->with($notification);

    }  // end method

    public function subSubCategoryDelete($id){

        SubSubCategory::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Sub-SubCategory Deleted Successfully',
            'alert-type' => 'errors'
        );


        return redirect()->back()->with($notification);
    }
}
