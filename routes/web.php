<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarModelController;
use App\Http\Controllers\MemberController;



Route::get('/', function () {
    return view('welcome');
});


Route::post('storebrand', [BrandController::class, 'store'])->name('brand.store');
Route::get('allbrands', [BrandController::class, 'index'] );

Route::get('brand/{id}/edit', [BrandController::class, 'edit'])->name('brand.edit');

Route::patch('updatebrand/{id}', [BrandController::class, 'update'])->name('brand.update');
Route::delete('deletebrand/{id}', [BrandController::class, 'destroy'])->name('brand.destroy');





// for model

Route::post('storemodel', [CarModelController::class, 'store'])->name('carmodel.store');;
Route::get('allmodels', [CarModelController::class, 'index'] );

Route::get('carmodel/{id}/edit', [CarModelController::class, 'edit'])->name('carmodel.edit');


Route::put('updatemodel/{id}', [CarModelController::class, 'update'])->name('carmodel.updare');;
Route::delete('deletemodel/{id}', [CarModelController::class, 'destroy'])->name('carmodel.destroy');;




//for members

Route::post('storemember', [MemberController::class, 'store'])->name('member.store');
Route::get('allmembers', [MemberController::class, 'index'] );

Route::get('member/{id}/edit', [MemberController::class, 'edit'])->name('member.edit');

Route::patch('updatemember/{id}', [MemberController::class, 'update'])->name('member.update');
Route::delete('deletemember/{id}', [MemberController::class, 'destroy'])->name('member.destroy');
