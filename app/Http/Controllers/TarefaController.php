<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TarefaController extends Controller
{
    public function __construct()
    {
        //mesma coisa que colocar na rota um ->middleware('auth'). Com esse método a controller inteira fica protegida 
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {

        $id = auth()->user()->id;
        $name = auth()->user()->id;
        $email = auth()->user()->email;

        return "ID: $id | Nome: $name | Email: $email";
        
        //verifica se o usuário está ou não autenticado. Importando Auth de  use Illuminate\Support\Facades\Auth;
        //se Auth estiver logado (check()) , recupere os dados dele
       /* if(Auth::check()) {
            $id = Auth::user()->id;
            $name = Auth::user()->id;
            $email = Auth::user()->email;

            return "ID: $id | Nome: $name | Email: $email";

        } else {
            return 'Você NÃO ESTÁ LOGADO NO SISTEMA';
        }

        if(auth() -> check()){
            $id = auth()->user()->id();
            $name = auth()->user()->name();
            $email = auth()->user()->email();

            return "ID: $id | Nome: $name | Email: $email";
        } else {
            return 'Você NÃO ESTÁ LOGADO NO SISTEMA';
        }
        */
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function show(Tarefa $tarefa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarefa $tarefa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarefa $tarefa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarefa $tarefa)
    {
        //
    }
}
