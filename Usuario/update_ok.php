    <?php
    include_once '../class/usuario.class.php';
    include_once '../PDO/usuario_funcao.php';

    if($_POST){
        $obj_usuario = new usuario();
        $obj_usuario->set_nome_usuario($_POST['nome_usuario']);
        $obj_usuario->set_senha_usuario(md5($_POST['senha_usuario']));
        
        $adicionar = new usuario_funcao();
        
        if($adicionar->atualizar_usuario($obj_usuario,$_POST['id_usuario'])){
            header("Location: inicial.php");
        } else {
            echo "Não rolou";
        }
    }
    ?>