<!--Início Incluir-->
<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<center>
<body bgcolor="red">
<form method="POST" action="incluir_tb_contapagar.php">
<p><br>
Codigo:<br>
<input type="text" name="cp_codigo"><br><br>
Valor Conta:<br>
<input type="text" name="cp_valorconta"><br><br> 
Data Vencimento:<br>
<input type="text" name="cp_datavencimento"><br><br>
Data Pagamento:<br>
<input type="text" name="cp_datapagamento"><br><br>

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

Observacoes:<br>
<input type="text" name="cp_observacoes"><br><br>

</p> <br>

<input type="submit" name="Submit" class="botao" value="Incluir">
</form>
</center>
<!--Fim Incluir-->