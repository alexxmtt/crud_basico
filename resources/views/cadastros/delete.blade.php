<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>

    <form method="POST" action="{{ route('excluir_cadastro', ['id' -> $cadastro->id]) }}">
        @csrf 
        <label for="">Tem certeza que desaja excluir esse cadastro </label> <br/>
        <input type="text" name="nome" value="{{ $cadastro->nome }}"/> <br/>
        <button> Sim </button>
        
    </form>

  </body>
</html>