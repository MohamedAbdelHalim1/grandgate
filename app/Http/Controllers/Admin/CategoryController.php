<?php

namespace App\Http\Controllers\Admin;

use App\Models\Image;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category :: orderBy('order','ASC');

        $search = null;

        if($request->search)
        {
            $search = $request->search ;

            $categories = $categories->where('name','LIKE','%'.$search.'%');
        }

        $categories = $categories->get();
        return view('backend.categories.index',compact('categories','search'));
    }

    public function create()
    {
        return view('backend.categories.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:100',
        ]);

        if ($validator->fails()) {
             return back()->with('error',$validator->messages()->first());
         }
        $category = new Category;
        $category->name = $request->name;
        $category->slug = strtolower(str_replace(' ','-',$request->name));
        $category->description = $request->description;
        $category->title = $request->title;
        $category->order = (int)$request->order;
        $category->list = $request->list?:null;
        //arabic
        $category->name_ar = $request->name_ar;
        $category->slug_ar = strtolower(str_replace(' ','-',$request->name_ar));
        $category->description_ar = $request->description_ar;
        $category->title_ar = $request->title_ar;
        $category->list_ar = $request->list_ar?:null;
        $category->save();
        if($request->file('cover')){
            $path = $request->file('cover')->store('/images/projects', ['disk' =>   'my_files']);
            $category->cover = $path;
            $category->save();
        }
        if($request->file('images')){
            foreach ($request->file('images') as $imagefile) {
                $image = new Image;
                $path = $imagefile->store('/images/projects', ['disk' =>   'my_files']);
                $image->url = $path;
                $image->category_id = $category->id;
                $image->save();
            }
        }
        return redirect()->route('categories.index')->with('success','Product Added Successfully');
    }

    public function edit($id)
    {
        $category = Category :: find($id);
        if($category)
        {
            return view('backend.categories.edit',compact('category'));
        }
        return back()->with('error','Product Not Found, It May Has Been Deleted');
    }

    public function update(Request $request , $id)
    {
        $category = Category :: find($id);
        if($category)
        {
            $category->name = $request->name;
            $category->slug = strtolower(str_replace(' ','-',$request->name));
            $category->order = (int)$request->order;
            $category->description = $request->description;
            $category->title = $request->title;
            $category->list = $request->list?:null;
            //arabic
            $category->name_ar = $request->name_ar;
            $category->slug_ar = strtolower(str_replace(' ','-',$request->name_ar));
            $category->description_ar = $request->description_ar;
            $category->title_ar = $request->title_ar;
            $category->list_ar = $request->list_ar?:null;

            $category->save();

            if($request->file('cover')){
                $path = $request->file('cover')->store('/images/projects', ['disk' =>   'my_files']);
                $category->cover = $path;
                $category->save();
            }

            if($request->file('images')){
                foreach ($request->file('images') as $imagefile) {
                    $image = new Image;
                    $path = $imagefile->store('/images/projects', ['disk' =>   'my_files']);
                    $image->url = $path;
                    $image->category_id = $category->id;
                    $image->save();
                }
            }

            return redirect()->route('categories.index')->with('success','Product Updated Successfully');
        }
        return redirect()->route('categories.index')->with('error','Something Went Wrong');
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
        return back()->with('success','Product Deleted Successfully');
    }
}
