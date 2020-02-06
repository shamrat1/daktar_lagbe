<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;

class DoctorController extends Controller
{
    public function store(Request $request){
        Doctor::create($request->all());

        return response("Saved Successfully.");
    }
}
