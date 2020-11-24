<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<?php
error_reporting(0);
$db = mysql_connect ("localhost","root","vertrigo");
mysql_select_db("sistema_estoque_2020",$db);
$pro_codigo1=$_POST['pro_codigo'];
$pro_descricao1=$_POST['pro_descricao'];
$tpp_codigo1=$_POST['tpp_codigo'];
$pro_precocusto1=$_POST['pro_precocusto'];
$pro_estoque1=$_POST['pro_estoque'];
$pro_embalagem1=$_POST['pro_embalagem'];
$pro_ipi1=$_POST['pro_ipi'];

$inserir = mysql_query("INSERT INTO tb_produtos
                (pro_codigo,pro_descricao,pro_precocusto,pro_estoque,pro_embalagem,pro_ipi)
		        VALUES('$pro_codigo1',
				'$pro_descricao1','$tpp_codigo1','$pro_precocusto1','$pro_estoque1','$pro_embalagem1','$pro_ipi1')") or die (mysql_error());
mysql_close ($db);
include("consulta_tb_produtos.php");
?>