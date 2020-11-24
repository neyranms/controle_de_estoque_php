<!--Início Incluir-->
<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<center>
<body bgcolor="red">
<form method="POST" action="incluir_tb_contareceber.php">
<p><br>
Codigo:<br>
<input type="text" name="cr_codigo"><br><br>
Valor:<br>
<input type="text" name="cr_valorconta"><br><br> 
Data Vencimento:<br>
<input type="text" name="cr_datavencimento"><br><br>
Data Recebimento:<br>
<input type="text" name="cr_datarecebimento"><br><br>

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
</select><br><br>
Observacoes:<br>
<input type="text" name="cr_observacoes"><br><br>

</p> <br>

<input type="submit" name="Submit" class="botao" value="Incluir">
</form>
</center>
<!--Fim Incluir-->