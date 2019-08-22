<?php
require_once('conexao.php');


function conecta() {
  return mysqli_connect(HOST, USER, PASS, BANCO);
}

?>
