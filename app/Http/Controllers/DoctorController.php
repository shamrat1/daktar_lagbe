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

        $this->validate($request,[
            'name' => 'required',
            'lat'=> 'required',
            'long' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg'
        ]);
        if ($request->hasFile("file")){
            $d_name = str_replace(' ','-',$request->name);
            $name="doctor-$d_name-".$request->file('file')->getClientOriginalName();
            $request->file->move(public_path().'/images/', $name);
            $request->image = $name;
            $request->merge(["image"=>"$name"]);
        }

//        dd($request->all());
        Doctor::create($request->all());
        return response()->json([
            "status" => "200",
            "message" => "Data Saved Successfully.",

        ]);
    }

    public function update(Request $request){

        if ($request->id){
            Doctor::find($request->id)->update($request->all());
            return redirect()->back()->with("status","Record Updated.");
        }
        return redirect()->back()->with("error","Problem updating data.");
    }

    public function delete($id){
        Doctor::find($id)->delete();
        return redirect()->back()->with("status","Record Deleted.");

    }

}
