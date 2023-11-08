<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    //


    public function products(Request $request) {
        $products = Product::orderBy("id","desc")->get();
        return view("products", ['products' => $products]);
    }

    public function getProduct(Product $product) {
        return view('singleProduct', ['product'=> $product]);
    }

    public function addProduct(Request $request) {
       
        $request->validate([
            'image' => 'required|image|max:20000'
        ]);
        $inputs = $request->validate([
            'sku' => ['required'],
            'name' => ['required'],
            'shortDescription' => ['required',],
            'description' => ['required'],
            'cost' => ['required'],
            'quantity' => ['required'],
            'weight' => ['required'],
        ]);

        $resizedImage = Image::make($request->file('image'))->fit(200)->encode('jpeg');
        $isd = uniqid() . '.jpeg';

        Storage::put("public/products/$isd", $resizedImage);

        $request->file('image')->store('public/products');

        $product = Product::create($inputs);
    
        $product->image = $isd;

        $product->save();



        return redirect('/addProduct')->with('success', 'Product has been added to inventory');
    }

    public function editProduct(Product $product, Request $request) {

        $inputs = $request->validate([
            'sku' => ['required'],
            'name' => ['required'],
            'shortDescription' => ['required',],
            'description' => ['required'],
            'cost' => ['required'],
            'quantity' => ['required'],
            'weight' => ['required'],
        ]);


        $product->update($inputs);

        if($request->file('image')) {
            $resizedImage = Image::make($request->file('image'))->fit(200)->encode('jpeg');
            $isd = uniqid() . '.jpeg';
    
            Storage::put("public/products/$isd", $resizedImage);
            
            // $request->file('image')->store('public/products');
            $product->image = $isd;
            $product->save();
        }

        return redirect('/products/'.$product->id )->with('success', 'Product has been edited!');
    }
}
