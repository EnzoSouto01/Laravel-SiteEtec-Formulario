<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public static function curso() {
        return view('site.curso');
    }
}