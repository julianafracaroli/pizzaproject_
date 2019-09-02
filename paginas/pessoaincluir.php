<?php
$get = isset($_GET['pagina'])? $_GET['pagina']:'';
require 'menu.php'
?>

<table border="0" cellpadding=0 cellspacing=0>
    <tr> <td colspan="2" align='center'> Cadastro </td></tr>
    <form action="?pagina=gravapessoa" method="post">
    <tr>
        <td width="80 px"> Nome: </td>
        <td> <input id="inputName" name="nome" type="text" required> </td>
    </tr>
    <tr>
        <td> Email: </td>
        <td> <input id="inputEmail4" name="email" type="text" required> </td>
    </tr>
    <tr>
        <td> Senha: </td>
        <td> <input id="inputPassword4" name="senha" type="text" required> </td>
    </tr>
    <tr>
        <td> Rua: </td>
        <td> <input id="idRua" name="rua" type="text" required> </td>
    </tr>
    <tr>
        <td> Bairro: </td>
        <td> <input id="idbairro" name="bairro" type="text" required> </td>
    </tr>
    <tr>
        <td> CEP: </td>
        <td> <input id="idcep" name="cep" type="text" required> </td>
    </tr>
    <tr align="center">
        <td> <button type="submit">Gravar</button> </td>
        <td> <button type="reset">Cancelar</button> </td>
    </tr>
  </form>
</table>
