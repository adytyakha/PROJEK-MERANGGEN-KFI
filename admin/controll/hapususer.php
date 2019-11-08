<?php 
  include('database.php');
  $id = $_GET['id'];
  $query = mysqli_query($koneksi, "DELETE FROM akun_kfi WHERE id= '$id' ");
  if($query){
    echo '
      <script>
      alert("Akun berhasil dihapus !");
      window.location = "../akunuser.php";
      </script>
    ';
  }

 ?>
