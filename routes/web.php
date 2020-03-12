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

/* Exibe os produtos */
Route::get('produtos', 'ProductController@index');
/* Exibe formulario de cadastro */
Route::get('produtos/create', 'ProductController@create');
/* Cadastra no banco */
Route::post('produtos', 'ProductController@store');
/* Exibe formulario de edição */
Route::get('produtos/{id}/edit', 'ProductController@edit');
/* Edita um produto no banco */
Route::put('produtos/{id}', 'ProductController@update');
/* Exibe um produto */
Route::get('produtos/{id}', 'ProductController@show');
/* Deleta um produto */
Route::delete('produtos/{id}', 'ProductController@destroy');

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
