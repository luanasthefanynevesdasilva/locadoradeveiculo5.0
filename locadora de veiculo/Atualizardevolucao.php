
<?php
include_once("conexao.php");






?>
<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="estilo.css">
    <title>atualizar devolucao</title>

      
      
</head>
<body>

<section class="menu2">
      <a href="Cadastrodevolucao.php">Cadastrar</a>
      <a href=" pesquisardevolucao.php">listar</a><a href="excluirdevolucao.php">excluir</a>
       <a href="Atualizardevolucao.php">atualizar</a><br>
</section>
      <h1><a class="voltar" class="btn" href="index.php">voltar</a><br></h1>
                <hr><br><br>  
<form method="post" class="Formulario">

    <input type="text" placeholder="iddevolu�ao" name="iddevolu�ao" size="20" maxlength="10" required><br>
    <input type="text" placeholder="avaria" name="avaria" size="40" maxlength="43" required><br>
    <input type="text" placeholder="idaluguel" name="idaluguel" size="20" maxlength="20" required><br>
    data devolucao<br>
    <input type="date" placeholder="datadevolucao" name="datadevolucao" size="20" maxlength="20" required><br>
    <input type="text" placeholder="combustiveldevolucao" name="combustiveldevolucao" size="20" maxlength="20" required><br>
    <input type="text" placeholder="extra" name="extra" size="20" maxlength="20" required><br>
    <input type="submit" name="Executar" value="Atualizar">

    <?php


    if(isset($_POST["iddevolu�ao"])) {
        $iddevolu�ao = $_POST["iddevolu�ao"];
        $avaria = $_POST["avaria"];
        $idaluguel = $_POST["idaluguel"];
        $datadevolucao = $_POST["datadevolucao"];
        $combustiveldevolucao = $_POST["combustiveldevolucao"];
        $extra = $_POST["extra"];

        $conn = new mysqli($hostname,$user,$password,$database);
        

        if ($conn->connect_error) {
            die("Erro na conex�o com o Banco");
        }
        else {
            $sql = "UPDATE devolu�ao set avaria = '$avaria', idaluguel =  '$idaluguel', datadevolucao =  '$datadevolucao' , combustiveldevolucao =  '$combustiveldevolucao', extra =  '$extra' where iddevolu�ao = $iddevolu�ao";
            echo"<br><br>";
            if ($conn->query($sql) === TRUE) {
                echo "<span><b>Aviso:</b>Dados Atulizados com Sucesso</span>";
            } else {
                echo "<span><b>Aviso:</b> Erro ao atualizar, verifique os dados!<span>" . $sql . "<br>" . $conn->error;
            }
        }
        $conn->close();
    }
    ?>
</form>


<footer>

</footer>
</body>
</html>
