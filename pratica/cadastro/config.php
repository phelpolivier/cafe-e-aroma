<?php // conexão com banco de dados 
     $dbHost = 'localhost';
     $dbUsername = 'root';
     $dbPassword = 'root';
     $dbName = 'CoffeAroma'; 

     $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

     if($conexao->connect_error) // teste para ver a conexão 
     {
     echo "Erro"; // erro caso não conecte
     } 
     else
     {
     echo "Conexão efetuada com sucesso"; // sucesso conectou corretamente 
     }
     // agr vai pro date com o cadastro
?> 