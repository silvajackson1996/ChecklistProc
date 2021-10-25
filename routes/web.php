<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckListController;

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

Route::get('/', [CheckListController::class, 'index'])->name('checklist-table');
Route::get('/create', [CheckListController::class, 'create'])->name('checklist-create');
Route::post('/create/store', [CheckListController::class, 'store'])->name('checklist-store');
Route::get('/create/delete/{id}', [CheckListController::class, 'delete'])->name('checklist-delete');
Route::get('/show/{id}', [CheckListController::class, 'show'])->name('checklist-show');
Route::post('/update/{id}', [CheckListController::class, 'update'])->name('checklist-update');
