<!DOCTYPE HTML>
<html>

<head>
  <title>Kaltaraprov - Pesan Tiket</title>
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
          <h1><a href="index.html">Kaltara<span class="logo_colour">prov</span></a></h1>
          <h2>Kalimantan Utara</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li id="edge"><a href="index.php">Home</a></li>
          <li><a href="hargatiket.php">Harga Tiket</a></li>
          <li class="selected"><a href="pesantiket.php">Pesan Tiket</a></li>
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
        <form action="php_db/create_data.php" method="post">
          <div class="form_settings">
            <p><span>Dewasa</span><input type="number" name="count_adult" id="count-adult"></p>
            <p><span>Anak & Balita</span><input type="number" name="count_child" id="count-child"></p>
            <p><span>Kendaraan</span>
              <select name="car_or_bike" id="car-or-bike">
                <option value="0">-- Pilih Kendaraan --</option>
                <option value="car" onclick="sumPrice(this.value)">Mobil</option>
                <option value="bike" onclick="sumPrice(this.value)">Motor</option>
              </select></p>
            <p><span>Total Harga</span><input type="text" name="price_p" id="price" readonly></p>
            <br> <br>
            <p><span>Nama pemesan</span><input type="text" name="name_p" /></p>
            <!-- retrieving places -->
            <?php
            include "php_db/connectiony.php";
            $query = "SELECT * FROM tempat_wisata_210025";
            $places = mysqli_query($db_connection, $query); $i=1;
            ?>
            <p><span>Tujuan tempat</span>
              <select id="id-select" name="pilihtempat">
                <option value="0">-- Pilih Tempat --</option>
                <?php
                foreach($places as $data) : $i++ ?>
                <option value="<?=$data['id_wisata_210025']?>"><?=$data['nama_tempat_210025']?></option>
                <?php endforeach; ?>
              </select></p>
            <p><span>Catatan</span><textarea rows="8" cols="50" name="name_c"></textarea></p> <br>
            <p><input class="checkbox" type="checkbox" required> Saya sudah baca ulang dan setuju mengenai pengisian form ini</p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="kirim" value="Kirim" /></p>
          </div>
        </form>
      </div>
    </div>
    <div id="footer">
      <a href="index.html">Home</a> | <a href="contact.html">Kontak</a> | <a href="https://kaltaraprov.go.id" target="_blank">Website Resmi</a>
    </div>
  </div>

  <script src="script1.js"></script>
</body>
</html>
