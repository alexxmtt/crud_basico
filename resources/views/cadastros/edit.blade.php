<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Ver Produto</title>
    <meta charset="utf-8">
  </head>
  <body>
  <form method="POST" action="{{ route('alterar_cadastro', ['id' => $cadastro->id]) }}" >
        @csrf  
        <label for="">Nome: </label> <br/>
        <input type="text" name="nome" value="{{ $cadastro->nome}}"/> <br/>

        <label for="">Endereço: </label> <br/>
        <input type="text" name="endereco" value="{{ $cadastro->endereco}}"/> <br/>

        <label for="">Telefone:</label> <br/>
        <input type="text" name="telefone" value="{{ $cadastro->telefone}}"/> <br/>

        <label for="">E-mail:</label> <br/>
        <input type="text" name="email" value="{{ $cadastro->email}}"/> <br/>
        <button> Salvar </button> 
</form>
  </body>
</html>