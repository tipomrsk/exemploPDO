<?php
    include_once '../PDO/usuario_funcao.php';

if (isset($_GET["id"])) {
    
    $excluir = new usuario_funcao();

if ($excluir->excluir_usuario($_GET['id'])) {
        header("Location: inicial.php");
} else {
        echo "Não rolou";
    }
}
?>
