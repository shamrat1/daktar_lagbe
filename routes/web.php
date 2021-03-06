<?php
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/doctor','DoctorController@index')->name('doctor.index');
Route::put('/doctor/','DoctorController@update')->name('doctor.update');
Route::delete('/doctor/{id}','DoctorController@delete')->name('doctor.delete');


Route::get('/migrate/refresh',function (){
   Artisan::call("migrate:refresh");
   return redirect('/doctor')->with("status","All Data refreshed.");
});

Route::get('/migrate',function (){
   Artisan::call("migrate");
    return redirect('/doctor')->with("status","Columns migrated successfully.");
});


