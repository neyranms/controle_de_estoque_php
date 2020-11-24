<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<?php
error_reporting(0);
$db = mysql_connect ("localhost","root","vertrigo");
mysql_select_db("sistema_estoque_2020",$db);
$cp_codigo1=$_POST['cp_codigo'];
$cp_valorconta1=$_POST['cp_valorconta'];
$cp_datavencimento1=$_POST['cp_datavencimento'];
$cp_datapagamento1=$_POST['cp_datapagamento'];
$nf_codigo1=$_POST['nf_codigo'];
$cp_observacoes1=$_POST['cp_observacoes'];

$inserir = mysql_query("INSERT INTO tb_contareceber 
                (cp_codigo, cp_valorconta,
				cp_datavencimento,cp_datapagamento,
				nf_codigo,cr_observacoes) 
		        VALUES('$cr_codigo1',
				'$cp_valorconta1','$cp_datavencimento1',
				'$cp_datapagamento1','$nf_codigo1',
				'$cp_observacoes1')") or die (mysql_error());
mysql_close ($db);
include("consulta_tb_contareceber.php");
?>