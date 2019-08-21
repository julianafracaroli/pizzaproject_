<?php
print_r($_POST);

//$nome = trim($_POST['nome']);
//$sigla = trim($_POST['sigla']);
$idPessoa = trim($_POST['idPessoa']);

//Gravando os dados no BD
$con = conecta();
$delete = "delete from Pessoa where idPessoa=$idPessoa";
//echo $update;
$res = mysqli_query($con, $delete);

if ($res){
  echo "Pessoa excluída com sucesso!!! <br><br>";
  echo "<a href='?pagina=Pessoa'>Voltar</a>";
} else {
  echo "Pessoa Não foi excluída, por favor, contacte o administrador!!! <br><br>";
  echo "<a href='?pagina=Pessoa'>Voltar</a>";
}
?>
