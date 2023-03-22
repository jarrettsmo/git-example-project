<?php
    class Database {
        // Database Parameters
        private $conn;

        // Database Connection
        public function connect() {
            $this->conn = null;
            // Environment Variables
            $host = isset($_ENV['TEST_HOST']) ? $_ENV['TEST_HOST'] : '';
            $db_name = isset($_ENV['TEST_DB']) ? $_ENV['TEST_DB'] : '';
            $db_port = isset($_ENV['TEST_PORT']) ? $_ENV['TEST_PORT'] : '';
            $username = isset($_ENV['TEST_USER']) ? $_ENV['TEST_USER'] : '';
            $password = isset($_ENV['TEST_PW']) ? $_ENV['TEST_PW'] : '';

            try {
                $this->conn = new PDO('mysql:host=' . $host . ';port=' . $db_port . ';dbname=' . $db_name, $username, $password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                echo 'Connection Error: ' . $e->getMessage();
            }

            return $this->conn;
        }
    }