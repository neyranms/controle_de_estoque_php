<!--Início Incluir-->
<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<center>
<body bgcolor="red">
<form method="POST" action="incluir_tb_produtos.php">
<p><br>
Codigo Produto:<br>
<input type="text" name="pro_codigo"><br><br>
Descriçao:<br>
<input type="text" name="pro_descricao"><br><br>
Preço Custo:<br>
<input type="text" name="pro_precocusto''><br><br> 
Preço Venda:<br>
<input type="text" name="pro_provenda><br><br>
Embalagem:<br>
<input type="text" name="pro_embalagem''><br><br> 
IPI:<br>
<input type="text" name="pro_ipi''><br><br> 


Tipo Produto:<br><select size="1" name="tpp_codigo">
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
</select><br><br>

<input type="submit" name="Submit" class="botao" value="Incluir">
</form>
</center>
<!--Fim Incluir-->