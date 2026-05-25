<?php
session_start();
include "koneksi.php";
if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
	$error = "";

    $query = mysqli_query($koneksi,"SELECT * FROM users WHERE username='$username' 
    AND password='$password'");

    $cek = mysqli_num_rows($query);

    if($cek > 0){
		
        $data = mysqli_fetch_assoc($query);

		$_SESSION['sudah_login'] = true;
        $_SESSION['username'] = $data['username'];
        $_SESSION['role'] = $data['role'];

        if($data['role'] == 'admin'){

            header("Location: admin.php");
            exit;
		
        } else {

            header("Location: index.php");
            exit;
		}
    } else {
		$error = "Username atau Password salah";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="Login_v1/images/icons/favicon.ico"/>

<link rel="stylesheet" type="text/css" href="Login_v1/vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="Login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="Login_v1/vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="Login_v1/vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="Login_v1/vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="Login_v1/css/util.css">

<link rel="stylesheet" type="text/css" href="Login_v1/css/main.css">
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="Login_v1/images/image.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" >
					<span class="login100-form-title">
						Member Login
					</span>
                    <p class="login-subtitle">Please log in to book an appointment.</p>

					<div class="wrap-input100 validate-input" data-validate = "Valid username is required">
						<input class="input100" type="text" name="username" placeholder="username/@gmail.com"  autocomplete="new-password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required" >
						<input class="input100" type="password" name="password" placeholder="Password" autocomplete="new-password" required> 
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn" href="admin.php">
						<button class="login100-form-btn" name="login" required>Login</button>
					</div>
			
					<div class="text-center p-t-136">
                        <span class="txt1">
							Don't have an account?
						</span>
						<a class="txt2" href="register.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<script src="Login_v1/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="Login_v1/vendor/bootstrap/js/popper.js"></script>
<script src="Login_v1/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="Login_v1/vendor/select2/select2.min.js"></script>
<script src="Login_v1/vendor/tilt/tilt.jquery.min.js"></script>
<script src="Login_v1/js/main.js"></script>

		<script> $('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="Login_v1/js/main.js"></script>

</body>
</html>