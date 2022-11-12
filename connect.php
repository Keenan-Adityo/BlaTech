<?php
error_reporting(E_ALL ^ E_DEPRECATED AND E_NOTICE);
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'blaTech';

$conn = mysqli_connect($host,$user,$pass,$db) or die("Koneksi Gagal");


?>