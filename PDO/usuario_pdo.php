
<?php
    include_once 'execute_pdo.php';
    include_once '../class/usuario.class.php';

    class usuario_pdo extends execute_pdo{
        public function criar_usuario(usuario $usuario){
            $sql = "INSERT INTO usuario (nome_usuario, senha_usuario) VALUES (:nome_usuario ,:senha_usuario )";
        
            $parameters = array();
            $parameters[":nome_usuario"] = $usuario->get_nome_usuario();
            $parameters[":senha_usuario"] = $usuario->get_senha_usuario();
            
            return $this->ExecuteCommand($sql, $parameters);    
        }
        
        public function atualizar_usuario(usuario $usuario, $id){
            $sql = "UPDATE usuario SET nome_usuario = :nome_usuario, senha_usuario = :senha_usuario WHERE id_usuario = $id";
      
            $parameters = array();
            $parameters[":nome_usuario"] = $usuario->get_nome_usuario();
            $parameters[":senha_usuario"] = $usuario->get_senha_usuario();
            
            return $this->ExecuteCommand($sql, $parameters);
        }
        
        public function excluir_usuario($id){
            $sql = "DELETE FROM usuario WHERE id_usuario = $id";
            
            return $this->ExecuteCommand($sql, $parameters);
        }
        
        public function listar_usuario(){
            $sql = "SELECT * FROM usuario";
            
            return $this->ExecuteQuery($sql, array());
        }
        
          public function listar_unico($id){
            $sql = "SELECT * FROM usuario WHERE id_usuario = $id";
            
            return $this->ExecuteQuery($sql, array());
        }
        
        public function login($var) {
            $sql = "SELECT * FROM usuario WHERE nome_usuario = '$var[nome_usuario]' AND senha_usuario = '$var[senha_usuario]'";
             
            return $this->ExecuteQuery($sql, array());
            
        }
           public function verifica_nome($nome_usuario){
            $sql = "SELECT * FROM usuario WHERE nome_usuario = '$nome_usuario'";
            
            return $this->ExecuteQuery($sql, array());
        }
    }
   