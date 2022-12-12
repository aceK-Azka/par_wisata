<?php
if(isset($_POST['kirim'])){
    include "connectiony.php";
    $query = "INSERT INTO data_210025 (nama_pemesan_210025, id_wisata_210025, total_dewasa_210025,
              total_anak_210025, kendaraan_210025, total_harga_210025, catatan_210025) VALUES
              ('$_POST[name_p]', '$_POST[pilihtempat]', '$_POST[count_adult]', '$_POST[count_child]',
              '$_POST[car_or_bike]', '$_POST[price_p]', '$_POST[name_c]')";
    $insert = mysqli_query($db_connection, $query);
    if($insert){
        echo "
        <script> alert('Data sukses ditambah !'); </script>";
    } else {
        echo "
        <script> alert('Data gagal ditambah !'); </script>";
    }
}
?>
<script> window.location.replace("../pesantiket.php"); </script>