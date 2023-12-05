<?php

class Database {
    public $conn;

    public function __construct() {
        $servername = "localhost";
        $username = "admin";
        $password = "dbadmin";
        $dbname = "imsdata";
        $port = 3306;

        // Create connection
        $this->conn = new mysqli($servername, $username, $password, $dbname, $port);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function query($query) {
        $result = $this->conn->query($query);

        if (!$result) {
            die("Query failed: " . $this->conn->error);
        }

        return $result;
    }

    // You might want to add additional methods for prepared statements, error handling, etc.
}
