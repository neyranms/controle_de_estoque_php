<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<html>
<head>
<center>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consulta Contas A Pagar</title>
<body>
<?php
error_reporting(0);

$db = mysql_connect ("localhost", "root", "vertrigo");
mysql_select_db("sistema_estoque_2020",$db);
$result = mysql_query("select * from tb_contapagar", $db);
echo "<table border='1'><tr><td><h1>Código</h1></td><td><h1>ValorConta</h1></td>
<td><h1>Data Vencimento</h1></td><td><h1>Data Recebimento</h1></td>
<td><h1>Codigo Nota Fiscal</h1></td><td><h1>Observações</h1></td></tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr><td>".$row["cp_codigo"]."</td><td>".$row["cp_valorconta"]."</td>
	<td>".$row["cp_datavencimento"]."</td><td>".$row["cp_datarecebimento"]."</td>
	<td>".$row["nf_codigo"]."</td><td>".$row["cp_observacoes"]."</td></tr><br>";
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