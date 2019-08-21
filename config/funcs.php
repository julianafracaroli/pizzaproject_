<?php
function navega($pagina){
  switch ($pagina) {
    case 'estado':
      require 'paginas/estado.php';
      break;
    case 'estadoincluir':
      require 'paginas/estadoincluir.php';
      break;
    case 'gravaestado':
      require 'controle/gravaestado.php';
      break;
    case 'estadoalterar':
      require 'paginas/estadoalterar.php';
      break;
    case 'alteraestado':
      require 'controle/alteraestado.php';
      break;
    case 'estadoexcluir':
      require 'paginas/estadoexcluir.php';
      break;
    case 'excluiestado':
      require 'controle/excluiestado.php';
      break;
    case 'cidade':
      require 'paginas/cidade.php';
      break;
    case 'cidadeincluir':
      require 'paginas/cidadeincluir.php';
      break;
    case 'gravacidade':
      require 'controle/gravacidade.php';
      break;
    case 'cidadealterar':
      require 'paginas/cidadealterar.php';
      break;
    case 'alteracidade':
      require 'controle/alteracidade.php';
      break;
    case 'cidadeexcluir':
      require 'paginas/cidadeexcluir.php';
      break;
    case 'excluicidade':
      require 'controle/excluicidade.php';
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
