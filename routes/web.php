<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
use App\Http\Middleware\CheckAge;

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

Route::get('/website', function () {
    return view('Admin/layout/index');
});

Route::get('/hello-world', function()
{
    return view('hello-world');
});

Route::get('/Hoangca', function()
{
    return view('hello-world');
});
Route::group(['prefix' =>'product'], function() {
    Route::get('/add', function()
    {
        return view('addproduct');
    });
    Route::get('/edit', function()
    {
        return view('editproduct');
    });
});
Route::group(['prefix' =>'user'], function() {
    Route::get('/add', function()
    {
        return view('User.adduser');
    });
    Route::get('/edit', function()
    {
        return view('User.edituser');
    });
    Route::get('/delete', function()
    {
        return view('User.deleteuser');
    });
});

// Dùng controller
Route::get('/',[Mycontroller::class,'hoangca']);

// Dùng middleware
Route::get('age/{age}', function ($age) 
{
    return $age;
})->middleware(CheckAge::class);
// Dùng 
Route::get('/',[Mycontroller::class,'getData']);

Route::get('/Hoangca.', function()
{
    return view('postForm');
});

Route::get('/postLogin',[MyController::class,'getForm']);

Route::post('/postLogin',[MyController::class,'postForm'])->name('postForm');
// tạo bảng trong laravel

Route::get('category', function()
{ 
    Schema::create('category', function($table)
    { 
        $table->increments('category_id'); 
        $table-> string('category_name'); 
    }); 
    echo "Đã tạo bảng category thành công";
});
Route::get('a', function()
{ 
    Schema::create('hoangca', function($table)
    { 
        $table->increments('Id'); 
        $table-> string('name');
        $table ->foreign('Id')->references('category_id')->on('category');

    }); 
    echo"Đã thêm cột category_id";
});
