<?php
  include_once '../admin/controll/database.php';
  if (isset($_POST['submit_login'])) {
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = mysqli_real_escape_string($koneksi,(md5($_POST['password'])) );
    
    
    $query = mysqli_query($koneksi, "SELECT * FROM akun_kfi WHERE email='$email' AND password='$password'");
    $data = mysqli_fetch_array($query);

    $email = $data['email'];
    $password = $data['password'];
        $id = $data['id'];
    $namalkp   = $data['namalkp'];
  
   
     
    if ($email == $email && $password == $password) {
      session_start();

      $_SESSION['id'] = $id;
  
      $_SESSION['email'] =$email;
      $_SESSION['namalkp'] =$namalkp;
 

    
        echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
     
    }else{
      echo "<script>alert('email dan Password Tidak Ditemukan');</script>";
      echo "<meta http-equiv='refresh' content='0; url=../login.php'>";
    }
  }
?>