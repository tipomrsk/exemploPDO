
<?php
session_start();
include_once '../PDO/usuario_funcao.php';

if($_POST){
    
$senha1 = preg_replace('/[^[:alnum:]_]/', '',$_POST['senha_usuario']);

$obj_login = new usuario_funcao();
    
$var = array("nome_usuario" => preg_replace('/[^[:alnum:]_]/', '',$_POST['nome_usuario']), "senha_usuario" => md5($senha1));
    
$login = $obj_login->login($var);
    
if($login){
    $_SESSION["login"] = true;
    $_SESSION["id_usuario"] = $login[0][0];
    $_SESSION["nome_usuario"] = $login[0][1];
    $_SESSION["senha_usuario"] = $login[0][2];
    header("Location: inicial.php");
} else {
    header("Location: ../index.php");
}
}
?>