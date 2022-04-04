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
    {   
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
        //este é um teste para jogar informações do usuário na view
        $user = Auth::user();
        return view('home' , ['user' => $user]);
        
    }
}
