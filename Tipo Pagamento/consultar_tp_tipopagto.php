<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<html>
<head>
<center>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consulta TipoPagamento</title>
<body>
<?php
error_reporting(0);

$db = mysql_connect ("localhost", "root", "vertrigo");
mysql_select_db("sistema_estoque_2020",$db);
$result = mysql_query("select * from tb_tipopagto", $db);
echo "<table border='1'><tr><td><h1>Código</h1></td><td><h1>Valor</h1></td>
<td><h1>Descricao</h1></td><td><h1>Quantidade</h1></td></tr><td><h1>Ativo</h1></td>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr><td>".$row["tpg_codigo"]."</td><td>".$row["tpg_descricao"]."</td>
	<td>".$row["tpg_qtde"]."</td><td>".$row["tpg_ativo"];
	}
	echo "</table></center>";
	echo "<br />";mysql_free_result($result);
mysql_close ($db);
?><br><br>
<form><center>
<input type="button" value="Voltar" class="botao" onClick="JavaScript: window.history.back();">
</form></center>
</center>
<!--Fim Consulta-->