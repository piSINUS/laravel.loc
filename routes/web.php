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

// Route::get('/', function () { 
//     return view('home');
// })->name('home'); НАпрямую к блейду без контроллера

// Route::get('/about', function(){
//     return view('home');
// });

Route::get('/',[HomeController::class,'index'])->name('home');// рут через контролер к странице
Route::get('/page/about',[PageController::class,'show'])->name('page.about');

Route::resource('/posts', PostController::class,['parameters'=>['posts'=>'slug']]);

Route::fallback(function(){
    // return redirect()->route('home');
    abort(404,'404 Page not Found');
});




