<?php

namespace App\Http\Controllers;
use App\Models\SiteContato;
use Illuminate\Http\Request;
use App\Models\MotivoContato;
class contatoController extends Controller
{
    public function contato(Request $request){
       // var_dump($_POST);
       /*  $contato = new SiteContato();
    
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_mensagem = (int)$request->input('motivo_mensagem');
        $contato->mensagem = $request->input('mensagem');

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $contato->save();
        }    
        
        print_r($contato->getAttributes());
 */     
        $motivo_contatos = MotivoContato::all();
        return view('site.contato', ['motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request){
        $request->validate([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_mensagem' => 'required',
            'mensagem' => 'required:max:2000' 
        ]);
        //SiteContato::create($request->all());
    }
}
