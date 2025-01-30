<?php

use App\Http\Controllers\memberregisController;
use App\Http\Controllers\tsr_memberchobController;
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
Route::get('/testsearch', function () {
    return view('testsearch');
});
Route::get('/testMemberInput', function () {
    return view('testMemberInput');
});
// Route::get('/getId', function () {
//     return view('getId');
// });
Route::get('/getId',[memberregisController::class,'getAllMemberId']);
Route::get('/getId',[memberregisController::class,'getAllMemberId']);
Route::get('/searchMember',[memberregisController::class,'MemberIdinput']);
Route::post('/searchpost',[memberregisController::class,'save']);
// Route::get('/testserch',[memberregisController::class,'getMemberId']);
