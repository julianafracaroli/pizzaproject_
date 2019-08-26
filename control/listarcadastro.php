<?php
require_once('./config/funcs.php');

$con = conecta();


$cont=1;
$select = "SELECT * FROM pessoa";
$res = mysqli_query ($con, $select);
while($pessoa = mysqli_fetch_assoc($res)){
    echo "<tr>";
    echo "<th>", $cont, "</th>";
    echo "<th>", $pessoa['nome'], "</th>";
    echo "<th>", $pessoa['email'], "</th>";
    echo "<th>", $pessoa['senha'], "</th>";
    echo "<th>", $pessoa['rua'], "</th>";
    echo "<th>", $pessoa['bairro'], "</th>";
    echo "<th>", $pessoa['cep'], "</th>";

    echo "<th><a href=\"#\" class=\"btn btn-secondary text-white\">
    Alterar </a></th>";
    echo "<th><a href=\"#\"
    class=\"btn btn-secondary text-white\"> Excluir </a></th>";
    echo "</tr>";

    $cont = $cont + 1;
}
?>
