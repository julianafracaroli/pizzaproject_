<?php
$con = conecta();
$res = mysqli_query ($con, 'SELECT cidade.idcid, cidade.nome, cidade.idest, estado.sigla
                           FROM cidade INNER JOIN estado
                           ON cidade.idest=estado.idest');
 ?>

 <table border="1" cellpadding=0 cellspacing=0>
    <tr> <td colspan="4" align='center'> Gestão de Cidade!! </td></tr>
    <tr>
        <td> Nome Cidade  </td>
        <td> Sigla Estado </td>
        <td colspan="2" align="center"> Ações </td>
    </tr>
    <?php while ($cidade = mysqli_fetch_assoc($res)):?>
    <tr>
        <td><?php echo $cidade['nome'];?> </td>
        <td><?php echo $cidade['sigla'];?>   </td>
        <td>
          <a href="?pagina=cidadealterar&idcid=<?php echo $cidade['idcid'];?>">
            Alterar
          </a>
        </td>
        <td>
          <a href="?pagina=cidadeexcluir&idcid=<?php echo $cidade['idcid'];?>">
          Excluir
          </a>
        </td>
   </tr>
 <?php endwhile; ?>
    <tr>
        <td colspan="4" align="center"><a href="?pagina=cidadeincluir">Novo Cidade</a></td>
    </tr>
</table>
