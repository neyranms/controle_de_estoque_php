<link rel ="stylesheet" type="text/css" href="formatarpadrao.css"/>
<?php
error_reporting(0);
$db = mysql_connect ("localhost", "root", "vertrigo");
mysql_select_db("sistema_estoque2020",$db);\
$pro_codigo1=$_POST['pro_codigo'];
$pro_descricao1=$_POST['pro_descricao'];
$pro_precocusto1=$_POST['pro_precocusto'];
$pro_precovenda1=$_POST['pro_precovenda'];
$pro_estoque1=$_POST['pro_estoque'];
$pro_ipi1=$_POST['pro_ipi'];


$alterar = mysql_query("UPDATE tb_produtos
                     SET 
					pro_codigo = '$pro_codigo1',
					pro_descricao = '$pro_descricao1', 
					pro_precocusto = '$pro_precocusto1', 
					pro_precovenda = '$pro_precovenda1'
					pro_estoque = '$pro_estoque1'
					pro_ipi = '$pro_ipi1'
					 WHERE pro_codigo ='$pro_codigo1' ")
					 or die (mysql_error());
mysql_close ($db);
include "consulta_produtos.php";
?>