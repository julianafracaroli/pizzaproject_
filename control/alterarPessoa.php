<?php
//print_r($_POST);


$nome = trim($_POST['nome']);
$email = trim($_POST['email']);
$senha = trim($_POST['senha']);
$rua = trim($_POST['rua']);
$bairro = trim($_POST['bairro']);
$cep = trim($_POST['cep']);


//Gravando os dados no BD
$con = conecta();
$update = "update pessoa set nome='$nome', email='$email', senha=''$senha', rua='$rua', bairro='$bairro' where cep=$cep ";
//echo $update;
$res = mysqli_query($con, $update);

if ($res){
  echo "alterado com sucesso!!! <br><br>";
  echo "<a href='?pagina=Pessoa'>Voltar</a>";
} else {
  echo "Estado Não foi alterado, por favor, contacte o administrador!!! <br><br>";
  echo "<a href='?pagina=Pessoa'>Voltar</a>";
}
?>
