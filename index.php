<!doctype html>
<html>
  <head>
      <meta charset="utf-8">    
      <title id="titulo">Cadastro de Produtos</title>
      <link rel="stylesheet"  href="estilo.css" >
  </head>
  <body>  
    <section>
        <h1 id="titulo1">Cadastro de Produtos</h1>
        <hr><br><br>
    </section>
    <div class="form-wrapper">
        <div class="container">
            <nav>
              <ul class="menu">
                <a href="index.php"><li>Cadastro</li></a>
                <a href="consultas.php"><li>Consultas</li></a>
              </ul>
            </nav>
        </div>
        <form method="post" action="processa.php">
          <h2 id="titulo">Nome do Produto</h2>
          <input type="text" name="nome" class="campo" minlength="2" placeholder="Digite o nome do produto" required autofocus><br>
          <h2 id="titulo">Descrição do Produto</h2>
          <input type="text" name="descricao" class="campoDescricao" minlength="10" placeholder="Digite a descrição do produto" required autofocus><br>
          <h2 id="titulo"> Preço do Produto</h2>
          <input type="number" name="preco" class="campo" minlength="1" placeholder="Digite o preço do produto (XX.XX)" required autofocus><br>
          <h2 id="titulo"> Categoria do Produto</h2>
          <input type="text" name="categoria" class="campo" minlength="4" placeholder="Digite a categoria do produto" required autofocus><br>
          <input type="submit" value="Salvar" class="btn" >
          <br><br>
        </form>
    </div>
  </body>
</html>
