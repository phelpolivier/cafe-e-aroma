<?php 
    if(isset($_POST['submit']))
    {
        print_r($_POST['email']);
        print_r('<br>');
        print_r($_POST['nome']);
        print_r('<br>');
        print_r($_POST['senha']);
    
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO Pessoa(nome,email,senha) values ('$nome','$email','$senha')");
    }
?>
