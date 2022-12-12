<?php
    include "connectiony.php";
    if(isset($_POST['save'])) {
        $query = "SELECT * FROM tempat_wisata_210025 WHERE id_wisata_210025 = '$_POST[id_wisata_210025]'";
        $add = mysqli_query($db_connection, $query);

        $query = "UPDATE tempat_wisata_210025 SET nama_tempat_210025='$_POST[nama_tempat]', kota_210025='$_POST[kota]',
                  deskripsi_210025='$_POST[deskripsi]', harga_tiket_210025='$_POST[harga_tiket]', 
                  jam_operasional_210025='$_POST[jam_operasional]' WHERE id_wisata_210025 = '$_POST[id_wisata_210025]'";
        $add = mysqli_query($db_connection, $query);

        if($add){
            $folder = "../style/";
            if(move_uploaded_file($_FILES['link_img_210025']['tmp_name'], $folder . $_FILES['link_img_210025']['name'])){
                $photo = $_FILES['link_img_210025']['name'];
                $query = "UPDATE css_210025 SET link_img='$photo', pos_img='$_POST[pos_img]'
                          WHERE id_wisata='$_POST[id_wisata_210025]'";
                $upload = mysqli_query($db_connection, $query);
                if($upload) {
                    if(($_POST['link_img'] !== 'default.png') && ($_POST['link_img'] !== $photo))
                        unlink($folder . $_POST['link_img']);
                    echo "<script> alert('Place updated successfully !'); </script>";
                } else {            
                    echo "<script> alert('Place update failed !'); </script>";
                }
            } else {
                echo "<script> alert('Place update failed !'); </script>";
                // 
            }
        } else {
            echo "<script> alert('Place update failed !'); </script>";
        }
    }
?>

<script> window.location.replace('../index.php'); </script> 
<!-- 
    
 -->