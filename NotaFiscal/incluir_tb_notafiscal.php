<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<?php
error_reporting(0);
$db = mysql_connect ("localhost","root","vertrigo");
mysql_select_db("sistema_estoque_2020",$db);
$nf_codigo1=$_POST['nf_codigo'];
$nf_valornf1=$_POST['nf_valornf];
$nf_taxaimpostnf1=$_POST['nf_taxaimpostnf'];
$nf_valorimposto1=$_POST['nf_valorimposto];
$nf_codigo1=$_POST['nf_codigo'];

$inserir = mysql_query("INSERT INTO tb_notafiscal 
                (nf_codigo, nf_valornf,
				nf_taxaimpostnf,nf_valorimpost) 
		        VALUES('$nf_codigo1',
				'$nf_valornf1','$nf_taxaimpostnf1',
				'$nf_valorimpost1')") or die (mysql_error());
mysql_close ($db);
include("consulta_tb_notafiscal.php");
?>