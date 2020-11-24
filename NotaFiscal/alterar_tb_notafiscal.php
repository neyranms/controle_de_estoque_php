<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<?php
error_reporting(0);
$db = mysql_connect ("localhost", "root", "vertrigo");
mysql_select_db("sistema_estoque2020",$db);\
$nf_codigo1=$_POST['nf_codigo'];
$nf_valornf1=$_POST['nf_valornf'];
$nf_taxaimpostonf1=$_POST['nf_taxaimpostonfo'];
$nf_valorimposto1=$_POST['nf_valorimposto'];


$alterar = mysql_query("UPDATE tb_notafiscal
                     SET 
					nf_codigo = '$nf_codigo1',
					nf_valornf = '$nf_valornf1', 
					nf_taxaimpostonf = '$nf_taxaimpostonf1', 
					nf_valorimposto = '$nf_valorimposto1'
					 WHERE nf_codigo ='$nf_codigo1' ")
					 or die (mysql_error());
mysql_close ($db);
include "consulta_notafiscal.php";
?>