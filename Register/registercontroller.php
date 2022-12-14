<?php
include('../koneksi.php');

$nama= $_POST['nama'];
$email= $_POST['email'];
$telp= $_POST['notelp'];
$pass= $_POST['password'];
$passC= $_POST['con_pass'];

if($pass == $pass){
    $query = "INSERT INTO user (nama, email, notelp, password) VALUES ('".$nama."', '".$email."', '".$telp."', '".$pass."')";

    if($result = mysqli_query($conn, $query)){
       
        echo"<script>alert('Berhasil registrasi'); window.location = '../Login/index.php'; </script>";
        

    }else{
        echo"<script>alert('Terjadi error, gagal registrasi');</script>";
    }
}else{
    echo"<script>alert('Password tidak sama'):</script>";
}
?>