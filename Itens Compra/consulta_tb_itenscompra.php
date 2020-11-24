<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<html>
<head>
<center>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consulta Itens Compras</title>
<body>
<?php
error_reporting(0);

$db = mysql_connect ("localhost", "root", "vertrigo");
mysql_select_db("sistema_estoque_2020",$db);
$result = mysql_query("select * from tb_itenscompra", $db);
echo "<table border='1'><tr><td><h1>Itens Compras Codigo</h1></td><td><h1>Embalagem</h1></td>
<td><h1>Quantidade</h1></td><td><h1>Valorun</h1></td>
<td><h1>Descrição</h1></td><td><h1>Observações</h1></td></tr><td><h1>Valor Total</h1></td>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr><td>".$row["itc_codigo"]."</td><td>".$row["com_codigo"]."</td><td>".$row["pro_codigo"]."</td>
	<td>".$row["tpp_codigo"]."</td><td>".$row["nf_codigo"]."</td>
	<td>".$row["for_codigo"]."</td><td>".$row["tpg_codigo"]."</td></tr><br>".
	"</td><td>".$row["itc_embalagem"]."</td><td>".$row["itc_qtde"]."</td><td>".$row["itc_valorun"].
	"</td><td>".$row["itc_desc"]."</td><td>".$row["itc_valor total"].;
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