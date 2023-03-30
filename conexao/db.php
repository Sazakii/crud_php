<?php
    define('HOST','localhost');
    define('USER', 'root');
    define('PASS','');
    define('BASE', 'cadastro');
   
    $conn = new mysqli(HOST,USER,PASS,BASE);

    // if(!mysqli){
    //     echo "Erro ao conectar-se ao banco de dados.";
    // }
