<?php

$conexao = mysql_connect('localhost', 'root', '');

$db_selected = mysql_select_db('aluguel', $conexao);

if (!$conexao){
    echo "Erro ao se conectar MYSQL <br/>";
    exit;   
}
$banco =mysql_select_db("aluguel");
if (!$banco){
    echo "Erro ao Conectar com o Banco Aluguel";
    exit;
}

$marc = trim($_POST['txtMarc']);
$mod = trim($_POST['txtMod']);
$qtd = trim($_POST['txtQtd']);
$val = trim ($_POST['txtVal']);

//if (!empty($marc) && !empty($val){
    $sql = "INSERT INTO produto (marca, modelo, quantidade, valor) VALUES ('$marc','$mod','$qtd','$val')"; 
    $ins = mysql_query($sql);
//}

//else echo "Valor Não Valido!!!";
header ("location: lstProd.php");
?>  