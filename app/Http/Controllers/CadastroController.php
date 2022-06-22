<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadastro;
class CadastroController extends Controller
{
    public function create()
    {
        return view('cadastros.create');
    }
    public function store(Request $request) 
    {
        Cadastro::create([
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'telefone' => $request->telefone,
            'email' => $request->email,
        ]);   
        
        return "Cadastro realizado com sucesso!";

    }
    // Visualização
    public function show($id) 
    {
        $cadastro = Cadastro::findOrFail($id);
        return view('cadastros.show',['cadastro' => $cadastro]);
    }
    // Edição
    public function edit($id) 
    {
        $cadastro = Cadastro::findOrFail($id);
        return view('cadastros.edit',['cadastro' => $cadastro]);
    }
    //
    public function update(Request $request, $id) 
    {
        $cadastro = Cadastro::findOrFail($id);

        $cadastro->update([
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'telefone' => $request->telefone,
            'email' => $request->email,
        ]);   
        
        return "Cadastro atualizado com sucesso!";

    }
    public function delete($id) 
    {
        $cadastro = Cadastro::findOrFail($id);
        return view('cadastros.delete', ['cadastro' => $cadastro]);
    }
    public function destroy($id) 
    {
        $cadastro = Cadastro::findOrFail($id);
        $cadastro->delete();

        return "Cadastro excluído com sucesso!";
    }
    
}
