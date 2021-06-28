<?php
include_once("conexao.php");






?>

<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="estilo.css">
    <title>excluir funcionario</title>

      
      
</head>
<body>

<section class="menu2">
          <a href="cadastrofuncionario.php">Cadastrar</a> <a href=" pesquisarfuncionario.php">lista</a><a href="excluirfuncionario.php">excluir</a>
       <a href="Atualizarfuncionario.php">atualizar</a><br>
</section>
       <h1><a class="voltar" class="btn" href="index.php">voltar</a><br></h1>
                <hr><br><br>  
                
         <form method="post" class="Formulario" action="#">
    <br>
    <br>

    <input type="text" placeholder="Codigo do funcionario" name="idfuncionario" class="txtcodigo" required><br>
    <input type="submit" name="Executar" value="Excluir">
   <?php


    if(isset($_POST["idfuncionario"])) {
        $idfuncionario = $_POST["idfuncionario"];

         $conn = new mysqli($hostname,$user,$password,$database);
        echo"<br><br>";

        if ($conn->connect_error) {
            die("Erro na conexão com o Banco");
        }
        else {
            $sql = "delete from funcionario WHERE  idfuncionario = $idfuncionario";

            if ($conn->query($sql) === TRUE) {
                echo "<span><b>Aviso:</b>usuario excluido com sucesso!</span>";
            } else {
                echo "<span><b>Aviso:</b>Erro ao excluir, verifique Código</span>";
            }
        }

        $conn->close();
    }
    ?>
</form>
</body>
</html>
