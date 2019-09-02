<?php
$con = conecta();
$idemp = trim($_GET['idemp']);
$res = mysqli_query($con, "SELECT * FROM pessoa WHERE idpessoa=$idpessoa");
$pessoa = mysqli_fetch_assoc($res);
 ?>
 <table class="bordered striped centered highlight responsive-table">
    <tr> <td colspan="2" align='center'> Cliente </td></tr>
    <form action="?pagina=alterarempre" method="post">
    <tr>
        <td width="80 px"> Nome: </td>
        <td> <input id="inputName" name="nome" type="text"
             value="<?php echo $pessoa['nome'];?>" required> </td>
    </tr>
    <tr>
      <td> Email </td>
      <td> <input id="inputEmail4" name="email" type="text"
           value="<?php echo $pessoa['email'];?>" required> </td>
  </tr>
  <tr>
      <td> Senha: </td>
      <td> <input id="inputPassword4" name="senha" type="text"
           value="<?php echo $pessoa['senha'];?>" required> </td>
  </tr>
  <tr>
      <td> Rua: </td>
      <td> <input id="idRua" name="rua" type="text"
           value="<?php echo $pessoa['rua'];?>" required> </td>
  </tr>
  <tr>
      <td> Bairro: </td>
      <td> <input id="idbairro" name="bairro" type="text"
           value="<?php echo $pessoa['bairro'];?>" required> </td>
  </tr>
  <tr>
      <td> CEP: </td>
      <td> <input id="idcep" name="cep" type="text"
           value="<?php echo $pessoa['cep'];?>" required> </td>
  </tr>
    <tr align="center">
        <td>
          <input id="idpessoa" name="idemp" value="<?php echo $pessoa['idemp'];?>"
          type="hidden" >
          <button type="submit">Gravar</button>
        </td>
        <td> <button type="reset">Cancelar</button> </td>
    </tr>
  </form>
</table>




































<!-- <?php
$idcid = trim($_GET['idcid']);
$con = conecta();
$res = mysqli_query($con, "SELECT cidade.idcid, cidade.nome, cidade.idest,
                            estado.sigla FROM cidade INNER JOIN estado
                            ON cidade.idest= estado.idest WHERE idcid=$idcid");
$cidade = mysqli_fetch_assoc($res);
 ?>
<table border="0" cellpadding=0 cellspacing=0>
    <tr> <td colspan="2" align='center'> Gestão de Cidades!! </td></tr>
    <form action="?pagina=alteracidade" method="post">
    <tr>
        <td width="80 px"> Nome: </td>
        <td> <input id="nome" name="nome" type="text"
             value="<?php echo $cidade['nome'];?>" required> </td>
    </tr>
    <tr>
        <td> Sigla: </td>
        <td>
          <select name="idest" id="idest">
           <option value="<?php echo $cidade['idest'];?>"><?php echo $cidade['sigla'];?></option>
           <?php
           $resest = mysqli_query($con, "SELECT * FROM estado");
           while ($estado=mysqli_fetch_assoc($resest)):?>
               <option value=<?php echo $estado['idest'];?>>
                     <?php echo $estado['sigla'];?>
               </option>
           <?php endwhile;?>
         </select>
        </td>
    </tr>
    <tr align="center">
        <td>
          <input id="idcid" name="idcid" value="<?php echo $cidade['idcid'];?>"
          type="hidden" >
          <button type="submit">Gravar</button>
        </td>
        <td> <button type="reset">Cancelar</button> </td>
    </tr>
  </form>
</table> -->
