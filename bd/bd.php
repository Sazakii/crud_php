<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "cadastro";

    $conn = MySQLi($host,$username,$password,$database);

    if(!MySQLi){
        echo "Erro ao conectar-se ao banco de dados.";
    }
