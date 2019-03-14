<?php
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
use App\Makeworkorder_model;
use Illuminate\Http\Requests;

Route::get('/', function () {
    return view('home');
});

Route::get('makeworkorder', 'Makeworkorder_controller@makeworkorder');
Route::post('store', 'Makeworkorder_controller@store');

Route::get('/makeWorkOrder', function () {
    return view('makeWorkOrder');
});

Route::get('/workorders', 'Makeworkorder_controller@showall');

//Route::get('/workorders', function () {
//    return view('workorders');
//});

Route::get('/workDetail', function () {
    return view('/workDetail');
});

Route::get('/earlywarnings', function () {
    return view('earlywarnings');
});

Route::get('/machinetime', function () {
    return view('machinetime');
});

Route::get('/subTask', function () {
    return view('subTask');
});
Route::get('/machineReport', function () {
    return view('machineReport');
});
Route::get('/materials', function () {
    return view('materials');
});


Route::get('/control', function () {
    return view('control');
});


