<!--Início Incluir-->
<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<center>
<body bgcolor="red">
<form method="POST" action="incluir_tb_itensvenda.php">
<p><br>
Codigo Itens Venda:<br>
<input type="text" name="itv_codigo"><br><br>
Codigo Venda:<br>
<input type="text" name="ven_codigo"><br><br>
Codigo Produto:<br>
<input type="text" name="pro_codigo"><br><br>
Tipo Produto Compra:<br>
<input type="text" name="tpp_codigo"><br><br>"
Nota Fiscal:<br>
<input type="text" name="nf_codigo"><br><br>"
Tipo Pagamento:<br>
<input type="text" name="tpg_codigo"><br><br>
Quantidade Item:<br>
<input type="text" name="itv_qtde"><br><br>
Valor Unitario:<br>
<input type="text" name="itv_valorun"><br><br>
Desconto Item:<br>
<input type="text" name="itv_desc"><br><br>
Valor Total:<br>
<input type="text" name="itv_valortotal"><br><br>

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


Compras:<br><select size="1" name="ven_codigo">
<?php
// Gera a lista de Compras
$conexao=mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_estoque_2020",$conexao);
$res=mysql_query("select * from tb_vendas");
while ($registro=mysql_fetch_row($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod</option>\n";
}
?>
</select><br><br>


Tipo Produto:<br><select size="1" name="tpp_codigo">
<?php
//Gera a lista de tipo de produto
$conexao=mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_estoque_2020",$conexao);
$res=mysql_query("select * from tb_tipoproduto");
while ($registro=mysql_fetch_row($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod</option>\n";
}
?>
</select><br><br>


Tipo Pagamento:<br><select size="1" name="tpg_codigo">
<?php
//Gera a lista de tipo de pagamento
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

Produto:<br><select size="1" name="pro_codigo">
<?php
//Gera a lista de tipo de pagamento
$conexao=mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_estoque_2020",$conexao);
$res=mysql_query("select * from tb_produtos");
while ($registro=mysql_fetch_row($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod</option>\n";
}
?>
</select><br><br>


<input type="submit" name="Submit" class="botao" value="Incluir">
</form>
</center>
<!--Fim Incluir-->