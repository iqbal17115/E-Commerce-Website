<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;
use DB;

class DivisionController extends Controller
{
    public function index(){
        return view('admin.pages.addDivision');
    }

    public function create(Request $request){
        DB::table('divisions')->insert(
            ['name' => $request->division, 'priority' => $request->priority]
        );

        return redirect('/division/show');
    }

    public function show(){
        $divisions=DB::table('divisions')->orderBy('priority', 'asc')->get();
        return view('admin.pages.showDivision', compact('divisions'));
    }

    public function getDivision(Request $request){
        
        $division=DB::table('divisions')->where('id',$request->id)->first();

        return view('admin.pages.editDivision', compact('division'));
        
    }
    
    public function edit(Request $request){
       
        $d=Division::find($request->d_id);
       
        $d->name = $request->division;
        $d->priority = $request->priority;
      

       $d->save();
       return redirect('/division/show');
    }

    public function delete(Request $request){
          
          DB::table('divisions')->where('id', '=', $request->id)->delete();
          DB::table('districts')->where('division_id', '=', $request->id)->delete();
          
          return redirect('/division/show');
    }
}
