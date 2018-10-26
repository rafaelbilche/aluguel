<?php
   
   $conexao = mysql_connect("localhost","root","");
   if (!$conexao){
       echo "Erro ao se Conectar MySql <br/>";
       exit;
   }    


$banco =mysql_select_db("aluguel");
if (!$banco){
    echo "Erro ao Conectar com o Banco Aluguel";
    exit;
}

$user = trim ($_POST['user']);
$pwd = trim ($_POST['password']);
//$pwd = md5 ($pwd);

$rs =mysql_query("SELECT * from usuario where user like ='$user'");
$linha= mysql_fetch_array($rs);
echo $linha['user'] . " - " . $linha['pwd'];
if ($pwd==$linha['pwd']){
    session_start();
    
    $_SESSION['user'] = $user;

    header('location:lstProd.php');
}
else echo "Login Incorreto Tente Novamente!";
header('location:login.html');
?>