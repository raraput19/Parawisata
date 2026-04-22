<?php
require_once "wisata.php";
$ws = new wisata(); 
$data = $ws->getAll();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Destinasi Wisata</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">
</head>
<body>

<div class="container" data-aos="fade-up">
    <h2><i class="fa-solid fa-umbrella-beach"></i> Data Destinasi Wisata</h2>

    <a href="tambah.php" class="btn">
        <i class="fa-solid fa-circle-plus"></i> Tambah Destinasi
    </a>

    <table>
        <thead>
            <tr>
                <th>Nama Wisata</th>
                <th>Lokasi</th>
                <th>Kategori</th>
                <th>Harga Tiket</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if ($data && $data->num_rows > 0) {
                while($row = $data->fetch_assoc()) { 
            ?>
            <tr data-aos="zoom-in">
                <td><?= htmlspecialchars($row['nama_wisata']) ?></td>
                <td><?= htmlspecialchars($row['lokasi']) ?></td>
                <td><?= htmlspecialchars($row['kategori']) ?></td>
                <td>Rp <?= number_format($row['harga_tiket'], 0, ',', '.') ?></td>
                <td class="action">
                    <a class="edit" href="edit.php?id=<?= $row['id_wisata'] ?>" title="Edit Data">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>

                    <form action="hapus.php" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus data ini?')">
                        <input type="hidden" name="id" value="<?= $row['id_wisata'] ?>">
                        <button type="submit" class="btn-icon-delete" title="Hapus Data">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            <?php 
                } 
            } else { ?>
                <tr>
                    <td colspan="5" style="text-align:center;">Belum ada data destinasi wisata.</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({ duration: 800, once: true });
</script>

</body>
</html>