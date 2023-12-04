<?php

namespace App\Http\Controllers;

use App\Imports;
use App\helpers\Util;
use App\Models\Product;
use App\Imports\ExcelImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function search(Request $request) {
        $inputs = $request->validate([
            'text' => [],
        ]);

        $products = Product::search($inputs['text'])->get();
        return view("products", ['products' => $products]);
    }

    public function products(Request $request) {
        $products = Product::orderBy("id","desc")->paginate(10);
        $count = Product::orderBy("id","desc")->get();
        return view("products", ['products' => $products, 'count' => count($count)]);
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
            'shortDescription' => ['required'],
            'brand' => ['required'],
            'type' => ['required'],
            'productType' => ['required'],
            'subcategory' => ['required'],
            'unboxing' => ['required'],
            'description' => ['required'],
            'partNumber' => ['required'],
            'colors' => ['required'],
            'cost' => ['required'],
            'quantity' => ['required'],
            'weight' => ['required'],
        ]);

        
        $newUrl = Util::convertYoutubeUrlToEmbedUrl($inputs['unboxing']); 
        $inputs['unboxing'] = $newUrl;

        $resizedImage = Image::make($request->file('image'))->fit(300)->encode('jpeg');
        $isd = uniqid() . '.jpeg';

        Storage::put("public/products/$isd", $resizedImage);

        $request->file('image')->store('public/products');

        $product = Product::create($inputs);
    
        $product->image = $isd;

        $product->save();



        return redirect('/addProduct')->with('success', 'Product has been added to inventory');
    }


    public function import(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'file' => ['required'],
        ]);
 
        // Get the uploaded filez
        $file = $request->file('file');
 
        // Process the Excel file
        Excel::import(new ExcelImport, $file);

        return redirect()->back()->with('success', 'Excel file imported successfully!');
    }

    public function editProduct(Product $product, Request $request) {



        $inputs = $request->validate([
            'sku' => ['required'],
            'name' => ['required'],
            'shortDescription' => ['required',],
            'description' => ['required'],
            'type' => ['required'],
            'deal' => [],
            'discountCost' => ['required'],
            'productType' => ['required'],
            'brand' => ['required'],
            'unboxing' => ['required'],
            'subcategory' => ['required'],
            'partNumber' => ['required'],
            'colors' => ['required'],
            'cost' => ['required'],
            'quantity' => ['required'],
            'weight' => ['required'],
        ]);

        $newUrl = Util::convertYoutubeUrlToEmbedUrl($inputs['unboxing']); 
        $inputs['unboxing'] = $newUrl;
        $product->update($inputs);

        if($request->file('image')) {
            $resizedImage = Image::make($request->file('image'))->fit(300)->encode('jpeg');
            $isd = uniqid() . '.jpeg';
    
            Storage::put("public/products/$isd", $resizedImage);
            
            // $request->file('image')->store('public/products');
            $product->image = $isd;
            $product->save();
        }

        return redirect('/products/'.$product->id )->with('success', 'Product has been edited!');
    }

    public function deleteProduct (Product $product) {
        $product->delete();
        return redirect('/products')->with('success', 'Product has been deleted!');
    }
}
