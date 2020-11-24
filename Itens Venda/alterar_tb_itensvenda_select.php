<!--Início Alterar-->
<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<center>
<body bgcolor="mediumturquoise">
<form method="POST" action="alterar_tb_itensvenda.php">
<br>
Codigo:<br><select size="1" name="itv_codigo">
<?php
// Gera a lista de codigo nota fiscal
$conexao=mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_estoque2020",$conexao);
$res=mysql_query("select * from tb_itensvenda");
while ($registro=mysql_fetch_row($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod</option>\n";
}
?>
</select><br><br>

Quantidade:<br>
<input type="text" name="itv_qtde"><br><br> 
ValorUN:<br>
<input type="text" name="itv_valorun"><br><br>
Descrição:<br>
<input type="text" name="itv_desc"><br><br>
Valor Total:<br>
<input type="text" name="itv_valortotal"><br><br>
Embalagem:<br>
<input type="text" name="itv_embalagem"><br><br>

Codigo Nota Fiscal:<br><select size="1" name="nf_codigo">
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
Codigo Venda:<br><select size="1" name="ven_codigo">
<?php
// Gera a lista de codigo nota fiscal
$conexao=mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_estoque_2020",$conexao);
$res=mysql_query("select * from tb_vendas");
while ($registro=mysql_fetch_row($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod</option>\n";
}
?>

Codigo Produto:<br><select size="1" name="pro_codigo">
<?php
// Gera a lista de codigo nota fiscal
$conexao=mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_estoque_2020",$conexao);
$res=mysql_query("select * from tb_produto");
while ($registro=mysql_fetch_row($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod</option>\n";
}
?>

Codigo Tipo Produto:<br><select size="1" name="tpp_codigo ">
<?php
// Gera a lista de codigo nota fiscal
$conexao=mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_estoque_2020",$conexao);
$res=mysql_query("select * from tb_tipoproduto");
while ($registro=mysql_fetch_row($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod</option>\n";
}
?>

Codigo Tipo Pagamento:<br><select size="1" name="tpg_codigo">
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
<input type="submit" name="Submit" value="Alterar" class="botao">
</form>
</center>
<!--Fim Alterar-->