<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<?php
error_reporting(0);
$db = mysql_connect ("localhost", "root", "vertrigo");
mysql_select_db("sistema_estoque2020",$db);\
$com_codigo1=$_POST['com_codigo'];
$pro_compra1=$_POST['pro_compra'];
$tpp_codigo1=$_POST['tpp_codigo'];
$nf_codigo1=$_POST['nf_codigo'];
$for_codigo1=$_POST['for_codigo'];
$tpg_codigo1=$_POST['tpg_codigo'];
$itv_qtde1=$_POST['itv_qtde'];
$itv_valorun1=$_POST['itv_valorun'];
$itv_desc1=$_POST['itv_desc'];
$itv_valortotal1=$_POST['itv_valortotal'];
$itv_embalagem1=$_POST['itv_embalagem'];


$alterar = mysql_query("UPDATE tb_itenscompra
                     SET 
					ven_codigo = '$ven_codigo1',
					pro_compra = '$pro_compra1', 
					tpp_codigo = '$tpp_codigo1', 
					nf_codigo = '$nf_codigo1'
					for_codigo='$for_codigo',
					tpg_codigo = '$tpg_codigo1',
					itc_qtde = '$itc_qtde1'
					itc_valorun = '$itc_valorun1'
					itc_desc = '$itc_desc1'
					itc_valortota = '$itc_valortota1'
					itc_embalagem = '$itc_embalagem1'
					
					 WHERE ven_codigo ='$ven_codigo1' ")
					 or die (mysql_error());
mysql_close ($db);
include "consulta_itenscompra.php";
?>