<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent;
use Illuminate\Support\Facades\File;
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
            'long' => 'required'

        ]);
        $inputs = $request->all();
        if (isset($inputs['image'])){
            $inputs['image'] = $this->imageOperation($inputs);
        }
//        dd($inputs);
        Doctor::create($inputs);
        return response()->json([
            "status" => "200",
            "message" => "Data Saved Successfully.",

        ]);
    }

    public function update(Request $request){
//        dd($request->all());
        if ($request->id){
            $inputs = $request->all();
            if ($request->hasFile("image")){

                //unlinking existing image
                $currentImage = Doctor::find($request->id)->first();
                if (File::exists("/images/$currentImage->image")){
                    File::delete("/images/$currentImage->image");
                }
                // Done Unlinking

                // renaming and moving image
                $name="doctor-$request->name-".$request->file('image')->getClientOriginalName();
                $request->image->move(public_path().'/images/', $name);

                $inputs['image'] = $name;
                // done renaming and moving
            }
//            dd($request->image);
            Doctor::find($request->id)->update($inputs);
            return redirect()->back()->with("status","Record Updated.");
        }
        return redirect()->back()->with("error","Problem updating data.");
    }

    public function delete($id){
        Doctor::find($id)->delete();
        return redirect()->back()->with("status","Record Deleted.");

    }
    public function imageOperation($input){
        $imageFile = base64_decode($input['image']);
        // START:- to know mime type
        $f = finfo_open();
        $mime_type = finfo_buffer($f, $imageFile, FILEINFO_MIME_TYPE);
        // END:-
        $tmpFilePath=sys_get_temp_dir().'/'.uniqid();
        //write the image to it
        file_put_contents($tmpFilePath, $imageFile);
        // START:- Saving Image
        $d_name = str_replace(' ','-',$input['name']);
        $name = "doctor-$d_name-".time().'.'.str_replace("image/","",$mime_type);
        File::move($tmpFilePath, public_path("images/$name"));
        return $name;
        // END:-
    }

}
