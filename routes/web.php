<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('inventario-principal','App\Http\Controllers\inventario\inventarioController@inventarioIndex');
    Route::get('editar-inventario','App\Http\Controllers\inventario\inventarioController@editInventory');
    Route::get('añadir-producto','App\Http\Controllers\inventario\inventarioController@addProductIndex');
    Route::post('añadir-producto-inventario','App\Http\Controllers\inventario\inventarioController@addProduct');
    Route::post('/eliminar-item','App\Http\Controllers\inventario\inventarioController@deleteItem');
    Route::post('/producto-editado','App\Http\Controllers\inventario\inventarioController@editedProduct');    
    
    //Venta sección
    Route::get('ventas','App\Http\Controllers\venta\ventaController@ventaIndex');
    Route::post('crear-venta','App\Http\Controllers\venta\ventaController@generatePurchase');
    Route::post('preventa','App\Http\Controllers\venta\ventaController@addPurchaseF');
    Route::post('factura','App\Http\Controllers\venta\ventaController@confirmPurchase');
    Route::post('retomar-venta','App\Http\Controllers\venta\ventaController@returnPurchase');

    //Proveedores sección
    Route::get('proveedores','App\Http\Controllers\proveedores\proveedoresController@proveedorIndex');
    Route::get('crear-proveedor','App\Http\Controllers\proveedores\proveedoresController@createProveedorIndex');
    Route::post('editar-proveedor','App\Http\Controllers\proveedores\proveedoresController@editProveedorIndex');
    Route::post('proveedor-creado','App\Http\Controllers\proveedores\proveedoresController@proveedorCreadet');
    Route::post('proveedor-editado','App\Http\Controllers\proveedores\proveedoresController@proveedorEdited');


    //Facturas sección
    Route::get('facturas','App\Http\Controllers\factura\facturaController@facturaIndex');
    Route::post('eliminar-factura', 'App\Http\Controllers\factura\facturaController@cancelFactura');


});
