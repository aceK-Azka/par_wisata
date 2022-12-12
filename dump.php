<!DOCTYPE HTML>
<html>

<head>
  <title>Kaltaraprov - Admin</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <h1><a href="index.php">Kaltara<span class="logo_colour">prov</span></a></h1>
          <h2>Kalimantan Utara</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li class="selected" id="edge"><a href="index.php" style="border-radius: 13px 0 0 13px;">Home</a></li>
          <li><a href="hargatiket.php">Harga Tiket</a></li>
          <li><a href="pesantiket.php">Pesan Tiket</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>Tentang Kaltara</h3>
        <p>Kalimantan Utara (disingkat Kaltara) adalah sebuah provinsi di Indonesia yang terletak di bagian utara Pulau Kalimantan. Provinsi ini berbatasan langsung dengan negara tetangga Malaysia, yaitu Negara Bagian Sabah dan Sarawak.</p>
        <p>Pusat pemerintahan Kalimantan Utara saat ini berada di kecamatan Tanjung Selor, bersama dengan pusat pemerintahan Kabupaten Bulungan.</p>
        <p>Wilayah Kalimantan Utara tergabung dengan Kalimantan Timur, sebelum akhirnya membentuk provinsi baru pada 25 Oktober 2012, dan menjadi provinsi termuda di Indonesia.</p>
        <h3>Tempat-tempat wisata</h3>
        <ul>
          <?php
            include "php_db/connectiony.php";
            $query = "SELECT * FROM css_210025 AS c INNER JOIN tempat_wisata_210025 AS t
                      ON c.id_wisata=t.id_wisata_210025";
            $wisata = mysqli_query($db_connection, $query);

            $i = 1;
            foreach ($wisata as $data) :
              echo "<li><a href=\"". $data['link_html'] ."\">". $data['nama_tempat_210025'] ."</a></li>";
            endforeach;
          ?>
        </ul>
        <h3>Search</h3>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
      </div>
      <div id="content">
        <form action="" method="post">
          <div class="form_settings">
            <p><span>Cek Nama Tempat</span><input type="text" name="nama_tempat" required></p>
            <p><span><input class="submit" type="submit" name="delete" value="HAPUS"></span>
               <input class="submit" type="submit" name="check" value="CHECK"></p>
          </div>
        </form>
        <?php 
          if(isset($_POST['delete'])){
            $query = "SELECT * FROM tempat_wisata_210025 AS t INNER JOIN css_210025 AS c
                      ON t.id_wisata_210025=c.id_wisata WHERE t.nama_tempat_210025 = '$_POST[nama_tempat]'";
            $name = mysqli_query($db_connection, $query);
            $data = mysqli_fetch_assoc($name);

            if($data){
              foreach($name as $data) :
                  $id_wisata = $data['id_wisata_210025'];
              endforeach;

              $query = "DELETE FROM css_210025 WHERE id_wisata='$id_wisata'";
              $add = mysqli_query($db_connection, $query);

              if($add){
                  $query = "DELETE FROM tempat_wisata_210025 WHERE id_wisata_210025='$id_wisata'";
                  $add = mysqli_query($db_connection, $query);

                  if($add){
                      echo "<script> alert('Place deleted successfully !'); </script>";
                  } else {
                      echo "<script> alert('Place delete failed !'); </script>";
                  }
              } else {
                  echo "<script> alert('Place delete failed !'); </script>";
              }
            } else {
              echo "<script> alert('Place isn't available !'); </script>";
            }
          } else if(isset($_POST['check'])){
            $query = "SELECT * FROM tempat_wisata_210025 AS t INNER JOIN css_210025 AS c
                      ON t.id_wisata_210025=c.id_wisata WHERE t.nama_tempat_210025 = '$_POST[nama_tempat]'";
            $name = mysqli_query($db_connection, $query);
            $data = mysqli_fetch_assoc($name);

            if($data){ ?>
              <form action="php_db/update_place.php" method="post" enctype="multipart/form-data">
              <div class="form_settings">
              <p><span>Nama Tempat</span><input type="text" name="nama_tempat" value="<?=$data['nama_tempat_210025']?>" required></p>
              <p><span>Kota</span><input type="text" name="kota" value="<?=$data['kota_210025']?>" required></p>
              <p><span>Deskripsi</span><textarea name="deskripsi" required><?=$data['deskripsi_210025']?></textarea></p>
              <p><span>Harga Tiket</span><input type="number" name="harga_tiket" value="<?=$data['harga_tiket_210025']?>" required></p>
              <p><span>Jam Operasional</span><input type="text" name="jam_operasional" value="<?=$data['jam_operasional_210025']?>" required></p>
              <br> <hr> <br>
              <p><span><img src="style/<?=$data['link_img']; ?>" width="180px" height="119px"></span></p>
              <p><span>Link Gambar</span><input type="file" name="link_img_210025" required></p>
              <p><span>Posisi Gambar</span><input type="text" name="pos_img" value="<?=$data['pos_img']?>" required></p>
              <input type="hidden" name="id_wisata_210025" value="<?=$data['id_wisata_210025']; ?>">
            <?php
            } else { ?>
              <form action="php_db/create_place.php" method="post" enctype="multipart/form-data">
              <div class="form_settings">
              <p><span>Nama Tempat</span><input type="text" name="nama_tempat" value="<?=$_POST['nama_tempat']?>" required></p>
              <p><span>Kota</span><input type="text" name="kota" required></p>
              <p><span>Deskripsi</span><textarea name="deskripsi" required></textarea></p>
              <p><span>Harga Tiket</span><input type="number" name="harga_tiket" required></p>
              <p><span>Jam Operasional</span><input type="text" name="jam_operasional" required></p>
              <br> <hr> <br>
              <p><span>Link Gambar</span><input type="file" name="link_img_210025" required></p>
              <p><span>Posisi Gambar</span><input type="text" name="pos_img" required></p>
            <?php } ?>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="reset" name="reset" value="RESET"></p>
            <p><span>&nbsp;</span><input class="submit" type="submit" name="save" value="SAVE"></p>
                <input type="hidden" name="link_img" value="<?=$data['link_img']; ?>">
            </div>
            </form>
          <?php } ?>
      </div>
    </div>
    <div id="footer">
      <a href="index.html">Home</a> | <a href="contact.html">Kontak</a> | <a href="https://kaltaraprov.go.id" target="_blank">Website Resmi</a>
    </div>
  </div>
  
</body>
</html>
