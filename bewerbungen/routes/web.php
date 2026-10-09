<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BewerbungController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function(){
return 'Hallo world!';
});


// Route::get('/bewerbungen', [BewerbungController::class, 'index']);

// Route::post('/bewerbungen', [BewerbungController::class, 'store']);

// Route::get('/bewerbung-neu', [BewerbungController::class, 'create']);

// //delete
// Route::delete('bewerbungen/{id}',[BewerbungController::class, 'destroy']);

// //edit
// Route::get('/bewerbungen/{id}/edit', [BewerbungController::class, 'edit']);
// Route::put('/bewerbungen/{id}', [BewerbungController::class, 'update']);

Route::resource('bewerbungen', BewerbungController::class);