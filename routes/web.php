<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\booking;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/',function(){
    $val = 10 ;
    $name = 'younes';
    $studant = ['hassane','iness','younes','AEK','houcine','khaled'];

    return view('hello')->with('nameInBlade',$name)->with('value',$val)->with('studant',$studant) ;
}
);
Route::get('/booking',[booking::class,'index']);