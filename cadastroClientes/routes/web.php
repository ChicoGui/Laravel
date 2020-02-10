
<?php

Route::get('/', 'PagesController@home');

Route::resource('clientes', 'ClientesController');
Route::resource('contatos', 'ContatosClientesController');

