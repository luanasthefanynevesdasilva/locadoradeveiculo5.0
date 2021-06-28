<?php
include_once("conexao.php");

$datalocacao = $_POST['datalocacao'];
$idfuncionario = $_POST['idfuncionario'];
$combustivelatual = $_POST['combustivelatual'];
$desconto = $_POST['desconto'];
$troco = $_POST['troco'];
$total = $_POST['total'];
$pago = $_POST['pago'];
$diaria = $_POST['diaria'];
$idusuario = $_POST['idusuario'];
$idaluguel = $_POST['idaluguel'];
$idveiculo = $_POST['idveiculo'];

$sql="insert into aluguel (datalocacao,idfuncionario,combustivelatual,desconto,troco,total,pago,diaria,idusuario) values ('$datalocacao','$idfuncionario','$combustivelatual','$desconto','$troco','$total','$pago','$diaria','$idusuario')";
$salvar = mysqli_query($conexao,$sql);

$sql="insert into itemaluguel (idaluguel,idveiculo)values('$idaluguel','$idveiculo') ";
$salvar = mysqli_query($conexao,$sql);

$linhas=mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="estilo.css">
    <title>realizar aluguel</title>

      
      
</head>
<body>
<header>
    <nav class="Menu">
        <ul>
            <a href="Index1.php"><li>inicio</li></a>
            <a href="Cadastrocliente.php"><li> Cliente</li></a>
            <a href="cadastrofuncionario.php"><li>funcionario</li></a>
            <a href="cadastroseguro.php"><li>seguro</li></a>
            <a href="cadastroveiculo.php"><li>veiculo</li></a>
            <a href="cadastroaluguel.php"><li>aluguel</li></a>
            <a href="cadastrodevolucao.php"><li>devolucao</li></a>
                    </ul>
    </nav>
</header>
            <section>
                <h1>Confirmacao de aluguel</h1>
                <hr><br><br>  
                
                <?php
                if($linhas == 1){
                    print"Cadastro efetuado com sucesso!";
    
                }else{
                    print"Cadastro Não efetuado.<br>";
                }
            
                
                
                ?>
            </section>
        </div>
</body>
</html>