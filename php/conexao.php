<?php
    //Armazenamento de dados do banco
    $serverName = "localhost"; 
    $userAccess = "root";
    $password = "";
    $databaseName = "local_flix";

    //Conexao com o banco de dados
    $conexao = new mysqli($serverName, $userAccess, $password, $databaseName);
?>