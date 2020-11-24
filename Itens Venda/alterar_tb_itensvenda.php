<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<?php
error_reporting(0);
$db = mysql_connect ("localhost", "root", "vertrigo");
mysql_select_db("sistema_estoque2020",$db);\
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


$alterar = mysql_query("UPDATE tb_itensvenda
                     SET 
					itv_codigo = '$itv_codigo1',
					ven_codigo = '$ven_codigo1',
					pro_compra = '$pro_compra1', 
					tpp_codigo = '$tpp_codigo1', 
					nf_codigo = '$nf_codigo1'
					tpg_codigo = '$tpg_codigo1'
					itv_qtde = '$itv_qtde1'
					itv_valorun = '$itv_valorun1'
					itv_desc = '$itv_desc1'
					itv_valortota = '$itv_valortota1'
					itv_embalagem = '$itv_embalagem1'
					
					 WHERE ven_codigo ='$ven_codigo1' ")
					 or die (mysql_error());
mysql_close ($db);
include "consulta_itensvenda.php";
?>