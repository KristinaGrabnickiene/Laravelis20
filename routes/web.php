<?php

use Illuminate\Http\Request;

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


Route::get('/news', 'Newscontroller@index')->name('news.index'); 


// Kelias konkrecios naujienos atvaidavimui
/* localhost/naujiena.php?id=5 */
Route::get("/news/{id}", "NewsController@show")->name('news.show');


Route::get('/skaiciuokle', 'HomeController@skaiciuokle');


// Route su pavadinimu
Route::post('/suma', 'HomeController@suma')->name('suma');


// Paprastas kelias
Route::get('/about-us', function() {
    return view('contacts');
});


// Ieskome controllerio failio /app/http/controllers folderyje
// @index nurodo kokia funkcija naudosime is controllerio
Route::get('/kontaktai', 'HomeController@index');

// // Kelias su parametrais
// Route::get('/naujienos/{id}', function($id) {
//     echo $id;
//     return view('about');
// });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
