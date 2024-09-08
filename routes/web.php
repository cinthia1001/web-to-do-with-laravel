<?php

use App\Http\Controllers\crud;
use Illuminate\Support\Facades\Route;


Route::get('/',[crud::class,'index'])->name('index');
Route::get('/tasks/create', [crud::class, 'create'])->name('crud.create');
Route::post('/tasks', [crud::class, 'store'])->name('crud.store');


Route::get('/tasks/{id}/edit', [crud::class, 'edit'])->name('crud.edit');
Route::put('/tasks/{id}', [crud::class, 'update'])->name('crud.update');

Route::delete('/tasks/{id}', [crud::class, 'destroy'])->name('crud.destroy');
