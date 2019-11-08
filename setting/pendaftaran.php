<?php
include("../admin/controll/database.php");
// session_start();
// $session_id = $_SESSION['id'];
// if (isset($session_id)) {
// cek apakah tombol daftar sudah diklik atau blum?
    // if (isset($_POST['register'])) {
if($_POST){
        // ambil data dari formulir
      	$namalengkap = $_POST['namalengkap'];
        $jenisusaha = $_POST['jenisusaha'];
        $sosialmedia = $_POST['sosialmedia'];
        $alamat = $_POST['alamat'];
         $kotakab = $_POST['kotakab'];
        $provinsi = $_POST['provinsi'];
        $hp = $_POST['hp'];

        
       

        // buat query
        // $sql = "INSERT INTO `member`(`nama_lengkap`, `alamat`,`username`, `password`, `asal_sekolah`, `hp`, `tglahir`, `agama`, `email`) 
        // VALUES ('$nama_lengkap','$alamat','$username','$password','$asal_sekolah','$hp','$tglahir','$agama','$email')";
        // $query = mysqli_query($link, $sql);
       $sql = "INSERT INTO `data_kfi`( `namalengkap`, `jenisusaha`, `sosialmedia`, `alamat`, `kotakab`, `provinsi`, `hp`) VALUES ( '$namalengkap', '$jenisusaha', '$sosialmedia', '$alamat', '$kotakab', '$provinsi', '$hp')";
 $query = mysqli_query($koneksi, $sql);
        // apakah query simpan berhasil?
        if ($query) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
          
          echo ' 
                         <script>
                            alert("Selamat, Anda Berhasil Mendaftar!");
                            window.location = "../pendaftaran.php"
                         </script>';
        } else {
            echo '<script>
                            alert("Gagal Ditambahkan!");
                            window.location = "../pendaftaran.php"
                            </script>';
                    }
    
}
?>