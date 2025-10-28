<?php

use App\Http\Controllers\AboutPagesController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\MainPagesController;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\ProtfolioPageController;
use App\Http\Controllers\ServicePageController;
use Illuminate\Support\Facades\Route;
use PSpell\Config;

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


Route::get('home/pages',[pagesController::class,'home'])->name('home.page');


Route::get('admin/dashboard',[pagesController::class,'layout'])->name('admin.dashboard');

Route::get('dashboard/page',[pagesController::class,'dashboard'])->name('dashboard.page');

Route::get('main/page',[MainPagesController::class,'main'])->name('main.page');
Route::put('main/page',[MainPagesController::class,'update'])->name('main.page.update');


// service route start

Route::get('service/service',[ServicePageController::class,'service'])->name('serive.service');
Route::get('service/create',[ServicePageController::class,'create'])->name('service.create');


Route::post('service/create/update',[ServicePageController::class,'update'])->name('service.stor');

Route::get('service/list',[ServicePageController::class,'list'])->name('service.list');

Route::get('sarvice/list/edit/{id}',[ServicePageController::class,'edit'])->name('service.list.edit');

Route::post('service/list/update/{id}',[ServicePageController::class,'updates'])->name('service.list.update');

Route::delete('service/list/delete/{id}',[ServicePageController::class,'distroy'])->name('service.list.delete');

// service route end 

//protfolio start
Route::get('protfolio/protfolio',[ProtfolioPageController::class,'protfolio'])->name('protfolio.protfolio');
Route::get('protfolio/create',[ProtfolioPageController::class,'create'])->name('protfolio.create');
Route::put('protfolio/stor',[ProtfolioPageController::class,'stor'])->name('protfolio.stor');
Route::get('protfolio/list',[ProtfolioPageController::class,'list'])->name('protfolio.list');
Route::get('protfolio/list/edit/{id}',[ProtfolioPageController::class,'edit'])->name('protfolio.list.edit');
Route::post('protfolio/list/update/{id}',[ProtfolioPageController::class,'updates'])->name('protfolio.list.update');
Route::delete('protfolio/list/delete/{id}',[ProtfolioPageController::class,'distroy'])->name('protfolio.list.delete');

// protfolio end 


Route::post('contact/stor',[ContactPageController::class,'stor'])->name('contact.stor');









// About page route start

Route::get('about/page',[AboutPagesController::class,'about'])->name('about.page');
Route::get('about/create.',[AboutPagesController::class,'create'])->name('about.create');
Route::put('about/stor',[AboutPagesController::class,'stor'])->name('about.stor');
Route::get('about/list',[AboutPagesController::class,'list'])->name('about.list');
Route::get('about/list/edit/{id}',[AboutPagesController::class,'edit'])->name(('about.list.edit'));
Route::post('about/update/{id}',[AboutPagesController::class,'updates'])->name('about.list.update');
Route::delete('about/list/delete/{id}',[AboutPagesController::class,'distroy'])->name('about.list.delete');