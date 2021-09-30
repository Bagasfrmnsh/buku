<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>berhasil</title>
</head>

<body>
<link rel="stylesheet" href="style2.css">
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <style>
    body {
   background-image: url("dd.png");
   background-repeat: no-repeat;
   background-size:cover
}</style>
    <title>Peminjaman Buku</title>
  </head>
  <body>
  
      <form method="POST" action="berhasil.php">
    <!-- NAVBAR -->
    
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Bagas Firmansyah |</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a href ="index.php" class="nav-link" href="tugas3.php">Logout <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a href ="index.php" class="nav-link" href="tugas3.php">Link <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a href ="index.php" class="nav-link" href="tugas3.php">SMK <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
  </div>

</nav>

<!-- FORM INPUT -->
<form length="50px">
<div class = "container">
    <div class = "card">
    <div class = "card-body">
    <style>
    .card {
        size: 50px;
    }
    </style>
    <div class="container">
        <br>
        <center>
        <h4>| Ini Adalah Datamu |</h4><br>
        <h6><i>Ingin Pinjam Buku Lagi?</i></h6></center>
        <?php

if(isset($_POST['simpan'])){
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

echo "<center>";
echo "<table>";
echo "<tr>";
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";

   echo "------------------------------------------------------------------------------------------<br>";
   echo "</tr>";
   echo "<tr>";
   echo "<td>Nama  : $nama<br></td>";
   echo "</tr>";
   echo "<tr>";
   echo "<td>Email : $email<br></td>";
   echo "</tr>";
   echo "<tr>";
   echo "<td>Password : $password<br></td>";
   echo "</tr>";
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body bgcolor="#5F9EA0">
    <p><b>KLik dibawah ini jika ingin menambahkan buku</b></p>
    <a href="koneksi.php">Pinjam Buku Lagi ?</a></center>

    </body>
    </html>
    <div class="container">
  
  </div>

<?php
}
    ?>


  </div>
  </div>
</form>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
    </div>
    </div>
    </div>
            
    </fieldset>

</html>