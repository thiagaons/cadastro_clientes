<?php
$id = filter_input(INPUT_GET,"id");
$nome = filter_input(INPUT_GET,"nome");
$tel = filter_input(INPUT_GET,"telefone");
$end = filter_input(INPUT_GET,"endereco");

include ('config.php');

if($db_ativo){
    $query = POD($db_ativo, "update clientes set nome='$nome, telefone='$tel, endereco='$end'where id='$id'";
    if($query){
        header("Location : index.php");
    }else{
         die("Error: " . POD($db_ativo));   
    }
 }else{
        die("Erro: ". POD($db_ativo));
    }
?>