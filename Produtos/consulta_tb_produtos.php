<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<html>
<head>
<center>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consulta Produtos</title>
<body>
<?php
error_reporting(0);

$db = mysql_connect ("localhost", "root", "vertrigo");
mysql_select_db("sistema_estoque_2020",$db);
$result = mysql_query("select * from tb_produtos", $db);
echo "<table border='1'><tr><td><h1>Código</h1></td><td><h1>Embalagem</h1></td>
<td><h1>Estoque</h1></td><td><h1>Preço Venda</h1></td>
<td><h1>Descrição</h1></td><td><h1>Observações</h1></td></tr><td><h1>Preço Custo</h1></td>
<td><h1>Ipi</h1></td>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr><td>".$row["pro_codigo"]."</td><td>".$row["pro_descricao"]."</td>
	<td>".$row["tpp_codigo"]."</td><td>".$row["pro_precocusto"]."</td>
	<td>".$row["pro_precovenda"]."</td><td>".$row["pro_estoque"]."</td></tr><br>".
	"</td><td>".$row["pro_embalagem"]."</td><td>".$row["pro_ipi"];
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