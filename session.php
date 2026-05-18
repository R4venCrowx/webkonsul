<?php
include "koneksi.php";
session_start();

if(isset($_POST['register'])){
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi,"SELECT * FROM users");

$data= mysqli_fetch_assoc($query);

if($data){

    $_SESSION['username'] = $data['username'];
    $_SESSION['role'] = $data['role'];

    if($data['role'] == 'admin'){
        header("Location: admin.php");
    } else {
        header("Location: user.php");
    }
} else {
    echo "Username atau Password salah";
}
}
?>