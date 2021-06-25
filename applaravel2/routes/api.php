<?php
use App\Http\Controllers\CrudController;
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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

route::get('/crud','CrudController@index');
// route::get('/pais','PaisController@index');
Route::get('/', 'UserController@Index');
Route::post('users', 'UserController@store')->name('users.store');
Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');

Route::group(['prefix'=>'pais/'],function(){
    Route::post('/','PaisController@store');
    Route::get('/','PaisController@index');
    Route::delete('/{id}','PaisController@destroy');
});