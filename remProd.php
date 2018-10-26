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

$id = trim($_POST['txtId']);


if (!empty($id)){
    $sql = "DELETE FROM produto id='$id';"; 
    $ins = mysql_query($sql);
    if (!ins){
    echo "Erro ao Remover Produto!!!";
    }
}
else{
 echo "Valor Não Valido!!!";
}
header ("location: lstProd.php");
?>  