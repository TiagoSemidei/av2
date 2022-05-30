<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    
    <h1>Tela de consulta</h1>


     <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Senha</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
    <?php

     include_once("../Service/Banco.php");

      $sql = "select * from usuario";
      $banco = new Banco();
      $registros = $banco->query($sql);
      foreach ($registros as $linha) { 
        echo '<tr>
            <th scope="row">'. $linha['id'].'</th>
            <td>'.$linha['nome']. '</td>
            <td>'.$linha['senha']. '</td>
            <td> 
                <a href="excluir.php?id='.$linha['id']. '" 
                 class="btn btn-primary"> Excluir</a>
                  <a href="formEditar.php?id='.$linha['id']. '" 
                 class="btn btn-primary"> Editar</a>
            </td>
            </tr>';
      }

    ?>
  </tbody>
</table>

      <a href="formInclusao.php" class="btn btn-primary"> Incluir</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
