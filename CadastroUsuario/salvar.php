<?php

include_once("../Service/Banco.php");
 if (isset($_GET['nomeUsuario']) && isset($_GET['senhaUsuario'])) {
  $banco = new Banco();
  $banco->exec("CREATE TABLE IF NOT EXISTS usuario (
      id INTEGER PRIMARY KEY AUTOINCREMENT, 
      nome TEXT, 
      senha TEXT
    )");
  
  $nome = $_GET['nomeUsuario'];
  $senha = $_GET['senhaUsuario'];

  $sql = "insert into usuario(nome, senha) 
         values('$nome','$senha')";

  $banco->exec($sql);
  
 }

header('Location: index.php');  

?>