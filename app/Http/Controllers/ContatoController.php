<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public static function contato() {
        var_dump($_GET); 
        return view('site.contato', ['titulo' => 'Contato (teste)']);
    }
}