<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<?php
error_reporting(0);
$db = mysql_connect ("localhost","root","vertrigo");
mysql_select_db("sistema_estoque_2020",$db);
$itc_codigo1=$_POST['itc_codigo'];
$com_codigo1=$_POST['com_codigo'];
$pro_compra1=$_POST['pro_compra'];
$tpp_codigo1=$_POST['tpp_codigo'];
$nf_codigo1=$_POST['nf_codigo'];
$tpg_codigo1=$_POST['tpg_codigo'];
$itc_qtde1=$_POST['itc_qtde'];
$itc_valorun1=$_POST['itc_valorun'];
$itc_desc1=$_POST['itc_desc'];
$itc_valortotal1=$_POST['itc_valortotal'];

$inserir = mysql_query("INSERT INTO tb_itenscompra
                (itc_qtde,itc_valorun,itc_desc,itc_valortotal) 
		        VALUES('$com_codigo1',
				'$pro_compra1','$tpp_codigo1','$nf_codigo1','$tpg_codigo1',
				'$itc_qtde1','$itc_valorun1','$itc_valortotal1')") or die (mysql_error());
mysql_close ($db);
include("consulta_tb_itenscompra.php");
?>