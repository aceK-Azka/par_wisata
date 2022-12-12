<?php
include "php_db/connectiony.php";
include "header_par.php";
$query = "SELECT * FROM css_210025 AS c INNER JOIN tempat_wisata_210025 AS t
          ON c.id_wisata=t.id_wisata_210025 WHERE t.id_wisata_210025='$_GET[id]'";
$wisata = mysqli_query($db_connection, $query);
$data = mysqli_fetch_assoc($wisata);
?>
<div id="content">
    <h1><?=$data['nama_tempat_210025']?></h1>
    <img src="style/<?=$data['link_img']?>" width="240" height="148" style="float: left; padding-right: 10px;">
    <table>
      <tr id="loc">
        <td>Lokasi:</td>
        <td><?=$data['kota_210025']?></td>
      </tr>
    </table>
    <p style="white-space: pre-line;"><?=$data['deskripsi_210025']?></p>
    <a href="pesantiket.php"><button onclick="return confirm('Yakin?')">Pesan Tiket</button></a>
    <a href="index.php"><button>Kembali</button></a>
</div>
<?php
include "footer_par.php";
?>