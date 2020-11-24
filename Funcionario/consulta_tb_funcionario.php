<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<html>
<head>
<center>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consulta Funcionario</title>
<body>
<?php
error_reporting(0);

$db = mysql_connect ("localhost", "root", "vertrigo");
mysql_select_db("sistema_estoque_2020",$db);
$result = mysql_query("select * from tb_funcionario", $db);
echo "<table border='1'><tr><td><h1>Código</h1></td><td><h1>Nome</h1></td>
<td><h1>Endereço</h1></td><td><h1>Número</h1></td>
<td><h1>Complemento</h1></td><td><h1>Bairro</h1></td></tr><td><h1>cidade</h1></td> 
<td><h1>UF</h1></td><td><h1>CNPJ CPF</h1></td><td><h1>rg</h1></td><td><h1>Sexo</h1></td>
<td><h1>Nascimento</h1></td><td><h1>Telefone</h1></td><td><h1>Celular</h1></td>
<td><h1>Email</h1></td><td><h1>Salário</h1></td>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr><td>".$row["fun_codigo"]."</td><td>".$row["fun_nome"]."</td>
	<td>".$row["fun_endereco"]."</td><td>".$row["fun_numero"]."</td>
	<td>".$row["fun_complemento"]."</td><td>".$row["fun_bairro"]."</td></tr><br>"
	"<tr><td>".$row["fun_cidade"]."<tr><td>".$row["fun_uf"]."<tr><td>".$row["fun_cnpjcpf"].
	"<tr><td>".$row["fun_rg"]."<tr><td>".$row["fun_sexo"]."<tr><td>".$row["fun_nascimento"].
	"<tr><td>".$row["fun_telefone"]."<tr><td>".$row["fun_celular"]."<tr><td>".$row["fun_email"].
	"<tr><td>".$row["fun_salario"].;
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