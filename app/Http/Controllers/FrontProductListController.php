<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\product;
class FrontProductListController extends Controller
{
    public function index()
    {
        $products = product::latest()->get();
        $randomActiveproducts = product::inRandomOrder()->limit(3)->get();
        $randomActiveproductIds=[];
        foreach($randomActiveproducts as $product){
            array_push($randomActiveproductIds,$product->id);
        }
        $randomActiveproducts = product::whereNotIN('id',$randomActiveproductIds)->limit(3)->get();
        return view('product',compact('products','randomIteamproducts','randomActiveproducts'));
    }

    public function show($id)
    {
        $product = product::find($id);
        $productFromSameCategories = product::inRandomOrder()
        ->where('category_id',$product->category_id)
        ->where('id','!=',$product->id)
        ->limit(3)->get();
        return $productFromSameCategories;
        return view('show',compact('product'));
    }

}

