<?php include '../template/header.php'; ?>
<h2>Kategori Pinjaman</h2>
<table border="1" cellpadding="4">
    <tr bgcolor="silver">
        <th>Id</th>
        <th>Nama Pinjaman</th>
        <th>Tanggal Pinjaman</th>
    </tr>
    <?php
  include "../config/mysql.php";
  $query    = mysqli_query($mysqli, "SELECT * FROM pinjaman");
  while ($result    = mysqli_fetch_array($query)) {

  ?>
    <tr align="center">
        <td><?php echo $result['id_pinjaman'] ?></td>
        <td><?php echo $result['nama_pinjaman'] ?></td>
        <td><?php echo $result['tgl_pinjaman'] ?></td>
    </tr>
    <?php
  }
  ?>
</table>
<?php include '../template/footer.php'; ?>