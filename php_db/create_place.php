<?php
    include "connectiony.php";
    if(isset($_POST['save'])) {
        $query = "SELECT id_wisata_210025 FROM tempat_wisata_210025";
        $add = mysqli_query($db_connection, $query);
        $i = 1;

        foreach($add as $data) :
            $id_wisata = $data['id_wisata_210025'];
            if(!($id_wisata == $i)){
                $id_wisata -= 1;
                break;
            }
            $i++;
            if(!($id_wisata == $i)){
                $id_wisata = $i;
            }
        endforeach;

        $query = "INSERT INTO tempat_wisata_210025 VALUES ('$id_wisata', '$_POST[nama_tempat]', '$_POST[kota]',
                  '$_POST[deskripsi]', '$_POST[harga_tiket]', '$_POST[jam_operasional]')";
        $add = mysqli_query($db_connection, $query);

        if($add){
            $folder = "../style/";
            if(move_uploaded_file($_FILES['link_img_210025']['tmp_name'], $folder . $_FILES['link_img_210025']['name'])){
                $photo = $_FILES['link_img_210025']['name'];
                $query = "INSERT INTO css_210025 (id_wisata, link_img, pos_img) VALUES
                          ('$id_wisata', '$photo', '$_POST[pos_img]')";
                $upload = mysqli_query($db_connection, $query);
                if($upload) {
                    echo "<script> alert('Place added successfully !'); </script>";
                } else {            
                    echo "<script> alert('Place add failed !'); </script>";
                }
            } else {
                echo "<script> alert('Place add failed !'); </script>";
                // 
            }
        } else {
            echo "<script> alert('Place add failed !'); </script>";
        }
    }
?>
<!-- <p><a href="read_pet_210025.php">BACK TO PETS LIST</a></p>-->
<script> window.location.replace("../index.php"); </script> 
