<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>

    <form method="POST" action="{{ route('registrar_produto') }}">
        @csrf 
        <label for="">Nome: </label> <br/>
        <input type="text" name="nome" /> <br/>

        <label for="">Endereço: </label> <br/>
        <input type="text" name="endereco" /> <br/>

        <label for="">Telefone:</label> <br/>
        <input type="text" name="telefone" /> <br/>

        <label for="">E-mail:</label> <br/>
        <input type="text" name="email" /> <br/><br/>
        <button> Salvar </button>
    </form>
    <br/><br/>
    <a href="/cadastro/ver/1">Visualizar o cadastro</a> <br/><br/>
    <a href="/cadastro/editar/1">Editar o cadastro</a> <br/><br/>
    <a href="/cadastro/excluir/1">Excluir o cadastro</a> <br/><br/>
  </body>
</html>