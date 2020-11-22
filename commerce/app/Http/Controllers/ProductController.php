<?php

namespace App\Http\Controllers;

use App\Models\Product;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Routing\Redirector;
use Image;
use Str;

class ProductController extends Controller
{
    public function allProduct(Request $request){
        $products=DB::table('products')->orderBy('id', 'desc')->get();

        return view('customer.pages.customer')->with('products',$products);
    }
    
    public function index(){
       return view('admin.pages.createProduct');  
    }

    public function create(Request $request){

                 $p=new Product;
       
                 $p->category_id = $request->category_id;
                 $p->brand_id = $request->brand_id;
                 $p->title = $request->title;
                 $p->description = $request->description;
                 $p->slug =Str::slug($request->title, '-');
                 $p->quantity = $request->quantity;
                 $p->price = $request->price;
                 $p->admin_id = 1;

                 $p->save();
           
        
        if(count( $request->file)>0 )
        {
           foreach($request->file as $file)
           {   
               $name = time().rand(1,100).'.'.$file->extension();
               $file->move(public_path('product_img'), $name);  
               DB::table('product_images')->insert([
                   [
                       'product_id'=>$p->id,
                       'image'=>'product_img/'.$name
                   ]
               ]);
           }
        }


        return view('admin.admin');
       
     }

     public function showProduct(){
        $product=DB::table('products')->orderBy('id','desc')->get();
        return view('admin.pages.showProduct')->with('products', $product);
     }

     public function getProduct(Request $request){

        $product=DB::table('products')->where('id','=',$request->id)->first();
        return view('admin.pages.editProduct')->with('product',$product);
        
     }

     public function editProduct(Request $request){
          DB::table('products')
          ->where('id','=',$request->id)
          ->update(
              ['category_id'=>$request->category_id, 'brand_id'=>$request->brand_id, 'title' => $request->title, 'description' => $request->description, 'price' => $request->price, 'quantity' => $request->quantity]
          );
 
          return redirect()->route('admin.product.show');
     }

     public function deleteProduct(Request $request){
        DB::table('products')->where('id','=',$request->id)->delete();
        return redirect()->route('admin.product.show');
     }

     public function show($slug){
         $images=DB::table('products')->join('product_images','product_id','products.id')->where('slug','=', $slug)->select('product_images.*')->get();
         $title=DB::table('products')->where('slug','=', $slug)->first();
         return view('customer.pages.showProduct', compact('images', 'title'));
     }

     public function search(Request $request){
         $search=$request->search;
        $products=DB::table('products')
        ->orWhere('title','like', '%'.$search.'%')
        ->orWhere('description','like', '%'.$search.'%')
        ->orWhere('price','like', '%'.$search.'%')
        ->orWhere('quantity','like', '%'.$search.'%')
        ->orderBy('id', 'desc')->get();

        return view('customer.pages.search', compact('search', 'products'));
    }
    
}
