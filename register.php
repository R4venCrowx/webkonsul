<?php
include "koneksi.php";

if(isset($_POST['submit']) || isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");
    $cek = mysqli_num_rows($query);

    if($cek > 0){

        echo "Username sudah digunakan, silakan pilih yang lain!";
    } else {
        $insert = mysqli_query($koneksi, "INSERT INTO users(username, password, role) VALUES('$username', '$password', 'pasien')");
        if($insert){
            header("Location: login.php?pesan=register_sukses");
            exit;
        } else {
            echo "Register gagal, silakan coba lagi.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>

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

				<form action="index.php" class="login100-form validate-form" method="POST">
					<span class="login100-form-title1">
						Member Register</span>
                    <p class="login-subtitle">
    Sign up with your email address
</p>

					<div class="wrap-input100 validate-input" data-validate = "Valid username is required">
						<input class="input100" type="text" name="username" placeholder="@gmail.com addres" autocomplete="new-password" required>
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
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit">Sign Up</button>
					</div>
                     <div class="text-center p-t-136">
                        <span class="txt1">
							Your data deserves protection, not exposure.
						</span>
						
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