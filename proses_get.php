<?php
    if(isset($_GET)){
        $ibu = @$_GET['ibu'];
        $ayah = @$_GET['ayah'];

        echo "Nama ibu : $ibu <br>";
        echo "Nama ayah : $ayah";
    }
?>