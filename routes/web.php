<?php

use App\Http\Controllers\DataHandleController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\ProductController;
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
    return view('admin/product/list');
});

//Route::get('/', [HelloController::class,'helloWorld']);
Route::get('/data-handle/{id}/path', [DataHandleController::class,'handlePathVariable']);
Route::get('/data-handle/query-string', [DataHandleController::class,'handleQueryString']);
Route::post('/data-handle/form', [DataHandleController::class,'processForm']);
Route::get('/data-handle/form', [DataHandleController::class,'handleForm']);

Route::get('/product-demo/demo1', [ProductController::class,'demo1']);
Route::get('/product-demo/demo2', [ProductController::class,'demo2']);
Route::get('/product-demo/demo3', [ProductController::class,'demo3']);
Route::get('/product-demo/demo4', [ProductController::class,'demo4']);

