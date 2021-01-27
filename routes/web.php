<?php
use App\Http\Controllers\Admin\UsersController;
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

Route::get('/', function () {
    return view('test');
});

Route::get('administracion/usuarios',[UsersController::class, 'index'])->name('admin.user.index');
Route::get('administracion/usuarios/{user}',[UsersController::class, 'show'])->name('admin.user.show');
//Route::get('administracion/usuarios', 'Admin\UsersController@index');

//Route::prefix('administracion')->namespace('Admin')->name('admin.')->group(function(){
  //  Route::resource('usuarios', 'UsersController::class')->names('user')->parameters(['usuarios'=>'user']);

//});

//gestion
    //turnos
    //asignacion
//configuracion
    //tipos
    //prioridades
//reportes
    //creados
    //pendientes
//administracion
    //usuarios
    //roles
    //permisos (solo lectura)

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
