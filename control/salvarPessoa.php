<?php
//print_r($_POST);
include '../config/funcs.php';

$nome = trim($_POST['nome']);
$email = trim($_POST['email']);
$senha = trim($_POST['senha']);
$rua = trim($_POST['rua']);
$bairro = trim($_POST['bairro']);
$cep = trim($_POST['cep']);



//Gravando os dados no BD
$con = conecta();
$insert = "INSERT INTO Pessoa ( nome, email, senha, rua, bairro, cep) values ('$nome', '$email', '$senha', '$rua', '$bairro', '$cep')";
$res = mysqli_query($con, $insert);

if ($res){
  echo "salvos com sucesso! <br><br>";
} else {
  echo "pessoa nao foi inserido, contacte o administrador!!!   <br><br> ";

}
?>
