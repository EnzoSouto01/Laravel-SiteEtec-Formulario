<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public static function departamento() {
        return view('site.departamento');
    }
}