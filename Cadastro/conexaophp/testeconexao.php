<?php
    
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassaword = '';
    $dbName = 'bancodedados';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassaword,$dbName);

//    if($conexao->connect_errno)
//    {
//        echo "erro";
//    }
//    else
//    {
//        echo "Conexao estabeleciada com sucesso";
//    }


    
?>