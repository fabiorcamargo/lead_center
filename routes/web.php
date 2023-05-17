<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Models\States;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/first/{slug}', function () {
    return view('first');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/page/create', function(){
        $states = States::all();
        return view('page_create')->with(['states'=>$states]);
    });
    Route::post('/page/create', [PageController::class, 'create'])->name('page.create');
    Route::get('/city/{id}', [PageController::class, 'city'])->name('city');
});

require __DIR__.'/auth.php';
