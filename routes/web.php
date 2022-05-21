<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\nuevaVistaController;
use App\Http\controllers\ProveedorController;
use App\Http\controllers\ProductoController;
use App\Http\controllers\ClienteController;
use Illuminate\HTTP\Request;
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

//enviar mensaje url
route::get ('/nueva-ruta',function(){
    return "Hola mundo";
});

//nueva vista 
route::view('/nueva-vista','nuevaVista');

//envia parametros
route:: view('/nueva-vista2','nuevaVista',['Nombre'=> 'Cosas de inges','valor'=>-1]);

//vista controlador
route::get('/ruta-controlador',[nuevaVistaController::class,'index']);

//ruta para recibir de URL
route::get('/nueva-vista',function(request $request){
   return "HOLA ".$request-> get('variable');
});


//ruta para recibir parametros por medio de controlador 
route::get('/ruta-controlador/{id}',[nuevaVistaController::class,'recbirParametros'])->name('prueba');

//grupo de rutas
route::prefix('ruta')->group(function(){
    route::name('ruta.')->group(function(){
        route::get('/users',function(){
            return view('nuevavista',['nombre'=>'Cosas de inges']);
        })->name('users');

         //route::get('/users',[nuevaVistaController::class,'index']);
    route::get('/users/create',[nuevaVistaController::class,'create'])-> name('users.create');
    route::get('/users/show',[nuevaVistaController::class,'show'])-> name('users.show');
    route::get('/users/edit',[nuevaVistaController::class,'edit'])-> name('users.edit');
    route::get('/users/delete',[nuevaVistaController::class,'destroy'])-> name('users.delete');
    });
   

});


route::get('productos',[nuevaVistaController::class,'mostrarProductos'])->middleware('verificar_usuario');
route::get('no_admin',[nuevaVistaController::class, 'noAdmin'])->name('no_admin');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


route::resource('proveedores',ProveedorController::class);
route::resource('productos',ProductoController::class);
route::resource('clientes',ClienteController::class);
