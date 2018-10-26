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

$id= trim($_REQUEST['id']);
$rs =mysql_query("SELECT * from produto where id=".$id);
$edita= mysql_fetch_array($rs);
?>

<html>
    <head>
    <meta charset="UTF-8">
        <title> Editar Veiculo </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
       </head>
    <body>
        <div class="container col-md-8"></div>  
        <h1>Editar Veiculos</h1>
        <br>
        <form id="FrmEdtProd" name="FrmEdtProd" method="POST" action="edtProd.php">
            <div class="form=group">
                <label for="lbltxtId">ID  : </label>
                <label for="lblId" class="form-control col-md-1"><?php echo $edita['id']?></label>
                <input type= "hidden" id="txtId" name="txtId" value="<?php $edita[id]?>">
            </div>
            <div class="form=group">
                <label for="lblMarc">Marca: </label>
                <input type="text" id= "txtMarc" name= "txtMarc" class="form-control col-md-4" value= "<?php $edita['marca']?>">     
            </div>
            <div  class="form=group">
                <label for="lblMod">Modelo: </label>
                <input type="text" id= "txtMod" name= "txtMarc" class="form-control col-md-4" value= "<?php $edita['modelo']?>">    
            </div>
            <div  class="form=group">
                <label for="lblQtd">Quantidade: </label>
                <input type="text" id= "txtQtd" name= "txtMarc" class="form-control col-md-4" value= "<?php $edita['quantidade']?>">
            </div>
            <div  class="form=group">
                <label for="lblVal">Valor: R$</label>
                <input type="text" id= "txtVal" name= "txtMarc" class="form-control col-md-4" value= "<?php $edita['valor']?>">
            </div>    
            <input type="submit" id="btEnviar" name="btEnviar" class="btn btn-dark" value="Atualizar">
                <input type="reset" id="btLimpar" name="btLimpar" class="btn btn-dark" value="Limpar">
                <input type="button" id="btCancelar" name="btCancelar" class="btn btn-danger" value="Voltar"
                                        onclick="javascript:location.href='lstProd.php'">
        </form>
    </body>
</html>        
            