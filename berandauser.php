<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>DEJOSS GROUP</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </script>
  <script>
    $(document).ready(function() {
      $("#flip").click(function() {
        $("#panel").slideDown("slow");
      });
    });
  </script>

</head>

<body>
  <?php
  session_start();
  if ($_SESSION['status'] == 'login') {
    // echo '<h1> Hai ' . $_SESSION['username'] . ' </h1><br>';
    // echo '<a href="sessionLogout.php">Logout</a>';
  }
  ?>
  <!-- Navbar -->
  <div id="flip">SELAMAT DATANG<br><?php echo $_SESSION['username'] ?></div>
  <nav id="panel" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">DEJOSS GROUP</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="berandauser.php">BERANDA</a></li>
          <li><a href="logout.php" class="btn btn-default btn-light">
              <span class="button"></span> LOGOUT
            </a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- First Container -->
  <img src="img/dejoss.jpg" style="width:100%;height:500px" class="img-fluid" alt="...">


  <!-- Third Container -->
  <div class="container-fluid bg-3 text-center">
    <h3 class="margin"><b> DEJOSS</b></h3>

    <div class="image">
      <img src="img/sejarah.png" style="width: 400px" alt="sejarah jamu" />
    </div>
    <br />

    <div class="text-center">
      <h4><b>INOVASI</b></h4>
      <p>
        Kami hadir sebagai penggerak untuk membuka dunia penuh peluang serta kemungkinan tanpa batas melalui pemanfaatan layanan dan solusi digital terintegrasi.
      </p>
    </div>
  </div>

  <?php

  function buatKoneksi()
  {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "dts_tsa";
    return mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  }

  //ambil tabel mahasiswa
  function getTableMahasiswa()
  {
    $link = buatKoneksi();
    $query = "SELECT * FROM produk";
    $result = mysqli_query($link, $query);

    //ambil semua isi tabel kedalam betuk array 2 dimensi
    $hasil = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $hasil;
  }
  ?>
  //
  <!-- sixth Container (Grid) -->
  //
  <!-- <div class="container-fluid bg-2 text-center">
  //   <h2 class="margin">KONTRIBUSI</h2>
  //   <br>
  //   <div class="row">
  //     <div class="col-sm-4">
  //       <img src="img/kelud.jpg" class="img-responsive margin" style="width:100%" alt="Image" />
  //       <div class="sub-judul">
  //         <h4><b>Teknologi canggih di setiap lini</b></h4>
  //       </div>
  //       <p>
  //         Menerapkan inovasi yang berpusat pada pelanggan untuk mengembangkan ekosistem digital yang berkelanjutan dan inklusif.<a href="">Selengkapnya</a>
  //       </p>

  //     </div>
  //     <div class="col-sm-4">
  //       <img src="img/korea.jpg" class="img-responsive margin" style="width:100%" alt="Image" />
  //       <div class="sub-judul">
  //         <h4><b>Kampung Korea</b></h4>
  //       </div>
  //       <p>
  //         Area bertema dengan model rumah Korea, pohon berbunga & rental pakaian tradisional "hanbok"...<a href="">Selengkapnya</a>
  //       </p>
  //     </div>
  //     <div class="col-sm-4">

  //       <img src="img/candy.jpg" class="img-responsive margin" style="width:100%" alt="Image" />
  //       <div class="sub-judul">
  //         <h4><b>Dunia Candy</b></h4>
  //       </div>
  //       <p>
  //         Wisata Dunia Candy merupakan sebuah tempat wisata baru yang dikhususkan untuk keluarga.
  //         lokasinya tidak terlalu jauh dari pusat Kota Kediri atau tepatnya berada di Sukorejo, Wates, Kediri....<a href="">Selengkapnya</a>
  //       </p>
  //     </div>
  //   </div>
  // </div> -->
</body>

<!-- Footer -->
<footer class="footer bg-light">

  <div class="container">
    <p class="text-muted small mb-4 mb-lg-0">&copy; DEJOSS company @2022</p>
  </div>

</footer>


</html>