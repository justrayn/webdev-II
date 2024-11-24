<?php
require_once __DIR__ . '/../Database.php';

class Account {
    private $conn;
    private $table = 'admin_accounts';

    public $id;
    public $name;
    public $email;
    public $accnttype;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
        if (!$this->conn) {
            die("Database connection failed: " . $this->conn->connect_error);
        }
    }

    public function getAccounts($filter = 'allaccs') {
        $query = 'SELECT * FROM ' . $this->table;
        if ($filter === 'host') {
            $query .= " WHERE accnttype= 'host'";
        } elseif ($filter === 'client') {
            $query .= " WHERE accnttype = 'client'";
        }
        $stmt = $this->conn->prepare($query);
        if (!$stmt->execute()) {
            die("Error executing query: " . $stmt->error);
        }
        return $stmt->get_result();
    }
    
} 



