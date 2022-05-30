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
    
    <h1>Tela de inclusão</h1>

      <form action="salvar.php">
        <div class="mb-3">
          <label for="idnome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="idnome" 
            name="nomeUsuario">
        </div>
        <div class="mb-3">
          <label for="idsenha" class="form-label">Senha</label>
          <input type="text" class="form-control" id="idsenha" 
            name="senhaUsuario">
      <br>
          <input type="submit" value="Salvar" class="btn btn-primary">
        </div>
      </form>
      
      <a href="index.php" class="btn btn-primary"> Voltar</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
