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
         <a href="Cadastroseguro.php">Cadastrar</a> <a href=" pesquisarseguro.php">lista</a><a href="excluirseguro.php">excluir</a><a href="Atualizarseguro.php">atualizar</a><br>
</section>
      <h1><a class="voltar" class="btn" href="index.php">voltar</a><br></h1>
            

       
    <form method="post">
        <input type="search" name="txtprocurar" placeholder="Procure por seguro">
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
                $sql = 'Select * from seguro where idseguro LIKE "%'.$dado.'%"';
            else
                $sql = "Select * from seguro";
        }
        else
        {
            if(isset($_POST["txtprocurar"]))
            {
                $dado = $_POST["txtprocurar"];
                $sql = 'Select * from seguro where idseguro LIKE "%'.$dado.'%"';
            }
            else
            {

                $sql = "Select * from seguro";
            }
        }
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {

       echo"<table>
    <tr>
        
        <th >valor</th>
        <th >datainicio</th>
        <th >datafinal</th>
        <th >idseguro</th>
 

    </tr>";

            while ($row = $result->fetch_assoc()) {
                

                $valor = $row['valor'];
                $datafinal = $row['datafinal'];
                $datainicio = $row['datainicio'];
                $idseguro = $row['idseguro'];

                echo " <tr>";
               
                echo "<td>" . $valor . "</td>";
                echo "<td>" . $datafinal . "</td>";
                echo "<td>" . $datainicio . "</td>";
                echo "<td>" . $idseguro . "</td>";

                echo "</tr>";


            }
        } else {
          
            echo "<h2>Nenhum seguro encontrado!!..</h2>";
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
