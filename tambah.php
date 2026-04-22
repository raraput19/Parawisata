<?php
require_once "Wisata.php";
$ws = new Wisata();

if($_POST){
    $ws->insert($_POST);   // ← disamakan dengan method di class Wisata
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tambah Wisata</title>

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">
</head>

<body>

<div class="container" data-aos="fade-up">
<h2><i class="fa-solid fa-mountain-sun"></i> Tambah Destinasi Wisata</h2>

<form method="POST">

    <label>Nama Wisata</label>
    <input type="text" name="nama_wisata" required>

    <label>Lokasi</label>
    <input type="text" name="lokasi" required>

    <label>Kategori</label>
    <input type="text" name="kategori" required>

    <label>Harga Tiket</label>
    <input type="number" name="harga_tiket" required>

    <label>Deskripsi</label>
    <textarea name="deskripsi" required></textarea>

    <button type="submit">
        <i class="fa-solid fa-paper-plane"></i> Simpan Data
    </button>

</form>
</div>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>AOS.init();</script>

</body>
</html>
