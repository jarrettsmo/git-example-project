<?php
    class Database {
        // Database Parameters
        private $host = 'localhost';
        private $db_name = 'myblog';
        private $username = 'root';
        private $password = '123456';
        private $conn;

        // Database Connection
        public function connect() {
            $this->conn = null;
        }
    }