<?php

use App\Http\Controllers\LeadController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Models\Lead;
use App\Models\Page;
use App\Models\States;
use Carbon\Carbon;
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
Route::domain('premilitar.' . env('APP_URL'))->group(function () {
    Route::get('/posts', function () {
        dd('sim');
        return 'Second subdomain landing page';
    });
});

Route::domain('{account}'.env('APP_URL'))->group(function () {
    Route::get('/test', function (string $account, string $id) {
        dd($account);
    });
});

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

Route::get('/page/leader/', function () {
    
    $states = States::orderBy('name')->get();
    return view('page_leader')->with(['states' => $states]);

})->name('page.leader');

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
    })->name('page.create');
    Route::get('/page/list', function(){
        $pages = Page::orderBy('created_at')->get();
        $seven = Carbon::today()->subDays(7);
        $tree = Carbon::today()->subDays(3);
        $yesterday = Carbon::yesterday();
        $today = Carbon::today();
        /*$today =  Lead::where(
            'page_id', '=', 1
        )->where(
            'created_at', '>=', $date
        )->get();

        dd($today);*/

        return view('page_list')->with(['pages'=>$pages, 'seven'=>$seven]);
    })->name('page.list');
    Route::post('/page/create', [PageController::class, 'create'])->name('page.create');
    Route::get('/lead/list/{id}', function($id){
        $lead = Lead::where('page_id', $id)->orderBy('created_at')->get();
        
        return view('leads_list')->with(['pages'=>$lead]);
    })->name('lead.list');
    
});

require __DIR__.'/auth.php';
