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
$marc = trim($_POST['txtMarc']);
$mod = trim($_POST['txtMod']);
$qtd = trim($_POST['txtQtd']);
$val = trim ($_POST['txtVal']);

if (!empty($mod)){
    $sql = "UPDATE produto set marca='$marc', modelo='$mod', quantidade='qtd', valor='$val' where id='$id';"; 
    $ins = mysql_query($sql);
    if (!ins){
    echo "Erro ao Atualizar Produto!!!";
    }
}
else{
 echo "Valor Não Valido!!!";
}
header ("location: lstProd.php");
?>  