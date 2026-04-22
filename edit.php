<?php
require_once "Wisata.php";
$ws = new Wisata();

$id = $_GET['id'];
$wst = $ws->getById($id);

if($_POST){
    $ws->update($id, $_POST);
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Edit Wisata</title>

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">
</head>

<body>

<div class="container" data-aos="fade-up">
<h2><i class="fa-solid fa-pen"></i> Edit Destinasi Wisata</h2>

<form method="POST">

    <label>Nama Wisata</label>
    <input type="text" name="nama_wisata" value="<?= $wst['nama_wisata'] ?>" required>

    <label>Lokasi</label>
    <input type="text" name="lokasi" value="<?= $wst['lokasi'] ?>" required>

    <label>Kategori</label>
    <input type="text" name="kategori" value="<?= $wst['kategori'] ?>" required>

    <label>Harga Tiket</label>
    <input type="number" name="harga_tiket" value="<?= $wst['harga_tiket'] ?>" required>

    <label>Deskripsi</label>
    <textarea name="deskripsi" required><?= $wst['deskripsi'] ?></textarea>

    <button type="submit">
        <i class="fa-solid fa-floppy-disk"></i> Update Data
    </button>

</form>
</div>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>AOS.init();</script>

</body>
</html>
\\