<?php
include_once "conexao.php";

 ?>



<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="estilo.css">


      
      
</head>
<body>

<section class="menu2">
      <a href="Cadastroveiculo.php">Cadastrar</a>
      <a href=" pesquisarveiculo.php">listar</a><a href="excluirveiculo.php">excluir</a>
       <a href="Atualizarveiculo.php">atualizar</a><br>
</section>
      <h1><a class="voltar" class="btn" href="index.php">voltar</a><br></h1>
            

       
    <form method="post">
        <input type="search" name="txtprocurar" placeholder="Procure por veiculo">
        <input type="submit" value="Buscar">
    </form>

                
				
<?php


    

        $conn = new mysqli($hostname,$user,$password,$database);
    if ($conn->connect_error) {
        die("Falha na conexao: " . $conn->connect_error);
    }
    else {

        if(isset($_POST["pr"]))
        {
            $dado = $_POST["pr"];

            if(!$dado == "")
                $sql = 'Select * from veiculo where nome LIKE "%'.$dado.'%"';
            else
                $sql = "Select * from veiculo";
        }
        else
        {
            if(isset($_POST["txtprocurar"]))
            {
                $dado = $_POST["txtprocurar"];
                $sql = 'Select * from veiculo where nome LIKE "%'.$dado.'%"';
            }
            else
            {

                $sql = "Select * from veiculo";
            }
        }
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {

       echo"<table>
    <tr>
        
        <th >ano</th>
        <th >cor</th>
        <th >modelo</th>
        <th >tipoveiculo</th>
        <th >placa</th>
        <th >idseguro</th>
        <th >chassin</th>
        <th >idveiculo</th>

    </tr>";

            while ($row = $result->fetch_assoc()) {
                

                $ano = $row['ano'];
                $cor = $row['cor'];
                $modelo = $row['modelo'];
                $tipoveiculo = $row['tipoveiculo'];
                $placa = $row['placa'];
                $idseguro = $row['idseguro'];
                $chassin = $row['chassin'];
                $idveiculo = $row['idveiculo'];

                echo " <tr>";
               
                echo "<td>" . $ano . "</td>";
                echo "<td>" . $cor . "</td>";
                echo "<td>" . $modelo . "</td>";
                echo "<td>" . $tipoveiculo . "</td>";
                echo "<td>" . $placa . "</td>";
                echo "<td>" . $idseguro . "</td>";
                echo "<td>" . $chassin . "</td>";
                echo "<td>" . $idveiculo . "</td>";


                echo "</tr>";


            }
        } else {
          
            echo "<h2>Nenhum veiculo encontrado!!..</h2>";
        }
        $conn->close();
    }
    ?>
</table>

</section>
<footer>

</footer>
</body>
</html>
