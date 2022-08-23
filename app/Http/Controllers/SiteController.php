<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index2() {
        return view('include');
    }

    public function index() {
        
        $pessoas = [
            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Lucas',
                'birth' => '07/07/1994',
                'idade' => 28],

            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Maria',
                'birth' => '07/07/1994',
                'idade' => 28],
            
            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Laura',
                'birth' => '07/07/1994',
                'idade' => 28]
        ];

        $dados['pessoas'] = $pessoas;

        return view('bemvindo', $dados);
    }

    public function exercicio2() {
        
        $numero = 1;

        $url = 'https://i.pravatar.cc/150?img='.$numero;

        $dados['url'] = $url;

        return view('exercise', $dados);
    }

}
