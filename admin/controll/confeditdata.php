<?php 
  include 'database.php'; 

       $id_data= $_POST['id_data'];
     $namalengkap = $_POST['namalengkap'];
        $jenisusaha = $_POST['jenisusaha'];
        $sosialmedia = $_POST['sosialmedia'];
         $alamat = $_POST['alamat'];
          $kotakab = $_POST['kotakab'];
           $provinsi = $_POST['provinsi'];
       



$sql = "UPDATE `data_kfi` SET  `id_data`='$id_data',`namalengkap`='$namalengkap',`jenisusaha`='$jenisusaha',`sosialmedia`='$sosialmedia',`alamat`='$alamat',`kotakab`='$kotakab',`provinsi`='$provinsi' WHERE id_data=$id_data";

$query=mysqli_query($koneksi, $sql); 




          if($query){
            echo ' 
             <script>
                  alert("Berhasil Di edit!");
                  window.location = "../datamember.php"
                 </script>';
          }else{
            echo '<script>
                  alert("Gagal Di edit!");
                  window.location = "../editdata.php"
                  </script>';
          }
       
     
 ?>











