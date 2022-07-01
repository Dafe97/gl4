<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('test1', function () {
//     return view('vue1');
// });

// Route::get('1',function(){
//     return "page1";
// });
// Route::get('2',function(){
//     return "page2";
// });

// Route::get('{p}',function($p){d
//     return 'Je suis la page '.$p;
// })->where('p','[1-3]');
// Route::get('hello',function(){
//     return "hello world";
// });

// Route::get('{p}',function($p){
//     return 'Je suis la page '.$p;
// });

// Route::get('article/{n}',function($n){
//     return view("article")->with('numero',$n);
// })->where('n','[0-9]+');
// Route::get('article/{n}',function($n){
//     return view("article")->withNumero($n);
// })->where('n','[0-9]+');

// Route::get('facture/{n}',function($n){
//     return view("facture")->with('numero',$n);
// })->where('n','[0-9]+');

// Route::get('exercice/{n}',function($n){
//     return view("exercice")->with('numero',$n);
// })->where('n','[0-9]+');
// Route::get('exercice',function(){
//     return view("exercice");
// });

Route::get('/', [ArticleController::class,'index']);
Route::get('/article', [ArticleController::class,'create']);
Route::post('/article', [ArticleController::class,'store']);
