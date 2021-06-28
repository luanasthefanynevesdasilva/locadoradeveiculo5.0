<?php
include_once("conexao.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];



$sql="insert into funcionario (nome,cpf) values ('$nome','$cpf')";
$salvar = mysqli_query($conexao,$sql);

$linhas=mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastrar funcionario</title>

      
      
</head>
<body>
<header>
    <nav class="Menu">
        <ul>
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
                <h1></h1>
                <hr><br><br>  
                
                <?php
                if($linhas == 1){
                    print"   sucesso!";
    
                }else{
                    print"Cadastro Não efetuado.<br>Já existe um usuário com este email!";
                }
            
                
                
                ?>
            </section>
        </div>
</body>
</html>