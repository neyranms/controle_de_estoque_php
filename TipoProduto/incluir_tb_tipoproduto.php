<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<?php
error_reporting(0);
$db = mysql_connect ("localhost","root","vertrigo");
mysql_select_db("sistema_estoque_2020",$db);
$tpp_codigo1=$_POST['tpp_codigo'];
$tpp_descricao1=$_POST['tpp_descricao'];

$inserir = mysql_query("INSERT INTO tb_tipoproduto
                (tpp_codigo,tpp_descricao) 
		        VALUES('$tpp_codigo1','$tpp_descricao1')") or die (mysql_error());
mysql_close ($db);
include("consulta_tb_tipoproduto.php");
?>