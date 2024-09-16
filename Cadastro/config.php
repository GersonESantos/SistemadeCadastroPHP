<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = 'Gabibi89*'; 
    $dbname = 'formulario';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbname);
    if($conexao->connect_errno){
        echo "Erro na Conexao";
    }
    else
    {
        echo "Conexao realizada com sucesso";
    }
 
?> 