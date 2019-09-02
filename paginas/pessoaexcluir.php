<?php
$idcid = trim($_GET['idcid']);
$con = conecta();
$res = mysqli_query($con, "SELECT cidade.nome, estado.sigla
                           FROM cidade INNER JOIN estado ON
                           cidade.idest=estado.idest WHERE idcid=$idcid");
$cidade = mysqli_fetch_assoc($res);
 ?>
<table border="0" cellpadding=0 cellspacing=0>
    <tr> <td colspan="2" align='center'> Gestão de Estados!! </td></tr>
    <form action="?pagina=excluicidade" method="post">
    <tr>
        <td width="80 px"> Nome: </td>
        <td> <input id="nome" name="nome" type="text"
             value="<?php echo $cidade['nome'];?>" required> </td>
    </tr>
    <tr>
        <td> Sigla: </td>
        <td> <input id="sigla" name="sigla" type="text"
             value="<?php echo $cidade['sigla'];?>" required> </td>
    </tr>
    <tr align="center">
        <td>
          <input id="idcid" name="idcid" value="<?php echo $idcid;?>"
          type="hidden" >
          <button type="submit">Confirma Excluir</button>
        </td>
        <td> <button type="reset">Cancelar</button> </td>
    </tr>
  </form>
</table>
