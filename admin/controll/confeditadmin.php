<?php 
  include 'database.php'; 

       $id_admin= $_POST['id_admin'];
     $namalkp = $_POST['namalkp'];
        $email = $_POST['email'];
        $password = $_POST['password'];
       



$sql = "UPDATE `admin_kfi` SET  `id_admin`='$id_admin',`namalkp`='$namalkp',`email`='$email',`password`=MD5('$password') WHERE id_admin=$id_admin";

$query=mysqli_query($koneksi, $sql); 




          if($query){
            echo ' 
             <script>
                  alert("Berhasil Di edit!");
                  window.location = "../akunadmin.php"
                 </script>';
          }else{
            echo '<script>
                  alert("Gagal Di edit!");
                  window.location = "../editakunadmin.php"
                  </script>';
          }
       
     
 ?>











