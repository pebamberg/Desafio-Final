<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$categoria = $_POST['categoria'];

$sql = "insert into produtos (nome, descricao, preco, categoria) values ('$nome','$descricao','$preco','$categoria')";
$salvar = mysqli_query($conexao, $sql);

mysqli_close($conexao);

?>

<!doctype html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">    
      <title>Sistema de Cadastro</title>
      <link rel="stylesheet" href="estilo.css" >
    </head>
    <body>  
        <div class="container">
          <nav>
            <ul class="menu">
              <a href="index.php"><li>Cadastro</li></a>
              <a href="consultas.php"><li>Consultas</li></a>
            </ul>
          </nav>
          <section>
            <h1 id="titulo">Cadastro Efetivado.</h1>
            <hr><br><br>
          </section>
        </div>
    </body>
</html>