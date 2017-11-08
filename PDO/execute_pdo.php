
<?php
    class execute_pdo{
        private $host_db = "mysql:host=127.0.0.1;dbname=seubanco";
        private $usuario = "root";
        private $senha = "";
            
        protected function ExecuteCommand($sql, $parameters){
            $conexao = null;
            
            try {
                $conexao = new PDO($this->host_db, $this->usuario, $this->senha);
                $conexao->beginTransaction();
                $preparedStatment = $conexao->prepare($sql);
                
                if($parameters != null){
                    foreach($parameters as $key => $value){
                        $preparedStatment->bindValue($key, $value);
                    }
                }
                
                if($preparedStatment->execute() == FALSE){
                    print_r ($preparedStatment->errorInfo());
                    throw new PDOException($preparedStatment->errorCode());
                }
                
                $conexao->commit();
                return TRUE;
            } catch (PDOException $exc) {
                print $exc->getMessage();
                
                if((isset($conexao)) && ($conexao->inTransaction())){
                    $conexao->rollBack();
                }
            } finally {
                if(isset($conexao)){
                    unset($conexao);
                }
            }
        }
        
        protected function ExecuteQuery($sql, $parameters){
            $conexao = null;
            
            try {
                $conexao = new PDO($this->host_db, $this->usuario, $this->senha);
                $conexao->beginTransaction();
                $preparedStatment = $conexao->prepare($sql);
                
                if($parameters != null){
                    foreach($parameters as $key => $value){
                        $preparedStatment->bindParam($key, $value);
                    }
                }
                
                if($preparedStatment->execute() == FALSE){
                    print_r ($preparedStatment->errorInfo());
                    throw new PDOException($preparedStatment->errorCode());
                }
                
                return $preparedStatment->fetchAll();
            } catch (PDOException $exc) {
                if((isset($conexao)) && ($conexao->inTransaction())){
                    $conexao->rollBack();
                }
                
                return array();
            } finally {
                if(isset($conexao)){
                    unset($conexao);
                }
            }
        }
    }