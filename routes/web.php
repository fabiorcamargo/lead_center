<?php

use App\Http\Controllers\LeadController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Models\Page;
use App\Models\States;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;


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
Route::get('/city/{id}', [PageController::class, 'city'])->name('city');

Route::get('/page/show/{slug}', function ($slug) {
    $fbclid = ((string) Str::uuid());
    Cookie::queue('fbid', $fbclid, 0);
    $page = Page::where('slug', $slug)->first();
    $states = States::orderBy('name')->get();
    return view('page_show')->with(['page' => $page, 'states' => $states]);
})->name('page.show');

Route::get('/page/end/', function () {
    
    return view('page_end');
})->name('page.end');

Route::post('/lead/create/', [LeadController::class, 'create'])->name('lead.create');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/page/create', function(){
        $states = States::orderBy('name')->get();
        return view('page_create')->with(['states'=>$states]);
    });
    Route::get('/page/list', function(){
        $pages = Page::orderBy('created_at')->get();
        return view('page_list')->with(['pages'=>$pages]);
    });
    Route::post('/page/create', [PageController::class, 'create'])->name('page.create');
    
});

require __DIR__.'/auth.php';
