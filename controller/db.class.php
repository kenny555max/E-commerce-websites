<?php
    class DB {
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $db = "ecommerce websites";

        public $conn = null;        

        public function __construct() {
            $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->db);

            if ($this->conn->connect_error) {
                echo "Connection Failed!";
            }
        }

        public function __destruct() {
            $this->destroyConnection();
        }

        public function destroyConnection() {
            if ($this->conn != null) {
                $this->conn->close();
                $this->conn = null;
            }
        }
    }