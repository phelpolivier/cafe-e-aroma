<?php 

    $hostname = "localhost";
    $bancodedados = "coffearoma";
    $usuario = "root";
    $senha = "root";

    $mysqli = mysqli_connect($hostname, $usuario, $senha, $bancodedados);
    
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];

    $sql="insert into Pessoa(nome,email,senha) values('$nome','$email','$senha')";
    mysqli_query($mysqli,$sql);
?> 