<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<html>
<head>
<center>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consulta Fornecedor</title>
<body>
<?php
error_reporting(0);

$db = mysql_connect ("localhost", "root", "vertrigo");
mysql_select_db("sistema_estoque_2020",$db);
$result = mysql_query("select * from tb_fornecedor", $db);
echo "<table border='1'><tr><td><h1>Código</h1></td><td><h1>Nome</h1></td>
<td><h1>Endereço</h1></td><td><h1>Bairro</h1></td></tr>
<td><h1>Uf</h1></td><td><h1>CnpfCpf</h1></td></tr>
<td><h1>RG</h1></td><td><h1>Telefone</h1></td></tr>
<td><h1>Fax</h1></td><td><h1>Celular</h1></td></tr>
<td><h1>Email</h1></td>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr><td>".$row["for_codigo"]."</td><td>".$row["for_nome"]."</td>
	<td>".$row["for_endereco"]."</td><td>".$row["for_numero"]."</td>
	<td>".$row["for_bairro"]."</td><td>".$row["for_cidade"]."</td>
	<td>".$row["for_uf"]."</td><td>".$row["for_cnpfcpf"]."</td>
	<td>".$row["for_rgie"]."</td><td>".$row["for_telefone"]."</td>
	<td>".$row["for_fax"]."</td><td>".$row["for_celular"]."</td>
	<td>".$row["for_email"]."</td></tr><br>";
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