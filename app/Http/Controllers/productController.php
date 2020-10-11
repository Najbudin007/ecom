<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\support\Str;
use App\product;

class productController extends Controller
{
    public function index(){
        $products = product::get();
        return view('admin.product.index',compact('products'));

    }

    public function create(){
        return view('admin.product.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'description'=>'required|',
            'image'=>'required|mimes:png,jpg,jpeg',
            'price'=>'required|numeric',
            'additional_info'=>'required',
            'category'=>'required'

        ]);
        $image = $request->file('image')->store('public/product');
            product::create([
                'name'=>$request->name,
                'image'=>$image,
                'description'=>$request->description,
                'price'=>$request->price,
                'additional_info'=>$request->additional_info,
                'category_id'=>$request->category,
                'subcategory_id'=>$request->subcategory,
            ]);
            return redirect()->back()->with('message','product stored successfully');
    }
        public function destroy($id){
            $product = product::find($id);
            $filename = $product->image;
            $product->delete();
            \Storage::delete($filename);
            return redirect()->route('product.index');
        }

        public function loadSubCategories(Request $request,
        $id){
            $subcategory = Subcategory::where('category_id',$id)->pluck('name','id');
            return response()->json($subcategory);
        }

        public function edit($id){
            $product = product::find($id);
            return view('admin.product.edit',compact('product'));
        }

        public function update(Request $request,$id){
            $product = product::find($id);
            $image = $product->image;
            if($request->file('image')){
                $image = $request->file('image')->store('public/product');
                \Storage::delete($filename);

            $product->name=$request->name;
            $product->image=$image;
            $product->price=$request->price;
            $product->description=$request->description;
            $product->additional_info=$request->additional_info;
            $product->category_id =$request->category;
            $product->subcategory_id =$request->subcategory;
            $product->save();
            }else{
                $product->name=$request->name;
                $product->description=$request->description;
                $product->price=$request->price;
                $product->additional_info=$request->additional_info;
                $product->category_id =$request->category;
                $product->subcategory_id =$request->subcategory;
                $product->save();
            }
            return redirect()->route('product.index')->with('message','product updated successfully');
        }

}
