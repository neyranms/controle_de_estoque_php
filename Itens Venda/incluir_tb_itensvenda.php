<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<?php
error_reporting(0);
$db = mysql_connect ("localhost","root","vertrigo");
mysql_select_db("sistema_estoque_2020",$db);
$itv_codigo=$_POST['itv_codigo'];
$ven_codigo1=$_POST['ven_codigo'];
$pro_compra1=$_POST['pro_compra'];
$tpp_codigo1=$_POST['tpp_codigo'];
$nf_codigo1=$_POST['nf_codigo'];
$tpg_codigo1=$_POST['tpg_codigo'];
$itv_qtde1=$_POST['itv_qtde'];
$itv_valorun1=$_POST['itv_valorun'];
$itv_desc1=$_POST['itv_desc'];
$itv_valortotal1=$_POST['itv_valortotal'];
$itv_embalagem1=$_POST['itv_embalagem'];



$inserir = mysql_query("INSERT INTO tb_itensvenda
                (itv_qtde,itv_valorun,itv_desc,itv_valortotal,itv_embalagem) 
		        VALUES('$ven_codigo1',
				'$pro_compra1','$tpp_codigo1','$nf_codigo1','$tpg_codigo1',
				'$itv_qtde1','$itv_valorun1','$itv_valortotal1','$itv_embalagem1')") or die (mysql_error());
mysql_close ($db);
include("consulta_tb_itensvenda.php");
?>