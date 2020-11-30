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

// === Auth ===
// Auth::routes();
// === Home ===
Route::get('/', 'MainController@main');
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/main', 'MainController@teste')->name('main');
Route::get('/temp', 'MainController@teste')->name('temp');
Route::get('/cardapio', 'CardapioController@index')->name('cardapio');
// === QR Code Reader ===
// Route::get('/reader', 'ReaderController@index')->name('reader');
// Route::post('reader/request', 'ReaderController@qrCodeRequestPost')->name('reader.request');
// === QR Code ===
// Route::get('/qrCodes','QrCodeController@index')->name('qrCodes.index');
// Route::get('/qrCodes/create','QrCodeController@create')->name('qrCodes.create');
// Route::post('/qrCodes','QrCodeController@store')->name('qrCodes.store');
// Route::get('/qrCodes/{qrCode}','QrCodeController@show')->name('qrCodes.show');
// Route::get('/qrCodes/{qrCode}/edit','QrCodeController@edit')->name('qrCodes.edit');
// Route::put('/qrCodes/{qrCode}','QrCodeController@update')->name('qrCodes.update');
// Route::delete('/qrCodes/{qrCode}','QrCodeController@destroy')->name('qrCodes.destroy');
// === Produtos ===
Route::get('/produtos','ProdutoController@index')->name('produtos.index');
Route::get('/produtos/create','ProdutoController@create')->name('produtos.create');
Route::post('/produtos','ProdutoController@store')->name('produtos.store');
Route::get('/produtos/{produto}','ProdutoController@show')->name('produtos.show');
Route::get('/produtos/{produto}/edit','ProdutoController@edit')->name('produtos.edit');
Route::put('/produtos/{produto}','ProdutoController@update')->name('produtos.update');
Route::delete('/produtos/{produto}','ProdutoController@destroy')->name('produtos.destroy');
// === Preços ===
Route::get('/precos','PrecoController@index')->name('precos.index');
Route::get('/precos/create','PrecoController@create')->name('precos.create');
Route::post('/precos','PrecoController@store')->name('precos.store');
Route::get('/precos/{preco}','PrecoController@show')->name('precos.show');
Route::get('/precos/{preco}/edit','PrecoController@edit')->name('precos.edit');
Route::put('/precos/{preco}','PrecoController@update')->name('precos.update');
Route::delete('/precos/{preco}','PrecoController@destroy')->name('precos.destroy');
// === Categorias ===
Route::get('/categorias','CategoriaController@index')->name('categorias.index');
Route::get('/categorias/create','CategoriaController@create')->name('categorias.create');
Route::post('/categorias','CategoriaController@store')->name('categorias.store');
Route::get('/categorias/{categoria}','CategoriaController@show')->name('categorias.show');
Route::get('/categorias/{categoria}/edit','CategoriaController@edit')->name('categorias.edit');
Route::put('/categorias/{categoria}','CategoriaController@update')->name('categorias.update');
Route::delete('/categorias/{categoria}','CategoriaController@destroy')->name('categorias.destroy');
// === Seções ===
Route::get('/secaos','SecaoController@index')->name('secaos.index');
Route::get('/secaos/create','SecaoController@create')->name('secaos.create');
Route::post('/secaos','SecaoController@store')->name('secaos.store');
Route::get('/secaos/{secao}','SecaoController@show')->name('secaos.show');
Route::get('/secaos/{secao}/edit','SecaoController@edit')->name('secaos.edit');
Route::put('/secaos/{secao}','SecaoController@update')->name('secaos.update');
Route::delete('/secaos/{secao}','SecaoController@destroy')->name('secaos.destroy');
// === Admin ===
Route::get('/admin', 'AuthController@dashboard')->name('admin');
Route::get('/admin/login', 'AuthController@showLoginForm')->name('admin.login');
Route::get('/admin/logout', 'AuthController@logout')->name('admin.logout');
Route::post('/admin/login/do', 'AuthController@login')->name('admin.login.do');

// === TESTS ===
// Route::get('/import', 'ImportController@import')->name('import');

// Route::get('/general-tests', 'TestController@test')->name('generalTests');
