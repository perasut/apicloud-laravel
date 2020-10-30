<?php
use Illuminate\Http\Request;

Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');
Route::post('recover', 'AuthController@recover');
Route::resource('/products', 'ProductsController')->except([
    'create', 'edit'
]);

    Route::group(['middleware' => ['jwt.auth']], function() {
    Route::get('logout', 'AuthController@logout');
    
    // Route::get('test', function(){
    //     return response()->json(['foo'=>'bar']);
    // });

    // Route::get('/categorias/select', 'CategoriaController@select');
});