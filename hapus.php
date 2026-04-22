<?php
require_once "wisata.php";
$ws = new wisata();

// Pastikan menggunakan $_POST bukan $_GET
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = (int) $_POST['id']; 
    $ws->hapus($id);
}

header("Location: index.php");
exit;
?>