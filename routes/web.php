<?php

use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\DataEntryController;
use App\Http\Controllers\FreightController;
use App\Http\Controllers\ProfileController;
use App\Models\DataEntry;
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

Route::get('/freights', [FreightController::class, 'index'])->name('freights.index');

Route::get('/freights/dataEntries/create', [FreightController::class, 'create'])->name('freights.dataEntries.create');

Route::post('/freights', [FreightController::class, 'store'])->name('freights.dataEntries.store');

Route::get('/freights/dataEntries/{freight:slug}/edit', [FreightController::class, 'edit'])->name('freights.dataEntries.edit');

Route::put('/freights/dataEntries/{freight}', [FreightController::class, 'update'])->name('freights.dataEntries.update');

Route::get('/freights/approval/{freight:slug}/edit', [ApprovalController::class, 'edit'])->name('freights.approval.edit');

Route::put('/freights/approval/{freight}', [ApprovalController::class, 'update'])->name('freights.approval.update');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
