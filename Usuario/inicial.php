<?php
include_once '../PDO/usuario_funcao.php';

$obj_usuario = new usuario_funcao();
$usuario_all = $obj_usuario->listar_usuario();

$table = "";

if($usuario_all != array()){
    foreach($usuario_all as $var){
        $table .= '<tr>
                  <td>'.$var['id_usuario'].'</td>
                  <td>'.$var['nome_usuario'].'</td>
                  <td>'.$var['senha_usuario'].'</td>
                  <td><a href="update.php? id='.$var['id_usuario'].'"> Editar</a></td>
                  <td><a href="deletar.php?id='.$var['id_usuario'].'"> Deletar</a></td> </tr>';
    }
    
    $usuario = "<table class='table table-striped' cellspacing='' border>
                <thead>
                    <th> Id </th>
                    <th> Nome </th>
                    <th> Senha </th>
                    <th colpsan='2'> Opções </th>
                </thead>
                <tbody> ".$table." </tbody>
            </table>";
} else {
    $usuario = "<h4> Não tem usuarios. </h4>";
}

echo $usuario;
?>
    <br>
    <br>
    <form method="post"  action="adicionar.php">
        <input type="text" name="nome_usuario" placeholder="Usuário"> <br>
        <input type="password" name="senha_usuario" placeholder="Senha"> <br> 
        
        <input type="submit" name="cadastrar" value="Cadastrar">
    </form>
    
    <a href="logout.php">Sair</a><br />
    
    