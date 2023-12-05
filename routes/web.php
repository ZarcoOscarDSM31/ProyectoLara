<?php
use App\Http\Controllers\TbCitaController;
use App\Http\Controllers\TbEstadoController;
use App\Http\Controllers\TbMunicipioController;
use App\Http\Controllers\TbTipousuController;
use App\Http\Controllers\TbUsuarioController;
use App\Http\Controllers\TbOficioController;
use App\Http\Controllers\TbResenaController;
use App\Providers\AuthServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




// -------------------------------- RUTAS DE LA NAVEGACIÓN--------------------------------
        /* I N I C I O */
Route::get('/', function () {return view('index');});
Auth::routes();
Route::get('/login', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

        /* I N I C I O */
Auth::routes();
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
        /* E S T A D O S */
Route::resource('/tb-estados', TbEstadoController::class);
        /* M U N I C I P I O S */
Route::resource('/tb-municipio', TbMunicipioController::class);
        /* T I P O   D E   U S U A R I O S */
Route::resource('/tb-tipousu', TbTipousuController::class);
        /* U S U A R I O S */
Route::resource('/tb-usuario',TbUsuarioController::class);
        /* C I T A S */
Route::resource('/tb-cita', TbCitaController::class);
        /* R E S E Ñ A S */
Route::resource('/tb-resena', TbResenaController::class);
        /* O F I C I O S */
Route::resource('/tb-oficio', TbOficioController::class);


                                /* U S U A R I O S */
// -------------------------------- RUTAS: LISTA DE USUARIOS --------------------------------
Route::name('index')->get('/index',[TbUsuarioController::class,'index']);
// -------------------------------- RUTAS: ALTA DE USUARIO --------------------------------
Route::name('crea')->get('/crea',[TbUsuarioController::class, 'crea']);
Route::name('store')->post('/store',[TbUsuarioController::class, 'store']);
// -------------------------------- RUTAS: EDITAR USUARIOS --------------------------------
Route::name('edit')->get('/edit/{id}',[TbUsuarioController::class,'edit']);
Route::name('update')->put('/update/{id}',[TbUsuarioController::class,'update']);
// -------------------------------- RUTAS: ELIMINAR USUARIOS --------------------------------

// -------------------------------- RUTAS: VISTA DE USUARIOS --------------------------------



Route::name('show')->get('/show/{id}',[TbMunicipioController::class,'show']);
Route::name('show')->get('/show/{id}',[TbEstadoController::class,'show']);
