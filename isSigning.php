<?php 


    $proses = $_SESSION['prosesSign'];
    if($proses == false){
        ?>
        <script>
            alert("Anda Harus Signup di halaman sebelumnya terlebih dahulu")
            document.location="index.php";
        </script>
        <?php
    }else{
        $proses = false;
    }
?>
