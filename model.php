<?php
//buat koneksi dengan database mqsql

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "dts_tsa";
// return mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$connect = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// include "model.php";
if ($connect->connect_error) {
    die("connection failed: " . $connect->connect_error);
}
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "select * from user where username ='$username' and password='$password'";
$result = mysqli_query($connect, $query);
$fechResult = mysqli_fetch_assoc($result);
$rowcount = mysqli_num_rows($result);

if ($rowcount > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
}

if ($fechResult['role'] == 'admin') {
    // echo "<a href='berandaadmin.php'>Admin, Klik untuk ke halaman User</a>";
    header("Location: berandaadmin.php");
} elseif ($fechResult['role'] == 'user') {
    // echo "<a href='berandauser.php'>User! Klik untuk ke halaman User</a>";
    header("Location: berandauser.php");
} else {
    header("Location: formlogin.php");
    // echo '<script type ="text/JavaScript">';  
    // echo 'alert("Username atau Password Anda Salah")';  
    // echo '</script>'; 
}

mysqli_close($connect);
