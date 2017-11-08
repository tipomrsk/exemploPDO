

<?php
    include_once 'usuario_pdo.php';

    class usuario_funcao {

        private $var_usuario;

        public function __construct() {
            $this->var_usuario = new usuario_pdo();
        }

        public function criar_usuario(usuario $usuario) {
            return $this->var_usuario->criar_usuario($usuario);
        }
        
        public function atualizar_usuario(usuario $usuario, $id){
            return $this->var_usuario->atualizar_usuario($usuario, $id);
        }
        
        public function excluir_usuario($id){
            return $this->var_usuario->excluir_usuario($id);
        }
        
         public function listar_unico($id){
            return $this->var_usuario->listar_unico($id);
        }
        
        public function listar_usuario(){
            return $this->var_usuario->listar_usuario();
        }
        
        public function login($var){
            return $this->var_usuario->login($var);
        }
        
         public function verifica_nome($nome_usuario){
            return $this->var_usuario->verifica_nome($nome_usuario);
        }
    }