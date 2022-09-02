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

  <!-- AJAX -->
  <script>
    function showUser(str) {
      if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
      }
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET", "model.php?q=" + str, true);
      xmlhttp.send();
    }
  </script>

  <!-- Tabel penampil AJAX -->
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }

    table,
    td,
    th {
      border: 1px solid black;
      padding: 5px;
    }

    th {
      text-align: left;
    }
  </style>
</head>

<body>
  <?php
  session_start();
  if ($_SESSION['status'] == 'login') {
    // echo '<h1> Selamat Datang ' . $_SESSION['username'] . ' </h1><br>';
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
          <li><a href="berandaadmin.php">BERANDA</a></li>
          <!-- <li><a href="#">WISATA</a></li> -->
          <li><a href="logout.php" class="btn btn-default btn-light">
              <span class="button"></span> LOGOUT
            </a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- First Container -->
  <img src="img/dejoss.jpg" style="width:100%;height:500px" class="img-fluid" alt="...">

  <!-- AJAX -->
  <form>
    <select namae="users" onchange="showUser(this.value)">
      <option value="">Select a person:</option>
      <option value="1">Admin</option>
      <option value="2">User</option>
    </select>
  </form>
  <br />
  <div id="txtHint"><b>Data akan ditampilkan disini.</b></div>



  <!-- Third Container -->
  <div class="container-fluid bg-3 text-center">
    <h3 class="margin"><b> DEJOSS</b></h3>

    <div class="image">
      <img src="img/sejarah.png" style="width: 400px" alt="sejarah dejoss" />
    </div>
    <br />

    <div class="text-center">
      <h4><b>BUKA DUNIA PENUH PELUANG</b></h4>
      <p>
        Kami hadir sebagai penggerak untuk membuka dunia penuh peluang serta kemungkinan tanpa batas melalui pemanfaatan layanan dan solusi digital terintegrasi.
      </p>
    </div>

  </div>
  <!-- sixth Container (Grid) -->
  <!-- <div class="container-fluid bg-2 text-center">
    <h2 class="margin">INOVASI</h2>
    <br>
    <div class="row">
      <div class="col-sm-4">
        <img src="img/kelud.jpg" class="img-responsive margin" style="width:100%" alt="Image" />
        <div class="sub-judul">
          <h4><b>Teknologi canggih di setiap lini</b></h4>
        </div>
        <p>
          Menerapkan inovasi yang berpusat pada pelanggan untuk mengembangkan ekosistem digital yang berkelanjutan dan inklusif.<a href="">Selengkapnya</a>
        </p>

      </div>
      <div class="col-sm-4">
        <img src="img/korea.jpg" class="img-responsive margin" style="width:100%" alt="Image" />
        <div class="sub-judul">
          <h4><b>KONTRIBUSI</b></h4>
        </div>
        <p>
          Berdayakan semua orang untuk menjadi maju.
          Berperan aktif dalam menambah nilai tambah untuk berkontribusi bagi kemajuan masyarakat.<a href="">Selengkapnya</a>
        </p>
      </div>
      <div class="col-sm-4">

        <img src="img/candy.jpg" class="img-responsive margin" style="width:100%" alt="Image" />
        <div class="sub-judul">
          <h4><b>Dunia Candy</b></h4>
        </div>
        <p>
          Wisata Dunia Candy merupakan sebuah tempat wisata baru yang dikhususkan untuk keluarga.
          lokasinya tidak terlalu jauh dari pusat Kota Kediri atau tepatnya berada di Sukorejo, Wates, Kediri....<a href="">Selengkapnya</a>
        </p>
      </div>
    </div>
  </div> -->
</body>

<!-- Footer -->
<footer class="footer bg-light">

  <div class="container">
    <p class="text-muted small mb-4 mb-lg-0">&copy; Kediri asik @2022</p>
  </div>

</footer>


</html>