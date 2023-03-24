<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/begin1/{a}', function($a){
    $p=4*$a;
    return $p;
});
Route::get('/begin2/{a}', function($a){
    $s=$a*$a;
    return $s;
});
Route::get('/begin3/{a}/{b}', function($a,$b){
    $p=2*($a+$b);
    $s=$a*$b;
    return "peremetr:".$p."<br> Yuzasi:".$s;

});

Route::get('/begin4/{d}', function($d){
    $l=pi()*$d;
    return $l;
});

Route::get('/begin5/{a}', function($a){
    $s=6*$a*$a;
    $v=pow($a,3);
    return "Hajmi:".$v."<br> To'la sirti:".$l;
});
Route::get('/begin6/{a}/{b}/{c}', function($a,$b,$c){
   $s=2*($a*$b+$b*$c+$a*$c);
    return 'To`la sirt:'.$s."<br> Hajmi:".$v;
});
