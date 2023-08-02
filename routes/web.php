<?php

use App\Enuns\SupportStatus;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\Site\SiteController;


Route::get( '/test',function (){
    dd(array_column(SupportStatus::cases(),'name'));
});

//Cuidado com as rotas as que tiverem parametros ficam de baixo de todas as outras rotas
Route::delete('/supports/{id}', [SupportController::class, 'destroy'])->name('supports.destroy');
Route::put('/supports/{id}', [SupportController::class, 'update'])->name('supports.update');
Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');
Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');
Route::get('/supports/{id}', [SupportController::class, 'show'])->name('supports.show');
Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');
Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');


Route::get('/contato',[SiteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});

