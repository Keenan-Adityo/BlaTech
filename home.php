<?php 
    session_start();
?>

<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: white;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.logo {
    width: 100px;
    height: 100px;
    grid-row: 1/2;
}

body {
    background-color: gray;
}

.row {
    display: grid;
    grid-template-columns: auto auto;
}
.row > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>

<div id="mySidenav" class="sidenav">
    <div class="row">
        <div><img src="img/logo.png" alt="" class="logo"></div>
        <div><a href="#">Blatech</a></div>
    </div>
    
  <a href="#">Home</a>
  <a href="#">[+] (create post)</a>
  <a href="#">Profil</a>
  <a href="Logout">Log Out</a>
</div>
