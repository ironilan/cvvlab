<?php


use App\Http\Controllers\frontend\AreaController;
use App\Http\Controllers\frontend\ArticuloController;
use App\Http\Controllers\frontend\ClienteController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\LibroController;
use App\Http\Controllers\frontend\MailController;
use App\Http\Controllers\frontend\NotaController;
use App\Http\Controllers\frontend\NoticiaController;
use App\Http\Controllers\frontend\PublicacionController;
use App\Http\Controllers\frontend\TemaController;
use Illuminate\Support\Facades\Artisan;
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



Route::get('/', [HomeController::class, 'index'])->name('inicio');
Route::get('nosotros', [HomeController::class, 'nosotros'])->name('nosotros');
Route::get('examenes', [HomeController::class, 'examenes'])->name('examenes');
Route::get('reservar', [HomeController::class, 'reservar'])->name('reservar');
Route::get('pagar', [HomeController::class, 'pagar'])->name('pagar');
Route::get('contacto', [HomeController::class, 'contacto'])->name('contacto');
Route::get('promociones', [HomeController::class, 'promociones'])->name('promociones');
Route::get('confirmado', [HomeController::class, 'confirmado'])->name('confirmado');

Route::get('getExamenes', [HomeController::class, 'getExamenes'])->name('examenes.getExamenes');
Route::get('setCartExamen', [HomeController::class, 'setCartExamen'])->name('examenes.setCartExamen');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
