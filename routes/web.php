<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Carbon;
use Alkoumi\LaravelHijriDate\Hijri;


Route::get('ping', function (){
    $mailchimp = new \MailchimpMarketing\ApiClient();
    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us13'
    ]);
    $response = $mailchimp->ping->get();
    dd($response);
});

Route::get('/', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::post('posts/{post:slug}/comments', CommentController::class);

Route::middleware('can:admin')->group( function () {
    Route::get('admin/posts', [AdminPostController::class, 'index']);
    Route::get('admin/posts/create', [AdminPostController::class, 'create']);
    Route::post('admin/posts', [AdminPostController::class, 'store']);
    Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit']);
    Route::patch('admin/posts/{post}', [AdminPostController::class, 'update']);
    Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy']);
});
Route::get('tailwind3', function () {
    return view('tailwind3');
});

//Route::resource('admin/posts', AdminPostController::class)->except('show');


Route::get('test', function () {

    
});




