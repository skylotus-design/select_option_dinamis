<?php

    define('host', 'localhost');
    define('user', 'root');
    define('pass', '');
    define('db', 'docs_github');

    class Database {

        public function __construct()
        {
            $conn = new mysqli(host, user, pass, db);
            $this->conn = $conn;
        }
    }

    class Myapp extends Database {

        public function tampilBenua()
        {
            $sql = "SELECT * FROM benua";
            $query = $this->conn->query($sql);
            return $query;
        }
        public function tampilNegara()
        {
            $sql = "SELECT * FROM negara";
            $query = $this->conn->query($sql);
            return $query;
        }
    }

    $myapp = new Myapp();

?>