<?php

use App\Http\Controllers\Web\UserConroller;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'));

// --- Authenticated routes
Route::group([
    'middleware' => ['auth'],
    'as' => 'dshb.',
    'prefix' => 'dashboard'
], function () {


    /**
     * user resource (CRUD)
     * m_user => explicit binding define in AppServiceProvider
     */
    Route::get('user/datatable', [UserConroller::class, 'data'])->name('user.name');
    Route::resource('user', UserConroller::class)->parameters(['user' => 'm_user']);

    Route::get('/', [App\Http\Controllers\Web\DashboardController::class, 'index'])->name('index');
});
