<?php
include "koneksi.php";
include "session.php";

if(!isset($_SESSION['role'])){
    header("Location: login.php");
    exit;
}

$data = mysqli_query($koneksi, "SELECT * FROM users");
?>


<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>

    <style>
        body{
            font-family: Arial;
            padding: 30px;
            background: #f5f5f5;
        }

        .container{
            background: white;
            padding: 20px;
            border-radius: 20px;
        }

        table{
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td{
            border: 1px solid #ddd;
        }

        th, td{
            padding: 10px;
            text-align: center;
        }

        th{
            background: #607dce;
            color: white;
        }

        .logout{
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background: red;
            color: white;
            text-decoration: none;
            border-radius: 15px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Halaman Admin</h1>
    <p>
        Selamat datang,
        <b><?php echo $_SESSION['username'];?></b>
    </p>
    <table>
       
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Role</th>
        </tr>

    </table>

    <a class="logout" href="logout.php">Logout</a>

</div>

</body>
</html>