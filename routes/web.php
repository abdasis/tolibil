<?php

use App\Http\Controllers\SocialiteController;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\MataKuliah\Create;
use App\Http\Livewire\MataKuliah\Edit;
use App\Http\Livewire\MataKuliah\Index;
use App\Http\Livewire\MataKuliah\Show;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::group(['prefix' => 'mata-kuliah'], function () {
        Route::get('/', Index::class)->name('mata-kuliah.index');
        Route::get('/create', Create::class)->name('mata-kuliah.create');
        Route::get('/{mataKuliah}/edit', Edit::class)->name('mata-kuliah.edit');
        Route::get('/{mataKuliah}/detail', Show::class)->name('mata-kuliah.show');
    });
});

Route::get('auth/{provider}', [SocialiteController::class, 'redirectToProvider'])->name('auth.socialite');
Route::get('auth/{provider}/callback', [SocialiteController::class, 'handleProviderCallback'])->name('auth.socialite.callback');
