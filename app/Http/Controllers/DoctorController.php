<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent;
use App\Doctor;

class DoctorController extends Controller
{
    public function index(){
        $doctors = Doctor::orderBy('id','desc')->paginate(5);
        return view("doctor/index")->with("doctors",$doctors);
    }

    public function store(Request $request){
        Doctor::create($request->all());

        return response()->json([
            "status" => "200",
            "message" => "Data Saved Successfully."
        ]);
    }

    public function update(Request $request){
//        dd($request->all());
        if ($request->id){
            Doctor::find($request->id)->update($request->all());
        }
        return redirect()->back()->with("status","Record Updated.");
    }

    public function delete($id){
        Doctor::find($id)->delete();
        return redirect()->back()->with("status","Record Deleted.");

    }

}
