<?php 
  include('database.php');
  $id_admin = $_GET['id_admin'];
  $query = mysqli_query($koneksi, "DELETE FROM admin_kfi WHERE id_admin= '$id_admin' ");
  if($query){
    echo '
      <script>
      alert("Akun berhasil dihapus !");
      window.location = "../akunadmin.php";
      </script>
    ';
  }

 ?>
