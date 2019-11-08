<?php
include("database.php");
// session_start();
// $session_id = $_SESSION['id'];
// if (isset($session_id)) {
// cek apakah tombol daftar sudah diklik atau blum?
    // if (isset($_POST['register'])) {
if($_POST){
        // ambil data dari formulir
      	$namalkp = $_POST['namalkp'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        
        $cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM admin_kfi WHERE email='$email'"));
 if ($cek > 0){
    echo "<script>window.alert('Data yang anda masukan sudah terdaftar')
    window.location='../tambahadmin.php'</script>";
    }else {

        // buat query
        // $sql = "INSERT INTO `member`(`nama_lengkap`, `alamat`,`username`, `password`, `asal_sekolah`, `hp`, `tglahir`, `agama`, `email`) 
        // VALUES ('$nama_lengkap','$alamat','$username','$password','$asal_sekolah','$hp','$tglahir','$agama','$email')";
        // $query = mysqli_query($link, $sql);
       $sql = "INSERT INTO `admin_kfi`( `namalkp`, `email`, `password`) VALUES ( '$namalkp', '$email', '$password')";
 $query = mysqli_query($koneksi, $sql);
        // apakah query simpan berhasil?
        if ($query) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
          
          echo ' 
                         <script>
                            alert("Selamat, Anda Berhasil Mendaftar!");
                            window.location = "../tambahadmin.php"
                         </script>';
        } else {
            echo '<script>
                            alert("Gagal Ditambahkan!");
                            window.location = "../tambahadmin.php"
                            </script>';
                    }
    }
}
?>