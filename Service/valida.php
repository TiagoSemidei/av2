<?php

     include_once("Service/Banco.php");

  if (isset($_GET['nomeUsuario']) && isset($_GET['senhaUsuario'])) {

    $nome = $_GET['nomeUsuario'];
    $senha = $_GET['senhaUsuario'];
    $sql = "select * from usuario where
             nome = '$nome' and senha = '$senha'";
    
      $banco = new Banco();
      $registros = $banco->query($sql);
      foreach ($registros as $linha) { 
        
        
        
       if ($linha['nome'] == $nome && $linha['senha']==$senha) {
        echo '
          <script>
          window.location.href = "https://Aula10-1.andreeppinghaus.repl.co/CadastroUsuario/index.php";
          </script>';
         
       }
      }
    
  }
       header('Location: index.php');

    ?>