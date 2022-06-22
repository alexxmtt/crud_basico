<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Ver </title>
    <meta charset="utf-8">
  </head>
  <body>


        <label for="">Nome: </label> <br/>
        <input type="text" name="nome" value="{{ $cadastro->nome}}"/> <br/>

        <label for="">Endereço: </label> <br/>
        <input type="text" name="endereco" value="{{ $cadastro->endereco}}"/> <br/>

        <label for="">Telefone:</label> <br/>
        <input type="text" name="telefone" value="{{ $cadastro->telefone}}"/> <br/>

        <label for="">E-mail:</label> <br/>
        <input type="text" name="email" value="{{ $cadastro->email}}"/> <br/>

  </body>
</html>