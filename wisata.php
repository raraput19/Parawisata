<?php
require_once "koneksi.php";

class Wisata extends Koneksi {

    public function getAll() {
        $sql = "SELECT * FROM tabel_wisata";
        return $this->conn->query($sql);
    }

    public function insert($data) {
        $nama      = $this->conn->real_escape_string($data['nama_wisata']);
        $lokasi    = $this->conn->real_escape_string($data['lokasi']);
        $kategori  = $this->conn->real_escape_string($data['kategori']);
        $harga     = $this->conn->real_escape_string($data['harga_tiket']);
        $deskripsi = $this->conn->real_escape_string($data['deskripsi']);

        $sql = "INSERT INTO tabel_wisata 
                (nama_wisata, lokasi, kategori, harga_tiket, deskripsi)
                VALUES 
                ('$nama', '$lokasi', '$kategori', '$harga', '$deskripsi')";

        return $this->conn->query($sql);
    }

    public function getById($id) {
        $id = (int)$id;
        // PERBAIKAN: id menjadi id_wisata
        $sql = "SELECT * FROM tabel_wisata WHERE id_wisata = $id";
        $result = $this->conn->query($sql);
        return ($result) ? $result->fetch_assoc() : null;
    }

    public function update($id, $data) {
        $id        = (int)$id;
        $nama      = $this->conn->real_escape_string($data['nama_wisata']);
        $lokasi    = $this->conn->real_escape_string($data['lokasi']);
        $kategori  = $this->conn->real_escape_string($data['kategori']);
        $harga     = $this->conn->real_escape_string($data['harga_tiket']);
        $deskripsi = $this->conn->real_escape_string($data['deskripsi']);

        // PERBAIKAN: WHERE id menjadi WHERE id_wisata
        $sql = "UPDATE tabel_wisata SET
                nama_wisata='$nama',
                lokasi='$lokasi',
                kategori='$kategori',
                harga_tiket='$harga',
                deskripsi='$deskripsi'
                WHERE id_wisata = $id";

        return $this->conn->query($sql);
    }

    public function delete($id) {
        $id = (int)$id;
        // PERBAIKAN: WHERE id menjadi WHERE id_wisata
        $sql = "DELETE FROM tabel_wisata WHERE id_wisata = $id";
        return $this->conn->query($sql);
    }

    // Alias fungsi hapus untuk dipanggil di hapus.php
    public function hapus($id) {
        return $this->delete($id);
    }
}
?>