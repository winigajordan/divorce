<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\ProduitController;
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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/secu', [AuthController::class, 'index'])->name('auth.index');
Route::post('/secu', [AuthController::class, 'register'])->name('auth.register');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');




    Route::get('/produit',  [ProduitController::class, 'index'])->name('produit.index');
    Route::post('/produit/save',  [ProduitController::class, 'save'])->name('produit.save');
    Route::get('/produit/show/{id}',  [ProduitController::class, 'show'])->name('produit.show');
    Route::get('/produit/{id}/edit',  [ProduitController::class, 'edit'])->name('produit.edit');
    Route::post('/produit/{prod}/update',  [ProduitController::class, 'update'])->name('produit.update');
    Route::get('/produit/{id}/delete',  [ProduitController::class, 'delete'])->name('produit.delete');
    Route::get('/produit/trash',  [ProduitController::class, 'trash'])->name('produit.trash');
    Route::get('/produit/{id}/restore',  [ProduitController::class, 'restore'])->name('produit.restore');
    Route::get('/produit/{id}/forcedelete',  [ProduitController::class, 'forcedelete'])->name('produit.forcedelete');
    





Route::controller(ClientController::class)
    ->name('client.')
    ->group(
        function () {
            Route::get('/', 'index')->name('index');
            Route::get('/divorce-amiable', 'amiable')->name('amiable');
            Route::get('/devis', 'devis')->name('devis');
            Route::get('/divorce-contentieux', 'contentieux')->name('contentieux');
            Route::get('/divorce-pour-faute', 'faute')->name('faute');
            Route::get('/contact', 'contact')->name('contact');
            Route::get('/a-propos', 'mentions')->name('propos');
        }
    );



Route::controller(DemandeController::class)
    ->name('demande.')
    ->group(
        function () {
            Route::post('/demande/create', 'create')->name('create');
            Route::get('/demande/list', 'list')->name('list');
        }
    );

