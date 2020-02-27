<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/empresa', function () {
    return 'Sobre a empresa';
});

Route::get('contato', function () {
    return 'contato da empresa';
});
