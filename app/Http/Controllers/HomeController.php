<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {   //middleware de proteção da rota, mesma coisa que colocar ->middleware('auth') em uma rota
        //este middleware está defido no arquivo Kernel.php na parsta App/Http
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //esta é uma variavel para testar o jogar na view, coletando informações do usuario autenticado
        $user = Auth::user();
        return view('home' , ['user' => $user]);
        
    }

    
}
