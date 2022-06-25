<?php

use Illuminate\Support\Facades\Route;
use App\Models\Comment;
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

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/eramgarden', function () {
    return view('eramGardenOfShiraz');
});

Route::post('/eramgarden', function () {
    $store = new Comment();

    $store->firstname=request('firstname');
    $store->lastname=request('lastname');
    $store->email=request('email');
    $store->text=request('text');

    //error_log($store);
    $store->save();

    return redirect('/eramgarden') ->with('msgg','comment you with successfullr save shod , thanks for comment you for in place');
});

Route::get('/tourism', function () {
    return view('tourisms');
});
Route::get('/detail', function () {
    //$data =Comment::all();
    $data =Comment::orderBy('firstname')->get();

    //$name = request('name');
    return view('details' ,[
        "data" => $data,
        "name" => request('name')
    ]);  
});

Route::get('/detail/{id}', function ($id) {
    $resivedata = Comment::findOrFail($id);
    //$name = request('name');
    return view('detailsperson' ,["resive"=>$resivedata]);  
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
