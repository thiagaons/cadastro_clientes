<?php
include ('config.php');

if (isset($_POST['botao']) && ($_POST['botao'] == "editar")) {
    $query_update = "UPDATE clientes SET `nome`='".$_POST['nome']."', `telefone`='".$_POST['telefone']."', `endereco`='".$_POST['endereco']."' WHERE id = '".$_POST['id']."'";
    $alteracao = $db_ativo->query($query_update)->fetch(PDO::FETCH_ASSOC);
    // $resultado = $_POST;
}

if ($_GET['id']) {
    $query_select = "SELECT * FROM clientes WHERE id = '".$_GET['id']."'";
    $resultado = $db_ativo->query($query_select)->fetch(PDO::FETCH_ASSOC);
    var_dump($resultado);
}
?>

<form action="#" method="post">
    <input type="text" name="id" value="<?=$resultado['id']?>" /><br />
    <input type="text" name="nome" value="<?=$resultado['nome']?>" /><br />
    <input type="text" name="telefone" value="<?=$resultado['telefone']?>" /><br />
    <input type="text" name="endereco" value="<?=$resultado['endereco']?>" /><br />
    <button type="submit" name="botao" value="editar">Editar</button>
</form>
































