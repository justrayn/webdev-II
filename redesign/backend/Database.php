<?php
class Database {
    private $host = 'localhost';    
    private $db_name = 'admin';    
    private $username = 'root';     
    private $password = '';         
    private $conn;

    public function connect() {
        $this->conn = null;

        try {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
            // echo "Connected successfully";
        } catch(Exception $e) {
            echo 'Connection Error: ' . $e->getMessage();
        }

        return $this->conn;
    }
}
?>