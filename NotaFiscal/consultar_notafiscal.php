<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<html>
<head>
<center>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consulta Nota Fiscal</title>
<body>
<?php
error_reporting(0);

$db = mysql_connect ("localhost", "root", "vertrigo");
mysql_select_db("sistema_estoque_2020",$db);
$result = mysql_query("select * from tb_notafiscal", $db);
echo "<table border='1'><tr><td><h1>Código</h1></td><td><h1>Valor</h1></td>
<td><h1>Taxa Imposto</h1></td><td><h1>Valor Imposto</h1></td></tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr><td>".$row["nf_codigo"]."</td><td>".$row["nf_valornf"]."</td>
	<td>".$row["nf_taxaimpostonf"]."</td><td>".$row["nf_valorimposto"]."</td>
	</tr><br>";
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