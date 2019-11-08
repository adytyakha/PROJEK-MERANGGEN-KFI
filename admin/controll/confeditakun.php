<?php 
  include 'database.php'; 

       $id= $_POST['id'];
     $namalkp = $_POST['namalkp'];
        $email = $_POST['email'];
        $password = $_POST['password'];
       



$sql = "UPDATE `akun_kfi` SET  `id`='$id',`namalkp`='$namalkp',`email`='$email',`password`=MD5('$password') WHERE id=$id";

$query=mysqli_query($koneksi, $sql); 




          if($query){
            echo ' 
             <script>
                  alert("Berhasil Di edit!");
                  window.location = "../akunuser.php"
                 </script>';
          }else{
            echo '<script>
                  alert("Gagal Di edit!");
                  window.location = "../editakun.php"
                  </script>';
          }
       
     
 ?>











