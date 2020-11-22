<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use DB;
use File;
class BrandController extends Controller
{
    public function index(){
        $brand=DB::table('brands')->orderBy('id','desc')->get();
        return view('admin.pages.createBrand', compact('brand'));
    }

    public function create(Request $request){
        
        $c=new Brand;
       
        $c->name = $request->brand;
        $c->description = $request->description;

       $name = time().rand(1,100).'.'.$request->file->extension();
       $request->file->move(public_path('product_img'), $name); 
       $c->image= 'product_img/'.$name;
       $c->save();
       return redirect()->route('admin.show.brand');
    }

    public function show(){
        $brand=DB::table('brands')->get();
        return view('admin.pages.showBrand')->with('brand', $brand);
    }

    public function getBrand(Request $request){
        
        $brand=DB::table('brands')->where('id',$request->id)->first();

        return view('admin.pages.editBrand', compact('brand'));
        
    }
    
    public function edit(Request $request){
       
        $b=Brand::find($request->c_id);
       
        $b->name = $request->brand;
        $b->description = $request->description;
       
        if($request->image){
         if(File::exists($b->image)){

          File::delete($b->image);

         }
       $name = time().rand(1,100).'.'.$request->image->extension();
       $request->image->move(public_path('product_img'), $name); 
       $b->image= 'product_img/'.$name;
        }

       $b->save();
       return redirect()->route('admin.show.brand');
    }

    public function delete(Request $request){

       $brand=DB::table('brands')->where('id',$request->id)->first();
       
        if(!is_null($brand)){
          DB::table('brands')->where('id',$brand->id)->delete();
        }
        return redirect()->route('admin.show.brand');
    }
}
