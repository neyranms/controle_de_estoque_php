<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<?php
error_reporting(0);
$db = mysql_connect ("localhost", "root", "vertrigo");
mysql_select_db("sistema_estoque_2020",$db);
$tpp_codigo1=$_POST['tpp_codigo'];

$resultado = mysql_query("DELETE FROM tb_tipoproduto 
					WHERE tpp_codigo='$tpp_codigo1' ") or die (mysql_error());
				
mysql_close ($db);
include "consulta_tb_tipoproduto.php";
?>