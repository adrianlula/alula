<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontrol;/* declarar uso del controlador*/
use App\Http\Controllers\cursocontrol;
use App\Http\Controllers\contactocontrol;



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

Route::get('/', homecontrol::class)->name('home');/* uso del controlador*/

Route::resource('cursos', cursocontrol::class);/* uso del controlador*/

Route::view('nosotros', 'nosotros')->name('nosotros');

Route::get('contacto', [contactocontrol::class, 'index'])->name('contacto.index');

Route::post('contacto', [contactocontrol::class, 'store'])->name('contacto.store');





/*
Route::get('cursos', [cursocontrol::class, 'index'])->name('curso.index');
 
Route::get('cursos/crear',  [cursocontrol::class, 'create'])->name('curso.crear');

Route::post('cursos',  [cursocontrol::class, 'store'])->name('curso.store');

Route::get('cursos/{curso}/edit',  [cursocontrol::class, 'edit'])->name('curso.edit');

Route::get('cursos/{curso}/{nivel?}',  [cursocontrol::class, 'show'])->name('curso.show');

Route::put('cursos/{curso}',  [cursocontrol::class, 'update'])->name('curso.update');

Route::delete('cursos/{curso}',  [cursocontrol::class, 'destroy'])->name('curso.destroy');

*/

