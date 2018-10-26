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
 $rs =mysql_query("SELECT * from produto where id='$id';");
 $linha= mysql_fetch_array($rs);
?>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Remover Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">    
    </head>
    <body>
        <div class= "container col-md-8">
            <h1> Remover Produto</h1>
            <form id="FrmRemProd" name="FrmRemProd" method="POST" action="remProd.php">
                <div class="form-group">
                    <label for="lblId">
                        <span class="text-lg font-weigth-bold">ID:</span>
                        <span class="text-lg font-weigth-ligth"><?php echo $linha['id'];?></span>
                    </label>
                    <input type= "hidden" id="txtId" name="txtId" value="<?php $linha[id]?>">
                </div> 
                <div class="form-group">
                    <label for="lblMarc">
                        <span class="text-lg font-weigth-bold">Marca:</span>
                        <span class="text-lg font-weigth-ligth"><?php echo $linha['Marca']?></span>
                    </label>
                </div>    
                <div class="form-group">
                    <label for="lblMod">
                        <span class="text-lg font-weigth-bold">Modelo:</span>
                        <span class="text-lg font-weigth-ligth"><?php echo $linha['Modelo']?></span>
                    </label>
                </div>      
                <div class="form-group">
                    <label for="lblQtd">
                        <span class="text-lg font-weigth-bold">Quantidade:</span>
                        <span class="text-lg font-weigth-ligth"><?php echo $linha['Quantidade']?></span>
                    </label>
                </div>
                <div class="form-group">
                    <label for="lblVal">
                        <span class="text-lg font-weigth-bold">Valor:</span>
                        <span class="text-lg font-weigth-ligth"><?php echo $linha['Valor'];?></span>
                    </label>
                </div>
                  <button name="btRem" id="btRem" class="btn btn-lg btn success" type= "subimit"><i class="far fa-check-square"></i> Remover</button>                
                  <button name="btRem" id="btBck" class="btn btn-lg btn success" type= "subimit"
                  onclick="javascript:location.href='lstProd.php'">
                  <i class="fas fa-fast-backward"></i> Voltar</button> 
                      
            </form>
        </div>
    </body>
</html>
 
