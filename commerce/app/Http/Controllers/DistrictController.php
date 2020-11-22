<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;
use DB;

class DistrictController extends Controller
{
    public function index(){
        $divisions=DB::table('divisions')->orderBy('priority', 'asc')->get();
        return view('admin.pages.addDistrict', compact('divisions'));
    }

    public function create(Request $request){
        DB::table('districts')->insert(
            ['district' => $request->district, 'division_id' => $request->division_id]
        );
        return redirect('/district/show');
    }

    public function show(){
        $districts=DB::table('divisions')->join('districts','divisions.id','=', 'division_id')->get();
        return view('admin.pages.showDistrict', compact('districts'));
    }

    public function getDistrict(Request $request){
        $dis=DB::table('districts')->where('id',$request->id)->first();
        $divisions=DB::table('divisions')->orderBy('priority', 'asc')->get();
        $districts=DB::table('districts')->get();
        return view('admin.pages.editDistrict', compact('dis', 'districts', 'divisions'));
        
    }
    
    public function edit(Request $request){
       
        $d=District::find($request->id);
       
        $d->district = $request->district;
        $d->division_id = $request->division_id;
    
       $d->save();
       return redirect('/district/show');
    }

    public function delete(Request $request){
          
          DB::table('districts')->where('id', '=', $request->id)->delete();
          
          return redirect('/district/show');

    }
}
