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

    Route::post(
        'metode/naivebayes/predict',
        [App\Http\Controllers\Web\MetodeController::class, 'naivebayes_predict']
    )->name('metode.naivebayes.predict');

    Route::post(
        'metode/naivebayes/proses',
        [App\Http\Controllers\Web\MetodeController::class, 'naivebayes_proses']
    )->name('metode.naivebayes.proses');

    Route::get(
        'metode/naivebayes',
        [App\Http\Controllers\Web\MetodeController::class, 'naivebayes']
    )->name('metode.naivebayes');

    Route::post(
        'metode/confusionmatrix/proses',
        [App\Http\Controllers\Web\MetodeController::class, 'confusionmatrix_proses']
    )->name('metode.confusionmatrix.proses');

    Route::get(
        'metode/confusionmatrix',
        [App\Http\Controllers\Web\MetodeController::class, 'confusionmatrix']
    )->name('metode.confusionmatrix');

    Route::get(
        'dataset/datatable',
        [App\Http\Controllers\Web\DatasetController::class, 'data']
    )->name('dataset.datatable');

    Route::resource(
        'dataset',
        App\Http\Controllers\Web\DatasetController::class
    )->parameters(['dataset' => 'm_dataset']);

    Route::get(
        'question/datatable',
        [App\Http\Controllers\Web\QuestionController::class, 'data']
    )->name('question.datatable');

    Route::resource(
        'question',
        App\Http\Controllers\Web\QuestionController::class
    )->parameters(['question' => 'm_question']);

    /**
     * user resource (CRUD)
     * m_user => explicit binding define in AppServiceProvider
     */
    Route::get('user/datatable', [UserConroller::class, 'data'])->name('user.datatable');
    Route::resource('user', UserConroller::class)->parameters(['user' => 'm_user']);

    Route::get('/data', [App\Http\Controllers\Web\DashboardController::class, 'data'])->name('data');
    Route::get('/', [App\Http\Controllers\Web\DashboardController::class, 'index'])->name('index');
});
