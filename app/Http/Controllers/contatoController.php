<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contatoController extends Controller
{
    public function contato(){
        var_dump($_POST);
        return view('site.contato');
    }
}
