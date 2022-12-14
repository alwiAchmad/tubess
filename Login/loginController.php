<?php
include('../koneksi.php');
session_start();

$email = $_POST['email'];
$pass = $_POST['password'];
$q = "SELECT * FROM user WHERE email = '".$email."' AND password = '".$pass."' ";

if(isset($_POST['login'])){
    if($query = mysqli_query($conn, $q)){
       $data = mysqli_fetch_assoc($query);
         
        if($data['email'] == $email){
            if($data['password'] == $pass){
                $_SESSION['id'] = $data['id'];
                $_SESSION['nama'] = $data['nama'];
                $_SESSION['email'] = $email;
                if($data['usertype'] == "admin"){
                    $_SESSION['status'] = "login admin sukses";
                    header("location:../../tes.html");
                }
                else{
                    $_SESSION['status'] = "login sukses";
                    header("location:tampilNama.php");
                }
            
            }else{
            
            
        }
        }else{
        echo "<script>alert('Password tidak ditemukan'); window.location = 'index.php'; </script>";
      
        }

    }else{
    echo "<script>alert('Username atau password tidak terdaftar');  window.location = 'index.php'; </script>";
    
    }
}else{
echo "<script>alert('Harap isi form'); window.location = 'logout.php'; </script>";
}
?>