<?php

use App\Http\Controllers\HomeController;
use App\Mail\ContactMe;
use App\Models\Article;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [HomeController::class, 'redirect']);

Route::get('/create', function () {
    return view('article.create');
});



Route::post('/create', function () {
    $article = new Article();
    $article->name = request('name');
    $article->address = request('address');
    $article->number = request('number');
    $article->email = request('email');
    $article->subject = request('subject');
    $article->body = request('body');
    $article->save();
    // $data = request(['name', 'address', 'number', 'email', 'body']);

    // return $data;

    Mail::to('mappiyadelivery@gmail.com')
        ->send(new ContactMe($article));

    return redirect('/create')
        ->with('flash', 'Message Send Successfully');
});
