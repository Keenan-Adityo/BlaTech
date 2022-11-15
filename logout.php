<?php
session_start();
session_destroy(); //tak ganti jadi destroy
?>
<script>
    alert ("Kamu Logout"); document.location='index.php';
</script>