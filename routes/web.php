<?php

Route::get('login', function () {
    return 'login';
})->name('login');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/empresa', function () {
    return 'Sobre a empresa';
});

Route::get('contato', function () {
    return view('contato');
});

/* Rotas criadas manualmente */
/*
Route::get('produtos', 'ProductController@index');
Route::get('produtos/create', 'ProductController@create');
Route::post('produtos', 'ProductController@store');
Route::get('produtos/{id}/edit', 'ProductController@edit');
Route::put('produtos/{id}', 'ProductController@update');
Route::get('produtos/{id}', 'ProductController@show');
Route::delete('produtos/{id}', 'ProductController@destroy');
*/
Route::resource('produtos', 'ProductController');

/* Rotas criadas usando resource */
//Route::resource('categorias', 'CategoryController')->middleware('auth');
Route::resource('categorias', 'CategoryController');

/*
Route::get('produtos/{id?}', function ($id = '') {
    return "lista de produtos do id: {$id}";
});*/

Route::get('categorias/{param_1}', function($param_1) {
    return "Produtos da categoria: {$param_1}";
});

Route::get('redirect1', function () {
    return redirect('redirect2');
});

Route::get('redirect2', function () {
    return 'redirect2';
}); 
/*
Route::get('admin/dashboard', function () {
    return 'Home admin';
})->middleware('auth');
*/
Route::middleware([])->prefix('admin')->group(function(){
    Route::get('dashboard', function () {
        return 'Home admin';
    });
    
    Route::get('financeiro', function () {
        return 'Admin do financeiro';
    });
    
    Route::get('produtos', function () {
        return 'Admin dos produtos';
    });
});
