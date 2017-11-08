
<?php
    include_once '../class/usuario.class.php';
    include_once '../PDO/usuario_funcao.php';

    if($_POST){
        $obj_usuario = new usuario();
        $obj_usuario->set_nome_usuario($_POST['nome_usuario']);
        $obj_usuario->set_senha_usuario(md5($_POST['senha_usuario']));
        
       
        $adicionar = new usuario_funcao();
        
     
        if($adicionar->verifica_nome($_POST['nome_usuario']) == FALSE){
            if($adicionar->criar_usuario($obj_usuario)){
           header("Location: inicial.php");
              
        } else {
            echo "Não rolou";
        }
        }else{
            echo"Nome já cadastrado";
        }
    }