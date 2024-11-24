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

    public function getAccounts() {
        $query = 'SELECT * FROM ' . $this->table;
        $stmt = $this->conn->prepare($query);
        if (!$stmt->execute()) {
            die("Error executing query: " . $stmt->error);
        }
        return $stmt->get_result();
    }
}

