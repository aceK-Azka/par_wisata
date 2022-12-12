<!DOCTYPE HTML>
<html>

<head>
  <?php
  include "php_db/connectiony.php"; 
  $query = "SELECT * FROM tempat_wisata_210025 WHERE id_wisata_210025 = '$_GET[id]'";
  $qq = mysqli_query($db_connection, $query);
  $data = mysqli_fetch_assoc($qq); ?>
  <title>Kaltaraprov - <?=$data['nama_tempat_210025']?></title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/stylecpy.php" title="style" />
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
            $query = "SELECT * FROM css_210025 AS c INNER JOIN tempat_wisata_210025 AS t
                      ON c.id_wisata=t.id_wisata_210025";
            $wisata = mysqli_query($db_connection, $query);

            $i = 1;
            foreach ($wisata as $data) : ?>
            <li><a href="content_par.php?id=<?=$i?>"><?=$data['nama_tempat_210025']?></a></li>
          <?php
            $i++;
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
      