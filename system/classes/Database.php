<?php 
class Database {
    // These details should come from a config file or be defined as constants
    public $host = Host;
    public $user = USER;
    public $db = DATABASE;
    public $password = PASSWORD;
    public $con;
    public $result;

    public function __construct() {
        try {
             $this->con = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db, $this->user, $this->password);
           $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Database connection error: " . $e->getMessage();
            exit();
        }
    }

    public function query($query, $params = []) {
        if (empty($params)) {
            $this->result = $this->con->prepare($query);
            return $this->result->execute();
        } else {
            $this->result = $this->con->prepare($query);
            return $this->result->execute($params);
        }
    }

    public function rowCount() {
        return $this->result->rowCount();
    }

    public function fetchAll() {
        return $this->result->fetchAll(PDO::FETCH_OBJ);
    }

    public function fetch() {
        return $this->result->fetch(PDO::FETCH_OBJ);
    }
}
