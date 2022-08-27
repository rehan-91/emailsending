<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Use App\Product;
 
// Route::get('products', function() {
//     // If the Content-Type and Accept headers are set to 'application/json', 
//     // this will return a JSON structure. This will be cleaned up later.
//     return Product::all();
// });
 
// Route::get('products/{id}', function($id) {
//     return Product::find($id);
// });

// Route::post('products', function(Request $request) {
//     return Product::create($request->all);
// });

// Route::put('products/{id}', function(Request $request, $id) {
//     $produc = Product::findOrFail($id);
//     $produc->update($request->all());

//     return $produc;
// });

// Route::delete('products/{id}', function($id) {
//     Product::find($id)->delete();

//     return 204;
// });

Route::get('products', 'ProductController@index');
Route::get('products/{id}', 'ProductController@show');
Route::post('products', 'ProductController@store');
Route::put('products/{id}', 'ProductController@update');
Route::delete('products/{id}', 'ProductController@delete');

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
