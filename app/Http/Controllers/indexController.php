<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MotivoContato;
class indexController extends Controller
{
        
    public function index(){
        $motivo_contatos = MotivoContato::all();
        
        return view('site.index', ['motivo_contatos' => $motivo_contatos]);
    }
}
