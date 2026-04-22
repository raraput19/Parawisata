<?php
class Koneksi {
    protected $host = "localhost";
    protected $user = "root";
    protected $pass = "";
    protected $db   = "dbpariwisata"; // pastikan ini sama dengan di phpMyAdmin
    protected $conn;

    public function __construct() {
        $this->conn = new mysqli(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );

        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }
}
?>
