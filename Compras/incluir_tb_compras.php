<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<?php
error_reporting(0);
$db = mysql_connect ("localhost","root","vertrigo");
mysql_select_db("sistema_estoque_2020",$db);
$com_codigo1=$_POST['com_codigo'];
$com_valorcompra1=$_POST['com_valorcompra'];
$com_datacompra1=$_POST['com_datacompra'];
$com_valortotal1=$_POST['com_valortotal'];
$nf_codigo1=$_POST['nf_codigo'];
$for_codigo1=$_POST['for_codigo'];
$tpg_codigo1=$_POST['tpg_codigo'];
$com_observacoes1=$_POST['com_observacoes'];

$inserir = mysql_query("INSERT INTO tb_compras 
                (com_codigo, com_valorcompra,
				com_datacompra,com_valortotal,
				nf_codigo,for_codigo,tpg_codigo,com_observacoes) 
		        VALUES('$com_codigo1',
				'$com_valorcompra1','$com_datacompra1',
				'$com_valortotal1','$nf_codigo1',$'for_codigo','$tpg_codigo',
				'$com_observacoes1')") or die (mysql_error());
mysql_close ($db);
include("consulta_tb_compras.php");
?>