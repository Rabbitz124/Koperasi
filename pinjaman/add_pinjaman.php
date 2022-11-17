<?php include '../template/header.php'; ?>

<a href="pinjaman.php">Kembali</a>
<br /><br />

<form action="" method="post" name="form1">
    <table width="25%" border="0">
        <tr>
            <td>Nama Pinjaman</td>
            <td><input type="text" name="nama_pinjaman"></td>
        </tr>
        <tr>
            <td>Nama Anggota</td>
            <td><select name="id_anggota">
                    <?php
          $db_host = '127.0.0.1'; // --> sever mysql
          $db_user = 'root';      // --> username
          $db_pass = '';          // --> password
          $db_name = 'koperasi';     // --> nama database

          // Fungsi untuk koneksi ke mysqli
          $koneksi = new mysqli($db_host, $db_user, $db_pass, $db_name);
          $result = mysqli_query($koneksi, "SELECT * FROM anggota");
          while ($data = mysqli_fetch_assoc($result)) {
          ?>
                    <option value="<?php echo $data['id_anggota']; ?>"><?php echo $data['nama']; ?></option>
                    <?php } ?>
                </select></td>
        </tr>
        <tr>
            <td>Besar Pinjaman</td>
            <td><input type="number" name="besar_pinjaman"></td>
        </tr>
        <tr>
            <td>Tanggal Pengajuan Pinjaman</td>
            <td><input type="date" name="tgl_pengajuan_pinjaman"></td>
        </tr>
        <tr>
            <td>Tanggal Persetujuan Pinjaman</td>
            <td><input type="date" name="tgl_acc_peminjam"></td>
        </tr>
        <tr>
            <td>Tanggal Pinjaman</td>
            <td><input type="date" name="tgl_pinjaman"></td>
        </tr>
        <tr>
            <td>Tanggal Pelunasan</td>
            <td><input type="date" name="tgl_pelunasan"></td>
        </tr>
        <tr>
            <td>ID Angsuran</td>
            <td><input type="number" name="id_angsuran"></td>
        </tr>
        <tr>
            <td>keterangan</td>
            <td><input type="text" name="ket"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="Submit" value="Tambah"></td>
        </tr>
    </table>
</form>

<?php

// Check If form submitted, insert form data into users table.
if (isset($_POST['Submit'])) {
  $nama_pinjaman = $_POST['nama_pinjaman'];
  $id_anggota = $_POST['id_anggota'];
  $besar_pinjaman = $_POST['besar_pinjaman'];
  $tgl_pengajuan_pinjaman = $_POST['tgl_pengajuan_pinjaman'];
  $tgl_acc_peminjam = $_POST['tgl_acc_peminjam'];
  $tgl_pinjaman = $_POST['tgl_pinjaman'];
  $tgl_pelunasan = $_POST['tgl_pelunasan'];
  $id_angsuran = $_POST['id_angsuran'];
  $ket = $_POST['ket'];

  // sing bagian ngisor iki kowe yo san, aku ra mudeng
  // include database connection file
  include_once("../config/mysql.php");

  // Insert user data into table
  $result = mysqli_query($mysqli, "INSERT INTO pinjaman(nama_pinjaman,id_anggota,besar_pinjaman,tgl_pengajuan_pinjaman,tgl_acc_peminjam,tgl_pinjaman,tgl_pelunasan,id_angsuran,ket) VALUES('$nama_pinjaman','$id_anggota','$besar_pinjaman','$tgl_pengajuan_pinjaman','$tgl_acc_peminjam','$tgl_pinjaman','$tgl_pelunasan','$id_angsuran','$ket')");

  // Show message when user added
  echo "Data Petugas Berhasil Ditambah. <a href='http://localhost:8080/PAS/pinjaman/pinjaman.php'>Lihat Data</a>";
}
?>

<?php include '../template/footer.php' ?>