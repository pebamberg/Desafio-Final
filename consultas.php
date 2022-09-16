<?php
include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";


$sql = "select * from produtos where descricao like '%$filtro%' order by nome ";
$consulta = mysqli_query($conexao, $sql);


mysqli_close($conexao);
?>

<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">    
        <link rel="stylesheet" href="estilo.css">
        <title>Sistema de Cadastro</title>
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
            <h1 id="titulo1">Produtos Cadastrados</h1>
            <hr><br>
          </section>      
          <div class="form-wrapper1">
            <form method="get" action="">
                      Pesquisar: <input type="text" name="filtro" class="campo" placeholder="Pesquisar" require autofocus>
                      <input type="submit" value="Pesquisar" class="btn">
              </form>

              <?php
              print "Resultados com a palavra <strong>$filtro</strong>: <br><br>";
              while($exibirRegistros= mysqli_fetch_array($consulta)){
                $codigo = $exibirRegistros[0];
                $nome = $exibirRegistros[1];
                $descricao = $exibirRegistros[2];
                $preco = $exibirRegistros[3];
                $categoria = $exibirRegistros[4];
              
                print "<class= article>";
              
                print "Código: $codigo<br>";
                print "Nome do Produto: $nome<br>";
                print "Descrição: $descricao<br>";
                print "Preço do Produto: R$$preco<br>";
                print "Categoria: $categoria<br><br>";
              
              
                print"</article>";
              }
              ?>
          </div> 
         </div>
     </body>
            
</html>