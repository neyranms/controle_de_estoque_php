<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<?php
error_reporting(0);
$db = mysql_connect ("localhost", "root", "vertrigo");
mysql_select_db("sistema_estoque2020",$db);
$cr_codigo1=$_POST['cr_codigo'];

$resultado = mysql_query("DELETE FROM tb_contareceber 
					WHERE cr_codigo='$cr_codigo1' ") or die (mysql_error());
				
mysql_close ($db);
include "consulta_tb_contareceber.php";
?>