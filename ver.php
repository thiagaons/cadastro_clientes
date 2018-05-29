<?php

include('config.php');

$sqlBases = "SELECT * FROM clientes where id=".$_GET['id']." ORDER BY nome ASC";
   $resultBases = $db_ativo->query($sqlBases)->fetchAll(PDO::FETCH_ASSOC);
   foreach($resultBases as $baseData){
       ?>
    <div class='col-12'>nome:<?=$baseData['Nome']?></div>
    <div class='col-12'>telefone: <?=$baseData['telefone']?></div>
    <div class='col-12'>endereco: <?=$baseData['endereco']?></div>
<?php
}
?>