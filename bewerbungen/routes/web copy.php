<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BewerbungController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function(){
return 'Hallo world!';
});

Route::get('/bewerbungen', [BewerbungController::class,'index']);

Route::get('/bewerbungen/neu' , [BewerbungController::class, 'create']);
Route::post('/bewerbungen', [BewerbungController::class,'store']);