<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------`
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function(){
    return "<h1>About page</h1>";
});

Route::get('/home',[HomeController::class,'index']);
Route::get('/page/about',[PageController::class,'show']);
Route::resource('/posts', PostController::class,['parameters'=>['posts'=>'slug']]);

Route::fallback(function(){
    // return redirect()->route('home');
    abort(404,'404 Page not Found');
});




