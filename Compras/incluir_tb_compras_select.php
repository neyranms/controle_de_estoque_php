<!--Início Incluir-->
<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<center>
<body bgcolor="red">
<form method="POST" action="incluir_tb_vendas.php">
<p><br>
Codigo:<br>
<input type="text" name="ven_codigo"><br><br>
Valor Compra:<br>
<input type="text" name="com_valorcompra"><br><br> 
Data Compra:<br>
<input type="text" name="com_datacompra"><br><br>
Valor total:<br>
<input type="text" name="com_valortotal"><br><br>

// Incluir isso,somente se a tabela tiver FK
Contas Nota Fiscal:<br><select size="1" name="nf_codigo">
<?php
// Gera a lista de codigo nota fiscal
$conexao=mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_estoque_2020",$conexao);
$res=mysql_query("select * from tb_notafiscal");
while ($registro=mysql_fetch_row($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod</option>\n";
}
?>
</select><br><br>
//
Fornecedor:<br><select size="1" name="for_codigo">
<?php
// Gera a lista de codigo fornecedor
$conexao=mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_estoque_2020",$conexao);
$res=mysql_query("select * from tb_fornecedor");
while ($registro=mysql_fetch_row($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod</option>\n";
}
?>
</select><br><br>

Tipo Pagamento:<br><select size="1" name="tpg_codigo">
<?php
// Gera a lista de codigo Tipo Pagamento
$conexao=mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_estoque_2020",$conexao);
$res=mysql_query("select * from tb_tipopagto");
while ($registro=mysql_fetch_row($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod</option>\n";
}
?>
</select><br><br>

Observacoes:<br>
<input type="text" name="com_observacoes"><br><br>

</p> <br>

<input type="submit" name="Submit" value="Incluir" class="botao">
</form>
</center>
<!--Fim Incluir-->