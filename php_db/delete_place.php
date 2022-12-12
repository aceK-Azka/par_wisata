<?php
    include "connectiony.php";
    $query = "SELECT * FROM tempat_wisata_210025 WHERE nama_tempat_210025='$_POST[nama_tempat]'";
    $add = mysqli_query($db_connection, $query);

    foreach($add as $data) :
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
?>

<script> window.location.replace("../index.php"); </script> 
