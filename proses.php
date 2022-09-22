<?php
    if(isset($_POST)){
        extract($_POST);
        echo "Nama Siswa : $nama <br>";
        echo "Alamat : $alamat";
    }
?>