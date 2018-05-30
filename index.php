<?php
include ('config.php');

$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$tel = isset($_POST['telefone']) ? $_POST['telefone'] : '';
$end = isset($_POST['endereco']) ? $_POST['endereco'] : '';
if ($end):
    $db_ativo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sqlinsert = "INSERT INTO clientes (nome,telefone,endereco) VALUES ('".$nome."','".$tel."','".$end."')";
$insertBases = $db_ativo->exec($sqlinsert);
endif;

$sqlBases = "SELECT * FROM clientes ORDER BY nome ASC";
   $resultBases = $db_ativo->query($sqlBases)->fetchAll(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <div class="container">

        <h1 class="text-center">Hello World</h1>
    <div class="row">
   
        <?php 
          foreach($resultBases as $baseData){
            echo " <div class='col-12'><a href = 'ver.php?id=".$baseData['id']."'>nome: ".$baseData['Nome'].'</a></div>';
            echo "<div class='col-12'>telefone: ".$baseData['telefone'].'</div>';
            echo "<div class='col-12'>endereco: ".$baseData['endereco'].'</div>';
        }
        
        ?>
        </div>

       
        <form action="#" method="POST" role="form">
            <legend>Form title</legend>
            <div class="form-group">
                <label for="">label</label>
                <input type="text" name = "nome" class="form-control" id="" placeholder="Nome Completo" />
                <input type="text" name = "telefone" class="form-control" id="" placeholder="(11)">
                <input type="text" name = "endereco" class="form-control" id="" placeholder="rua" value=>
            </div>       
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        </div>
        <!-- jQuery -->
    </body>
</html>


