<?php
    include "connect.php";
    
    session_start();
    $id = $_SESSION['id'];
    $target = $_GET['target'];
    $cekQ = mysqli_query($conn, "select * from follow where id_follow='$target' and id_user='$id'");
    if($cek = mysqli_fetch_array($cekQ)) {
        echo 'ada';
        mysqli_query($conn, "DELETE FROM follow WHERE follow.id_user = '$id' and follow.id_follow = '$target'");
    } else {
        echo 'tidak';
        mysqli_query($conn, "INSERT INTO follow (id_user, id_follow) VALUES ('$id', '$target')");
    }
    
  
    echo "<script>window.close();</script>";    
?>