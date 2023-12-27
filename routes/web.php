<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AnnonceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\user\AdsController;
use App\Http\Controllers\Admin\CategoryController;


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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin' , function(){
    return view('admin');
})->name('admin')->middleware('admin');
// route for Category 
Route::get('admin_category', [CategoryController::class, 'index'])
    ->name('admin_components.category')
    ->middleware('admin');

Route::get('admin_category_create', [CategoryController::class, 'create'])
    ->name('admin_components.category_create')
    ->middleware('admin');

Route::post('admin_category_store', [CategoryController::class, 'store'])
    ->name('admin_components.category_store')
    ->middleware('admin');

Route::get('admin_category_show/{id}', [CategoryController::class, 'show'])
    ->name('admin_components.category_show')
    ->middleware('admin');

Route::get('admin_category_edit/{id}', [CategoryController::class, 'edit'])
    ->name('admin_components.category_edit')
    ->middleware('admin');

Route::put('admin_category_update/{id}', [CategoryController::class, 'update'])

    ->name('admin_components.category_update')
    ->middleware('admin'); 

Route::delete('admin_category_delete/{id}', [CategoryController::class, 'destroy'])
    ->name('admin_components.category_delete')
    ->middleware('admin');

// what is the structure folder in views to add those categories routes ?
    

Route::put('admin_annonce/{id}', [AnnonceController::class, 'Valider'])->name('Bien.Valider')->middleware('admin');
Route::put('admin_annonce/Non_Valider/{id}', [AnnonceController::class, 'Non_Valider'])->name('Non.Valider')->middleware('admin');


Route::get('admin_annonce_suppression', [AnnonceController::class, 'Annonce_suppresion'])
    ->name('admin_components.delete_annonce')
    ->middleware('admin');


Route::delete('admin_annoncedelete/{id}', [AnnonceController::class, 'delete_annonce'])->name('admin_components.delete.annonce')->middleware('admin');

Route::get('admin_annonce', [AnnonceController::class, 'Annonce_validation'])
    ->name('admin_components.annonce')
    ->middleware('admin');


    Route::get('publisher_annonce', [AdsController::class, 'all_annonces'])
    ->name('publisher_components.annonce')
    ->middleware('publisher');
  
  
    Route::get('publisher_annonce_Immobilier', [AdsController::class, 'all_annonces_Immobilier'])
    ->name('publisher_components.annonce_Immobilier')
    ->middleware('publisher');
  
  
    Route::get('publisher_annonce_Electronique', [AdsController::class, 'all_annonces_Electronique'])
    ->name('publisher_components.annonce_Electronique')
    ->middleware('publisher');




    Route::get('publisher_annonce_Voiture', [AdsController::class, 'all_annonces_Voiture'])
    ->name('publisher_components.annonce_Voiture')
    ->middleware('publisher');
    
    Route::get('publisher_annonce_Moto', [AdsController::class, 'all_annonces_Moto'])
    ->name('publisher_components.annonce_Moto')
    ->middleware('publisher');
  
  
    Route::get('publisher_annonce_add_annonce', [AdsController::class, 'add_annonce'])
    ->name('publisher_components.add_annonce')
    ->middleware('publisher');







    Route::post('publisher_annonce_store', [App\Http\Controllers\HomeController::class, 'store'])
    ->name('publisher_components.annonce_store')
    ->middleware('publisher');

  
  
    













Route::get('admin_user', [UserController::class, 'show_user'])
    ->name('admin_components.delete_user')
    ->middleware('admin');
Route::delete('admin_user-delete/{id}', [UserController::class, 'delete_user']) ->name('admin_components.delete-user')->middleware('admin');

Route::get('publisher' , function(){
    return view('publisher');
})->name('publisher')->middleware('publisher');