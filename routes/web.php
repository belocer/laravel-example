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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return '<h1>Hello, i will give you a million dollars.</h1>';
});

Route::get('/home', function () {
    return view('home', ['var' => 11116]);
})->name('home');

/*Route::get('/contact', function () {
    return view('contact');
});

Route::post('/send-email', function () {
    if(!empty($_POST)){
        dump($_POST);
    }
    return 'Send Email';
});*/

Route::match(['post', 'get'], '/contact2', function () {
    if(!empty($_POST)){
        dump($_POST);
    }
    return view('contact');
})->name('contact');

Route::view('/test', 'test', ['text' => '6666']);

Route::redirect('/about', '/contact2');
//Route::permanentRedirect('/about', '/contact2');

Route::get('/post/{id?}', function ($id) {
    return "Post $id";
});

Route::get('/postr/{slug}/{id}', function ($slug, $id) {
    return "Postr $id === ||| === $slug";
})->where(['slug' => '[A-Za-z0-9-]+', 'id' => '[0-9]+']);
//})->where('id', '[0-9]+');
// Так же указывая в провайдере RouteServiceProvider.php

// Что бы не показывать 404
Route::fallback(function(){
    //return redirect()->route('home');
    // Показать свою страницу 404 ошибки
    abort(404, 'Oops! Page not found...');
});