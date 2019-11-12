<?php
error_reporting(0);
include_once '../admin/controll/database.php';



$namalkp    = $_POST['namalkp'];
$email  = $_POST['email'];
$password = $_POST['password'];
$level = $_POST['level'];





// $cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT id FROM akun_kfi WHERE email='$email' "));
//  if ($cek > 0){
//     echo "<script>window.alert('Username yang anda masukan sudah terdaftar')
//     window.location='../register.php'</script>";
//     }else


//  $sql = "INSERT INTO akun_kfi(id, namalkp, email, password) VALUES('NULL','$namalkp','$email' ,MD5('$password') )";
//   echo "<script>window.alert('Selamat Pendafataran Anda Sudah Berhasil')
//    window.location='../login.php'</script>";

//  $query = mysqli_query($koneksi, $sql);
  


 $cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM akun_kfi WHERE email='$email'"));
 if ($cek > 0){
    echo "<script>window.alert('Data yang anda masukan sudah terdaftar')
    window.location='../register.php'</script>";
    }else {
        // buat query
        // $sql = "INSERT INTO `member`(`nama_lengkap`, `alamat`,`username`, `password`, `asal_sekolah`, `hp`, `tglahir`, `agama`, `email`) 
        // VALUES ('$nama_lengkap','$alamat','$username','$password','$asal_sekolah','$hp','$tglahir','$agama','$email')";
        // $query = mysqli_query($link, $sql);
       $sql = "INSERT INTO `akun_kfi`(`id`, `namalkp`, `email`,  `password`, `level`) VALUES (NULL, '$namalkp', '$email', MD5('$password'), 'user')";
 $query = mysqli_query($koneksi, $sql);
        // apakah query simpan berhasil?
        if ($query) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
          
          echo ' 
                         <script>
                            alert("Selamat, Anda Berhasil Mendaftar!");
                            window.location = "../login.php"
                         </script>';
        } else {
            echo '<script>
                            alert("Gagal Ditambahkan!");
                            window.location = "../register.php"
                            </script>';
                    }
    }

?>