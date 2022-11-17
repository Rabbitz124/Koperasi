<?php

include("../config/mysql.php");

if (isset($_GET['id_pinjaman'])) {

    // ambil id dari query string
    $id_pinjaman = $_GET['id_pinjaman'];

    // buat query hapus
    $sql = "DELETE FROM pinjaman WHERE id_pinjaman=$id_pinjaman";
    $query = mysqli_query($mysqli, $sql);

    // apakah query hapus berhasil?
    if ($query) {
        header('Location: http://localhost:8080/PAS/pinjaman/pinjaman.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}