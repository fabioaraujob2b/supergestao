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
    public function salvar(Request $request) {
        $regras =             [
            'nome' => 'required|min:3|max:40|unique:site_contatos',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos' => 'required',
            'mensagem' => 'required|max:2000'
        ];

        $feedback = [
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome deve ter no máximo 40 caracteres',
            'nome.unique' => 'O nome informado já está em uso',

            'email.email' => 'O email informado não é válido',

            'mensagem.max' => 'A mensagem deve ter no máximo 2000 caracteres',

            'required' => 'O campo :attribute deve ser preenchido'
        ];

        $request->validate($regras, $feedback);

        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
