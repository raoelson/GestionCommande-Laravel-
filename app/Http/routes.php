<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Auth\AuthController@getLogin');
Route::get('home', 'ProduitController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


/*route produit*/
Route::resource('produit', 'ProduitController',['only'=>['create','index','edit']]);
Route::post('/produit.update','ProduitController@update');
Route::get('/produit.new',['as'=>'form','uses'=>'ProduitController@form']);
Route::get('/produit.delete/{id}',['as' => 'delete', 'uses' => 'ProduitController@destroy'
]);
/*fin*/

/*route client*/
Route::resource('client', 'ClientController',['only'=>['create','index','edit']]);
Route::post('/client.update','ClientController@update');
Route::get('/client.delete/{id}',['as' => 'delete.client', 'uses' => 'ClientController@destroy']);
Route::get('/client.new',['as'=>'form_client','uses'=>'ClientController@form']);
/*fin*/


/*route commandes*/
Route::resource('commandes', 'CommandeController',['only'=>['create','index','edit']]);
Route::get('/commandes.new',['as'=>'form_commandes','uses'=>'CommandeController@form']);
Route::get('/commandes.delete/{id}',['as' => 'delete_commandes', 'uses' => 'CommandeController@destroy']);
Route::post('/commandes.update','CommandeController@update');
/*fin*/


