<?php


use App\Livewire\Dashboard\Main;
use App\Livewire\Modules\Clients\ClientsIndex;
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

Auth::routes();



Route::middleware([
    'auth:sanctum',
    'verified'
])->group(function () {
    Route::get('/home', Main::class)->name('home');
    Route::get('/clientes', ClientsIndex::class)->name('clients.index');
});
