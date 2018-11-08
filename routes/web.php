<?php

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
          
       return view ('welcome');
});


Route::get(('/formulario'),function() {
    return view('archivos.formularioPDF');
});

Route::post('generar-pdf', 'PDFController@generarPDF')->name('generar');
Route::post('mostrar-pdf', 'PDFController@index');

Route::resource('mail', 'CorreoController');
