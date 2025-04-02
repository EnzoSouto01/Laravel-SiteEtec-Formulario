<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public static function contato() {
        return view('site.contato');
    }
}