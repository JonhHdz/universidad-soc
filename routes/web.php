<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;

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

Route::get('/',[EventsController::class, 'index']);
Route::get('/demo',[EventsController::class, 'index']);

Route::get('/clearcache', function (){
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Cache::flush();
    // Artisan::call('controller:clear');
    dd("Cache Clear All ".date('Y-m-d H:i:s'));
});

Route::get('/certificaciones', function () {
    return view('certificaciones');
});
Route::get('/asesor-certificado', function () {
    return view('asesor-certificado');
});
Route::get('/asesor-seguros', function () {
    return view('asesor-seguros');
});
Route::get('/oficina-hipotecario', function () {
    return view('oficina-hipotecario');
});
Route::get('/oficina-empresarial', function () {
    return view('oficina-empresarial');
});
Route::get('/asociacion-abh', function () {
    return view('asociacion-abh');
});
Route::get('/oficina-seguros', function () {
    return view('oficina-seguros');
});
Route::get('/asesor-empresarial', function () {
    return view('asesor-empresarial');
});
Route::get('/reclutamiento', function () {
    return view('reclutamiento');
});

//Ruta form
Route::post('/sendForm','App\Http\Controllers\FormController@sendMail')->name('sendMail');
Route::post('/sendFormOficina','App\Http\Controllers\FormController@sendMail2')->name('sendFormOficina');
/* 
 * ADMINISTRADOR DE CONTENIDO | EVENTOS
 */
Route::get('/admin',[EventsController::class, 'admin']);
Route::post('/admin/login',[EventsController::class, 'login']);
Route::get('/admin/logout',[EventsController::class, 'logout']);
Route::get('/admin/nuevo-evento',[EventsController::class, 'new_event']);
Route::get('/admin/editar-evento/{any}',[EventsController::class, 'edit_event']);
Route::get('/admin/eliminar-evento/{any}',[EventsController::class, 'delete_event']);
Route::post('/admin/update_event',[EventsController::class, 'update_event']);
Route::post('/admin/upload_event',[EventsController::class, 'upload_event']);
Route::get('/admin/activar-evento/{any}',[EventsController::class, 'enable_event']);
Route::get('/admin/desactivar-evento/{any}',[EventsController::class, 'enable_event']);