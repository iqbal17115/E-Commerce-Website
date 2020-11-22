<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use DB;
use File;
class CategoryController extends Controller
{
    public function index(){
        $category=DB::table('categories')->where('parent_id', NULL)->orderBy('name','desc')->get();
        return view('admin.pages.createCategory')->with('category', $category);
    }

    public function create(Request $request){
        
        $c=new Category;
       
        $c->name = $request->category;
        $c->description = $request->description;
        $c->parent_id = $request->cat_id;

       $name = time().rand(1,100).'.'.$request->file->extension();
       $request->file->move(public_path('product_img'), $name); 
       $c->image= 'product_img/'.$name;
       $c->save();
       return redirect()->route('admin.show.category');
    }

    public function show(){
        $category=DB::table('categories')->get();
        return view('admin.pages.showCategory')->with('category', $category);
    }

    public function getCategory(Request $request){
        
        $category=DB::table('categories')->where('id',$request->id)->first();
        $category1=DB::table('categories')->where('parent_id', NULL)->orderBy('name','desc')->get();

        return view('admin.pages.editCategory', compact('category', 'category1'));
        
    }
    
    public function edit(Request $request){
       
        $c=Category::find($request->c_id);
       
        $c->name = $request->category;
        $c->description = $request->description;
        $c->parent_id = $request->cat_id;
        
        if($request->image){
         if(File::exists($c->image)){

          File::delete($c->image);

         }
       $name = time().rand(1,100).'.'.$request->image->extension();
       $request->image->move(public_path('product_img'), $name); 
       $c->image= 'product_img/'.$name;
        }

       $c->save();
       return redirect()->route('admin.show.category');
    }

    public function delete(Request $request){

       $cat=DB::table('categories')->where('id',$request->id)->first();
       
        if(!is_null($cat)){
           
          if($cat->parent_id == NULL){
           
           $sub=DB::table('categories')->where('parent_id',$cat->id)->get();

           foreach($sub as $sub){
           
            if(File::exists($sub->image)){
                File::delete($sub->image);
            }
            DB::table('categories')->where('id',$sub->id)->delete();
           
           }

          }
          DB::table('categories')->where('id',$cat->id)->delete();
        }
        return redirect()->route('admin.show.category');
    }

    public function search($id){
        $products=DB::table('products')->where('category_id','=',$id)->orderBy('id', 'desc')->get();
        return view('/customer/pages/searchByCategory', compact('products','id'));
    }
}
