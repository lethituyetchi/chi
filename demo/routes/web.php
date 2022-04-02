<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MyController; 
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
Route::get('/',[MyController::class,'index']);
Route::post('register',[MyController::class,'register']);
/*
Route::get('/', function () {
    return view('demo');
});
Route::get('/TrangChu', function () {
    return view('TrangChu');
});

Route::get('/GioiThieu', function () {
    return view('GioiThieu');
});
Route::get('/LienHe', function () {
    return view('LienHe');
});

Route::get('rp/{name}', function ($name) {
    echo "Xin Chao Them ".$name;
})->whereAlpha('name');

Route::get('op/{name?}', function ($name="demo") {
    echo "Xin Chao Them ".$name;
});

Route::get('/{name?}', function ($name="demo") {
        return view($name);
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/demo/{age}', function ($age) {
    return view('demo');
})->middleware('checkage');

Route::get('/demo/{name}/{pass}', function ($name,$pass) {
    return view('demo');
})->middleware('checkname');
Route::get('/',function() {
    return view('register');
});
Route::post('register',function(Request $request) {
    echo "Name :" .$request->tname;
});
Route::get('/',function() {
    return view('signin');
});
*/

/*Route::post('signin',function(Request $request) {
    echo "First Name :" .$request->fname;
});
Route::post('signin',function(Request $request) {
    echo "Surname :" .$request->sname;
});*/
/*Route::post('signin',function(Request $request) {
    echo "Name :" .$request->input("fname");
    echo "Surname :" .$request->input("sname");
    echo "Phone :" .$request->input("phone");
});
*/


