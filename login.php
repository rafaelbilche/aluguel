<?php
   
$conexao = mysql_connect("localhost","root","");
$banco = mysql_select_db("aluguel");

if (!$conexao){
    echo "Erro ao se Conectar MySql <br/>";
    exit;
}    

if (!$banco){
    echo "Erro ao Conectar com o Banco Aluguel";
    exit;
}

$user = trim($_POST['user']);
$pwd = trim($_POST['password']);

$rs = mysql_query("SELECT * 
                   FROM usuario 
                   WHERE ( user like '$user' )");
$linha = mysql_fetch_array($rs);

if ($pwd == $linha['pwd']) {
    session_start();
    $_SESSION['user'] = $user;
    header('location:lstProd.php');
} else {
    header('location:login.html');
} 

?>