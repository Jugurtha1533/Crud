<?php 
    class database{

        public $que;
        private $servername = 'localhost';
        private $username = 'root';
        private $password = '';
        private $dbname = 'crud';
        private $result = array();
        private $mysqli = '';
        private $pdo;

        public function __construct(){
            
            //$this->mysqli = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
            $this->pdo = new PDO('mysql:host=' . $this->servername . ';dbname=' . $this->dbname, $this->username, $this->password);

        }

        public function insert($table,$para=array()){
            $table_columns = implode(',', array_keys($para));
            $table_value = implode("','", $para);

            $sql="INSERT INTO $table($table_columns) VALUES('$table_value')";

            $stmt = $this->pdo->prepare($sql);
            $result = $stmt->execute($bindings);
        }

        public function update($table, $para=array(), $id = [])
        {
            $args = array();

            foreach ($para as $key => $value) {
                $args[] = "$key = '$value'"; 
            }

            $sql="UPDATE  $table SET " . implode(',', $args);

            $sql .=" WHERE " . $id['key'] . " = :id";
            $bindings[":id"] = $id['value'];
            
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($bindings);
        }

        public function delete($table,$id)
        {
            $sql="DELETE FROM $table";
            $sql .=" WHERE  " . $id['key'] . " = :id";

            $bindings[":id"] = $id['value'];
            
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute($bindings);
        }

        public $sql;

        public function select($table, $rows="*", $where = null)
        {

            $sql="SELECT $rows FROM $table";
            
            if ($where != null) {

                $sql="SELECT $rows FROM $table WHERE $where";
            }
            
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function getProducts($table, $rows="*", $where = null)
        {
            $sql="
            SELECT $rows FROM $table
            INNER JOIN lang ON products.langID  = lang.langID
            ";

            if ($where != null) {

                $sql .= " WHERE $where";
            } 
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $this->sql = $stmt->fetchAll();

        }

        public function __destruct(){
            $this->pdo = null;
        }
    }