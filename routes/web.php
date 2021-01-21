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

// Route::get('/', function () {
//     return view('project');
// });
Route::get('users', function(){
    return 'user screen';
})->name('user');
Route::get('product/{id}', function($id){
    return 'product screen';
})->name('product.show');
Route::get('catog/{id}', function($id){
    return 'manager catog ID: '.$id;
})->name('catog.show');
Route::get('product/{id}/catog/{catogID}', function($id, $catogID){
	return 'detailed product '.$id.' catog id '.$catogID;
});
Route::get('subCatog/{id}/catog/{catogID}', function($id, $catogID){
    return 'manager subCatog: '.$id.'+ catogID: '.$catogID;
})->name('subCatog.show.catog');
// Route::prefix('backend')->namespace('Backend')->group(function(){
//     Route::get('user-management', 'UserController@index')->name('backend.user');
//     Route::get('product-management', 'ProductController@index')->name('backend.product');
//     Route::get('catog-management', 'CatogController@index')->name('backend.catog');
//     Route::get('subCatog-management', 'SubcatogController@index')->name('backend.subCatog');
// });
Route::group(['prefix'=>'backend', 'namespace'=>'Backend'], function(){
	Route::get('user-management', 'UserController@index')->name('backend.user.index');
    Route::get('user/create', 'UserController@create')->name('backend.user.create');
    Route::post('user', 'UserController@store')->name('backend.user.store');
    Route::get('product-management', 'ProductController@index')->name('backend.product');
    Route::get('/','DashboardController@index')->name('backend.dashBoard');

    Route::get('product-management', 'ProductController@index')->name('backend.product');
    Route::get('catog-management', 'CatogController@index')->name('backend.catog');
    Route::get('subCatog-management', 'SubcatogController@index')->name('backend.subCatog');
});

// Route::resource('admin', 'Backend/adminController')->only(['edit','index','update']);