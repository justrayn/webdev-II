<?php
require_once __DIR__ . '/../Database.php';

class Event {
    private $conn;
    private $table = 'admin_events';

    public $id;
    public $eventname;
    public $evntstat;
    public $host;
    public $cespnt;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
        if (!$this->conn) {
            die("Database connection failed: " . $this->conn->connect_error);
        }
    }


    // para filter sa events
    public function getEvents($filter = 'all') {
        $query = 'SELECT * FROM ' . $this->table;
        if ($filter === 'approved') {
            $query .= " WHERE evntstat = 'Approved'";
        } elseif ($filter === 'pending') {
            $query .= " WHERE evntstat = 'Pending'";
        }
        $stmt = $this->conn->prepare($query);
        if (!$stmt->execute()) {
            die("Error executing query: " . $stmt->error);
        }
        return $stmt->get_result();
    }
}

