<?php
include_once '../PDO/usuario_funcao.php';
include_once '../class/usuario.class.php';

    if (isset($_GET["id"]))
    {
        $objUsuario= new usuario_funcao();
            $unico = $objUsuario->listar_unico($_GET['id']);
  
        
    }
      else 
    {
        header ("location:inicial.php");
    }
 
    ?>
       
    <form action="update_ok.php" method="POST">
        <table>
            <tr>
                <td>
                    Nick:
                </td>
                <td>
                    <input type="text"  name="nome_usuario" value="<?php echo $unico[0]['nome_usuario']?>">
                </td>
            </tr>
            <tr>
                <td>
                    Senha:
                </td>
                <td>
                    <input type="password" name="senha_usuario" value="<?php echo $unico[0]['senha_usuario']?>">
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="botao" value="Atualizar"></td>
                </td>
            </tr>
        </table>

        <input type="text" name="id_usuario" value="<?php echo $unico[0]['id_usuario']?>">
     </form>
