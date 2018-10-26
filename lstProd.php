<?php
    //session_start();
    if (!isset($_SESSION['user']))
    header("location: ./login.html");

   //echo "Meu php esta Funcionando";
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
$rs =mysql_query("SELECT * FROM produto;");
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Listagem de Produtos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    </head>
    <body>
    <h1>Lista de Produtos</h1>
    <br>
    <input type="button" id="bt_Ad" name="bt_Ad" class="btn btn-info" value="Adicionar"
                                        onclick="javascript:location.href='frmInsProd.html'">
    <input type="button" id="bt_logOut" name="bt_logOut" class="btn btn-danger" value="Sair"
                                        onclick="javascript:location.href='logout.php'">                                    
    <br><br>
    <table class="table table-striped col-md-8">
        <tr>
            <th>ID</th>
            <th>MARCA</th>
            <th>MODELO</th>
            <th>QUANTIDADE</th>
            <th>VALOR</th>
            <th colspan="2" class="text-center">OPERAÇÕES</th>
            <th></th>
        </tr>
        <?php while ($linha =mysql_fetch_array($rs)) {?>   
        <tr>
            <td><?php echo $linha ['id'] ?></td>
            <td><?php echo $linha ['marca']?></td>
            <td><?php echo $linha ['modelo']?></td>
            <td><?php echo $linha ['quantidade']?></td>
            <td>R$<?php echo number_format($linha ['valor'],2,',','.')?></td>
        <td>
        <input type = "button" class="btn btn-warning bt-sm"
            onclick= "javascript: location.href='FrmEdtprod.php?id=' + 
            <?php echo $linha['id']?>"
            value='Editar'>
        </td>   
        <td>
        <input type = "button" class="btn btn-warning bt-sm"
            onclick= "javascript: location.href='FrmEdtprod.php?id=' + 
            <?php echo $linha['id']?>"
            value='Remover'>
        </td>   
        </tr> 
        <?php }?>
        </table>
    </body>
</html> 