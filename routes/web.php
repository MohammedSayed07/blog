<?php

use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('newsletter', function () {
    try {
        request()->validate([
            'email' => ['required', 'email']
        ]);

        $mailchimp = new \MailchimpMarketing\ApiClient();

        $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us21'
        ]);

        $response = $mailchimp->lists->addListMember("83bcaf239b", [
            'email_address' => request('email'),
            'status' => 'subscribed'
        ]);
    } catch (ValidationException $e) {
        throw $e::withMessages([
            'email' => $e->getMessage()
        ])->redirectTo('/#newsletter');
    } catch (\Exception $e) {
        throw ValidationException::withMessages([
            'email' => 'This email could not be signed up'
        ])->redirectTo('/#newsletter');
    }

    return redirect('/')
        ->with('success', 'You are signed up to our newsletter');
});

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [PostController::class, 'show'] )->name('post');
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store'])->middleware('auth');

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');
