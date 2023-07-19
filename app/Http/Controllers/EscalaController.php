<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EscalaController extends Controller
{
    public function index(){
        return view('calendario.escala');
    }
}
