<!DOCTYPE HTML>
<html>

<head>
  <title>Kaltaraprov - Harga Tiket</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  <style>
    #content th, td
    { padding: 10px;}
    #content td
    { background-color: #0D66A5;
      color: white;
      text-align: right;}
  </style>
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
          <li id="edge"><a href="index.php">Home</a></li>
          <li class="selected"><a href="hargatiket.php">Harga Tiket</a></li>
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
        <!-- insert the page content here -->
        <h1>Tiket Masuk</h1>
        <table style="width: 100%;">
          <tr>
            <th>Dewasa (17+)</th>
            <td>Rp. 7000</td>
          </tr>
          <tr>
            <th>Anak - anak & Balita</th>
            <td>Rp. 3000</td>
          </tr>
        </table>
        <h1>Parkir</h1>
        <table style="width: 100%;">
          <tr>
            <th>Motor</th>
            <td>Rp. 5000</td>
          </tr>
          <tr>
            <th>Mobil</th>
            <td>Rp. 10000</td>
          </tr>
        </table>
      </div>
    </div>
    <div id="footer">
      <a href="index.html">Home</a> | <a href="contact.html">Kontak</a> | <a href="https://kaltaraprov.go.id" target="_blank">Website Resmi</a>
    </div>
  </div>
</body>
</html>
