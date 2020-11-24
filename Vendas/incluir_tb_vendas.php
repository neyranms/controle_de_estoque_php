<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<?php
error_reporting(0);
$db = mysql_connect ("localhost","root","vertrigo");
mysql_select_db("sistema_estoque_2020",$db);
$ven_codigo1=$_POST['ven_codigo'];
$ven_datavenda1=$_POST['ven_datavenda'];
$ven_valortotal1=$_POST['ven_valortotal'];
$nf_codigo1=$_POST['nf_codigo'];
$fun_codigo1=$_POST['fun_codigo'];
$tpg_codigo1=$_POST['tpg_codigo'];
$ven_observacoes1=$_POST['ven_observacoes'];

$inserir = mysql_query("INSERT INTO tb_vendas
                (ven_codigo, ven_datavenda,
				ven_valortotal,nf_codigo',
				fun_codigo,for_codigo,tpg_codigo,ven_observacoes) 
		        VALUES('$ven_codigo1',
				'$ven_datavenda1','$ven_valortotal1','$nf_codigo1',$'fun_codigo1','$tpg_codigo1',
				'$ven_observacoes1')") or die (mysql_error());
mysql_close ($db);
include("consulta_tb_vendas.php");
?>