<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterielController;
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

Route::post('/auth/valider',[testController::class, 'valider'])->name("valider");
Route::get('/user/{id}', [UserController::class, 'show']);

Route::get('/addMateriel', [MaterielController::class, 'addMateriel'])->name("addMateriel");
Route::post('/storeMateriel', [MaterielController::class, 'storeMateriel'])->name("storeMateriel");

Route::get('/listMateriels', [MaterielController::class, 'showMateriels'])->name("showMateriels");
Route::delete('/deleteMateriel/{numero}', [MaterielController::class, 'deleteMateriel'])->name("deleteMateriel");
Route::get('/editMateriel/{numero}', [MaterielController::class, 'editMateriel'])->name("editMateriel");


Route::get('/login', [MaterielController::class, 'login'])->name("login");

Route::post('/logout', [MaterielController::class, 'logout'])->name("logout");
Route::post('/signIn', [MaterielController::class, 'signIn'])->name("signIn");

Route::get('/declarerPanne', [MaterielController::class, 'declarerPanne'])->name("declarerPanne");
Route::post('/storePanne', [MaterielController::class, 'storePanne'])->name("storePanne");


Route::get('/listerPannes', [MaterielController::class, 'listerPannes'])->name("listerPannes"); 
Route::get('/profil', [MaterielController::class, 'profil'])->name("profil"); 
//Route::get('/listerPannes', [MaterielController::class, 'listerPannes'])->name("listerPannes"); 
Route::get('/index', [MaterielController::class, 'index'])->name("index"); 


Route::get('/test', [MaterielController::class, 'test'])->name("test"); 


Route::get('/addModele', [MaterielController::class, 'addModele'])->name("addModele");
Route::post('/storeModele', [MaterielController::class, 'storeModele'])->name("storeModele");


Route::get('/addMarque', [MaterielController::class, 'addMarque'])->name("addMarque");
Route::post('/storeMarque', [MaterielController::class, 'storeMarque'])->name("storeMarque");
