<?php
  include_once 'database.php';
  if (isset($_POST['submit_login'])) {
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $pass = mysqli_real_escape_string($koneksi,(md5($_POST['password'])) );
    
    
    $query = mysqli_query($koneksi, "SELECT * FROM admin_kfi WHERE email='$email' AND password='$pass'");
    $data = mysqli_fetch_array($query);

    $email = $data['email'];
    $password = $data['password'];
        $id_admin = $data['id_admin'];
   
    $namalkp   = $data['namalkp'];
        $level   = $data['level'];
  
   
     
    if ($email == $email && $pass == $password) {
      session_start();

      $_SESSION['id_admin'] = $id_admin;
    
      $_SESSION['email'] =$email;
      $_SESSION['namalkp'] =$namalkp;
          $_SESSION['level'] =$level;
 

    
        echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
     
    }else{
      echo "<script>alert('email dan Password Tidak Ditemukan');</script>";
      echo "<meta http-equiv='refresh' content='0; url=../login.php'>";
    }
  }
?>



<!-- <?php
  include_once 'database.php';
  if (isset($_POST['submit_login'])) {
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = mysqli_real_escape_string($koneksi,(md5($_POST['password'])) );
    
    
    $query = mysqli_query($koneksi, "SELECT * FROM admin_kfi WHERE email='$email' AND password='$password'");
    $data = mysqli_fetch_array($query);
    $id_admin = $data['id_admin'];
    $email = $data['email'];
    $namalkp   = $data['namalkp'];
  
   
     
    if ($email==$email && $password ==$password) {
      session_start();
      $_SESSION['id_admin'] = $id_admin;
      $_SESSION['email'] = $email;
      $_SESSION['namalkp'] =$namalkp;
 

    
        echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
     
    }else{
      echo "<script>alert('Username dan Password Tidak Ditemukan');</script>";
      echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    }
  }
?> -->