<?php
$hostname= "localhost";
$user= "id17145766_root";
$password="Sandrats3497@";
$database= "id17145766_dados1";
$conexao= mysqli_connect($hostname,$user,$password,$database);

if(!$conexao){
    print"Falha na conexão com o banco de dados";
}


?>
