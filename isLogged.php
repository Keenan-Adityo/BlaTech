<?php 


    $login = $_SESSION['login'];
    if($login == false){
        ?>
        <script>
            alert("Anda Harus Login Terlebih Dahulu!")
            document.location="index.php";
        </script>
        <?php
    }else{
        $login = true;
    }
?>
