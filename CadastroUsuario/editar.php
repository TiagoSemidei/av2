<?php

include_once("../Service/Banco.php");
 if (isset($_GET['nomeUsuario']) && isset($_GET['senhaUsuario'])) {
  $banco = new Banco();

  $id = $_GET['id'];
  $nome = $_GET['nomeUsuario'];
  $senha = $_GET['senhaUsuario'];

  $sql = "update usuario set nome = '$nome', senha='$senha' 
           where id = $id";

  $banco->exec($sql);
  
 }

header('Location: index.php');  

?>