<?php 
    session_start();
    include 'includes/navigation.php';
    include 'isLogged.php'
?>

<html lang="en">
<head>
    <title>Blatech</title>
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!-- <div class="card">
        <img src="assets/logo.png" alt="Post" style="width:450px">
        <div class="container">
            <h4><b>Judul Teext</b></h4>
            <p>isi text</p>
        </div>
    </div> -->
    <div class="card border-success mb-3" style="max-width: 35rem; margin: auto;">
        <div class="card-header">
            <div class="d-flex flex-row">
                <div class="p-2">
                    <img src="assets/Ammar.jpg" alt="avatar" class="avatar">
                </div>
                <div class="p-2 flex-fill">username</div>
            </div>
        </div>
        <img src="assets/Ammar.jpg" alt="blatech" class="card-img">
        <div class="card-img-overlay">
            <div class="card-body">
            </div>
        </div>
        <div class="card-footer">
             <div class="d-flex flex-column">
                <div class="d-flex flex-row">
                    <div class="p-2"><i class="bi bi-heart"></i></div>
                    <div class="p-2"><i class="bi bi-chat"></i></div>
                </div>
                <?php
                $idx = 10;
                echo "<p><b>username</b> deskripsi posting</p>";
                // view comment masuk ke modal 
                echo "<p>View all 0 comments</p>";
                echo "<p><b>username</b> 1 top komen</p>";
                ?>
                
             </div>
        </div>
    </div>
</body>
</html>