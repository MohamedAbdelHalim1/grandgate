<?php

namespace App\Http\Controllers\Admin;

use App\Models\Image;
use App\Models\Accessory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AccessoryController extends Controller
{
    public function index(Request $request)
    {
        $accessories = Accessory :: orderBy('order','ASC');

        $search = null;

        if($request->search)
        {
            $search = $request->search ;

            $accessories = $accessories->where('name','LIKE','%'.$search.'%');
        }

        $accessories = $accessories->get();
        return view('backend.accessories.index',compact('accessories','search'));
    }

    public function create()
    {
        return view('backend.accessories.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:100',
        ]);

        if ($validator->fails()) {
             return back()->with('error',$validator->messages()->first());
         }
        $accessory = new Accessory;
        $accessory->name = $request->name;
        $accessory->slug = strtolower(str_replace(' ','-',$request->name));
        $accessory->description = $request->description;
        $accessory->title = $request->title;
        $accessory->order = (int)$request->order;
        //arabic
        $accessory->name_ar = $request->name_ar;
        $accessory->slug_ar = strtolower(str_replace(' ','-',$request->name_ar));
        $accessory->description_ar = $request->description_ar;
        $accessory->title_ar = $request->title_ar;

        if($request->file('cover')){
            $path = $request->file('cover')->store('/images/projects', ['disk' =>   'my_files']);
            $accessory->cover = $path;
        }
        if($request->file('image')){
            $path = $request->file('image')->store('/images/projects', ['disk' =>   'my_files']);
            $accessory->image = $path;
        }
        $accessory->save();

        return redirect()->route('accessories.index')->with('success','Accessory Added Successfully');
    }

    public function edit($id)
    {
        $accessory = Accessory :: find($id);
        if($accessory)
        {
            return view('backend.accessories.edit',compact('accessory'));
        }
        return back()->with('error','Accessory Not Found, It May Has Been Deleted');
    }

    public function update(Request $request , $id)
    {
        $accessory = Accessory :: find($id);
        if($accessory)
        {
            $accessory->name = $request->name;
            $accessory->slug = strtolower(str_replace(' ','-',$request->name));
            $accessory->order = (int)$request->order;
            $accessory->description = $request->description;
            $accessory->title = $request->title;
            //arabic
            $accessory->name_ar = $request->name_ar;
            $accessory->slug_ar = strtolower(str_replace(' ','-',$request->name_ar));
            $accessory->description_ar = $request->description_ar;
            $accessory->title_ar = $request->title_ar;



            if($request->file('cover')){
                $path = $request->file('cover')->store('/images/projects', ['disk' =>   'my_files']);
                $accessory->cover = $path;
            }

            if($request->file('image')){
                $path = $request->file('image')->store('/images/projects', ['disk' =>   'my_files']);
                $accessory->image = $path;
            }
            $accessory->save();

            return redirect()->route('accessories.index')->with('success','Accessory Updated Successfully');
        }
        return redirect()->route('accessories.index')->with('error','Something Went Wrong');
    }

    public function destroy($id)
    {
        Accessory::find($id)->delete();
        return back()->with('success','Accessory Deleted Successfully');
    }
}
