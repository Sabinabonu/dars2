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

Route::get('/begin7/{r}', function($r){
    $l=2*pi()*$r;
    $s=pi()*pow($r,2);
     return 'Uzunligi : '.$l."<br> Yuzasi : ".$s;
 });

 Route::get('/begin8/{a}/{b}', function($a,$b){
    $p=($a+$b)/2;
  
    return "O`rta arifmetik : ".$p;

});

Route::get('/begin9/{a}/{b}', function($a,$b){
    $p=sqrt($a+$b);
  
    return "O`rta geometrk : ".$p;

});

Route::get('/begin10/{a}/{b}', function($a,$b){
    $x = $a + $b;
    $y = $a * $b;
    $a=$a*$a;
    $b=$b*$b;  
    return "Yig`indisi : ".$x. '<br> Ko`paytmasi : '. $y. "<br> Har bir sonning kvadrati:".$a."<br>".$b;

});


Route::get('/int1/{l}', function($l){
    $n=floor($l/100);
    return $n;
});

Route::get('/int2/{m}', function($m){
    $n=floor($m/1000);
    return $n;
});

Route::get('/int3/{x}', function($x){
    $n=floor($x/1024);
    return $n;
});

Route::get('/int4/{a}/{b}', function($a, $b){
    $n=floor($a/$b);
    return $n;
});

Route::get('/int5/{a}/{b}', function($a, $b){
    $n=floor($a/$b);
    $x=$a-$n*$b;
    return $n."<br>".$x;
});

Route::get('/int6/{n}', function($n){
    $a=floor($n/10);
    $b=$n%10;
    return "O'nlar xonasidagi son = ".$a."<br> Birlar Xonasidagi son=".$b;
});


Route::get('/int7/{n}', function($n){
    $a=floor($n/10);
    $b=$n%10;
    $x=$a+$b;
    return "Raqamlar yihindisi = ".$x;
});

Route::get('/int8/{n}', function($n){
    $a=floor($n/10);
    $b=$n%10;
    
    return $b.$a;
});

Route::get('/int9/{n}', function($n){
    $a=floor($n/100);
    
    
    return "Yuzlar Homasidagi son=". $a;
});

Route::get('/int10/{n}', function($n){
    $a=floor($n/10)%10;
    $b=$n%100;
    
    return "O'nliklar Homasidagi son=". $a."<br>Birliklar honasidagi son=".$b;
});

?>