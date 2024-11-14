<?php 
if(isset($_POST['submit']) && !empty($_POST['email'])  && !empty($_POST['senha']) )
{
  //acessa
  include_once('config.php');//chama o config local onde o banco esta ligado
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  // este comentario de baixo é um codigo opcional onde você testa se ele consegue puxar as informações utilize ele somente se quiser realmente testar caso contrario não tem utilidade
  
   //print_r('email: . $email);   
  //print_r('<br>');
  //print_r('Senha: ' . $senha);

  $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'"; //seleciona a tabela usuarios e procura email e senha que é igual a sua versão com $

  $result = $conexao->query($sql); 

  if(mysqli_num_rows($result) <1) //caso resultado de errado volta a login caso tenha mais de 1 letra no banco ou seja tenha informações no banco ele redireciona para a loja.html
  {
    header('location: login.php');
  }
  else{
    header('location: loja.html');
  }

}

?>