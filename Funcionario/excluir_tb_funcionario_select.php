<meta http-equiv="Content-Type" content="text/html;charset=utf-8"> 
<center>
<!--Início Excluir-->
<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<form method="post" action="excluir_funcionario.php"><br>
<p> <br>
Codigo C/R:
<select size="1" name="fun_codigo">
<?php
// Gera a lista de saida
$conexao=mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_estoque_2020",$conexao);
$res=mysql_query("select * from tb_contareceber");
while ($registro=mysql_fetch_row($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod</option>\n";
}
?>
</select><br><br>

<input type="submit" name="Submit" value="Excluir" class="botao">
</form>
</center>
<!--Fim Excluir-->