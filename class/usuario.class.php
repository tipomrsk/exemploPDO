

<?php
    class usuario {
        private $id_usuario;
        private $nome_usuario;
        private $senha_usuario;
        
        public function get_id_usuario(){
            return $this->id_usuario;
        }
        
        public function set_id_usuario($id_usuario){
            $this->id_usuario = $id_usuario;
        }
        
        public function get_nome_usuario(){
            return $this->nome_usuario;
        }
        
        public function set_nome_usuario($nome_usuario){
            $this->nome_usuario = $nome_usuario;
        }
        
        public function get_senha_usuario(){
            return $this->senha_usuario;
        }
        
        public function set_senha_usuario($senha_usuario){
            $this->senha_usuario = $senha_usuario;
        }
    }