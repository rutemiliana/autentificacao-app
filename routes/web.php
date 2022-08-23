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

/*habilita a verificação de email ao criar a conta para evitar cadastro de emails indevidos ou de terceiros
Ao confirmar o email, a coluna email_verified_at da tabela Users é atualizada
*/
Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('verified');

Auth::routes();

//'tarefa' nome do grupo rotas
Route::resource('tarefa', TarefaController::class)->middleware('verified');
//Route::resource('tarefa', TarefaController::class)->middleware('auth');
//ver TarefaController o método  __construct()

Route::get('mensagem-teste' , function (){
    return new MensagemTesteMail();

    // o comando abaixo pode ser testado pelo tinker usando:
    // use App\Mail\MensagemTesteMail;
    //Mail::to('rutemiliana13@gmail.com')->send(new MensagemTesteMail());
    // retorna null se não tiver nenhum erro
    
    //return 'E-mail enviado com sucesso!';

    //testando branch
});
