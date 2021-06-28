<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastrar seguro</title>

      
      
</head>
<body>

<section class="menu2">
         <a href="Cadastroseguro.php">Cadastrar</a> <a href=" pesquisarseguro.php">lista</a><a href="excluirseguro.php">excluir</a><a href="Atualizarseguro.php">atualizar</a><br>
</section>
      <h1><a class="voltar" class="btn" href="index.php">voltar</a><br></h1>
                <hr><br><br>  
<form id="cadcliente" method="post"  class="Formulario" action="processaseguro.php">


                    data-inicio<br>
                    <input type="date" name="datainicio" class="campo" maxlength="40" required autofocus><br>
                    data-final<br>
                    <input type="date" name="datafinal" class="campo" maxlength="40" required autofocus><br>
    				valor<br>
                    <input type="text" name="valor" class="campo" maxlength="40" required autofocus><br>


                    <input type="submit" value="salvar" class="btn"><br>
                    <input type="reset" value="limpar" class="btn">

                    <br><br>
        </form>


<footer>

</footer>
</body>
</html>

