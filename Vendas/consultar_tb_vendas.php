<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<html>
<head>
<center>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vendas</title>
<body>
<?php
error_reporting(0);

$db = mysql_connect ("localhost", "root", "vertrigo");
mysql_select_db("sistema_estoque_2020",$db);
$result = mysql_query("select * from tb_vendas", $db);
echo "<table border='1'><tr><td><h1>Código</h1></td><td><h1>Valor</h1></td>
<td><h1>Taxa Imposto</h1></td><td><h1>Valor Imposto</h1></td></tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr><td>".$row["ven_codigo"]."</td><td>".$row["ven_datavenda"]."</td>
	<td>".$row["ven_valortotal"]."</td><td>".$row["ven_observacoes"]."</td>
	</tr><br>"."</td><td>".$row["fun_codigo"]."</td><td>".$row["tpg_codigo"]
	"</td><td>".$row["nf_codigo"];
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