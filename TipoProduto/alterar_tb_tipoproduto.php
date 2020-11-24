<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<?php
error_reporting(0);
$db = mysql_connect ("localhost", "root", "vertrigo");
mysql_select_db("sistema_estoque2020",$db);\
$tpp_codigo1=$_POST['tpp_codigo'];
$tpp_observacoes1=$_POST['tpp_observacoes'];

$alterar = mysql_query("UPDATE tb_tipoproduto
                     SET 
					tpp_codigo = '$tpp_codigo1',
					tpp_observacoes = '$tpp_observacoes1' 
					 WHERE tpp_codigo ='$tpp_codigo1' ")
					 or die (mysql_error());
mysql_close ($db);
include "consulta_tipoproduto.php";
?>