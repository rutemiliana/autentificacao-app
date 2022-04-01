<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TarefaController;
use App\Mail\MensagemTesteMail;



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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

//'tarefa' nome do grupo rotas
Route::resource('tarefa', TarefaController::class);
//Route::resource('tarefa', TarefaController::class)->middleware('auth');
//ver TarefaController o método  __construct()

Route::get('mensagem-teste' , function (){
    return new MensagemTesteMail();
});
