<?php
require_once('conexao.php');


  function navega($pagina){
  switch ($pagina) {
    case 'pessoa':
      require 'paginas/pessoa.php';
      break;
    case 'pessoaincluir':
      require 'paginas/pessoaincluir.php';
      break;
    case 'salvarPessoa':
      require 'control/salvarPessoa.php';
      break;
    case 'pessoaalterar':
      require 'paginas/pessoaalterar.php';
      break;
    case 'alterarPessoa':
      require 'control/alterarPessoa.php';
      break;
    case 'pessoaexcluir':
      require 'paginas/pessoaexcluir.php';
      break;
    case 'excluirPessoa':
      require 'control/excluirPessoa.php';
      break;
    default:
      require 'paginas/home.php';
      break;
  }
}
function conecta() {
  return mysqli_connect(HOST, USER, PASS, BANCO);
}

?>
