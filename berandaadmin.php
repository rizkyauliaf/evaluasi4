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
      xmlhttp.open("GET", "getuser.php?q=" + str, true);
      xmlhttp.send();
    }
  </script>

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
    <select name="user" onchange="showUser(this.value)">
      <option value="">Select a person:</option>
      <option value="1">Admin</option>
      <option value="2">User</option>
    </select>
  </form>
  <br />
  <div id="txtHint"><b>Data akan ditampilkan disini.</b></div>

  
</body>

<!-- Footer -->
<footer class="footer bg-light">

  <div class="container">
    <p class="text-muted small mb-4 mb-lg-0">&copy; DEJOSS @2022</p>
  </div>

</footer>


</html>