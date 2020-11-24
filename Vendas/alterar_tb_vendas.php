<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<?php
error_reporting(0);
$db = mysql_connect ("localhost", "root", "vertrigo");
mysql_select_db("sistema_estoque2020",$db);\
$ven_codigo1=$_POST['ven_codigo'];
$ven_datavenda1=$_POST['ven_datavenda'];
$ven_valortotal1=$_POST['ven_valortotal'];
$ven_observacoes1=$_POST['ven_observacoes'];

$alterar = mysql_query("UPDATE tb_vendas
                     SET 
					ven_codigo = '$ven_codigo1',
					ven_datavenda = '$ven_datavenda1', 
					ven_valortotal = '$ven_valortotal1', 
					ven_observacoes = '$ven_observacoes1' 
					 WHERE ven_codigo ='$ven_codigo1' ")
					 or die (mysql_error());
mysql_close ($db);
include "consulta_vendas.php";
?>