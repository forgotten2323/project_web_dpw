<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar Akun</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="" method="POST">
					<span class="login100-form-title p-b-49">
						Daftar
					</span>
<div class="wrap-input100 validate-input m-b-23" data-validate = "ID Diperlukan">
						<span class="label-input100">ID</span>
						<input class="input100" type="text" name="id_user" placeholder="Isi ID Anda">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Nama Diperlukan">
						<span class="label-input100">Nama</span>
						<input class="input100" type="text" name="nama" placeholder="Isi Nama Anda">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

<div class="wrap-input100 validate-input m-b-23" data-validate = "No. Telp Diperlukan">
						<span class="label-input100">No. Telp</span>
						<input class="input100" type="text" name="no" placeholder="Isi Nomor Telp Anda">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

<div class="wrap-input100 validate-input m-b-23" data-validate = "Email Diperlukan">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Isi Email Anda">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

<div class="wrap-input100 validate-input m-b-23" data-validate = "Jenis Kelamin Diperlukan">
						<span class="label-input100">Jenis Kelamin</span>
<div class="forms">
  <label for="rdo1">
    <input type="radio" id="rdo1" name="kelamin" value="1">
    <span class="rdo"></span>
    <span>Laki Laki</span>
  </label>
  
  <label for="rdo2">
    <input type="radio" id="rdo2" name="kelamin" value="2">
    <span class="rdo"></span>
    <span>Perempuan</span>
  </label>
  
</div>
</div>
					

<div class="wrap-input100 validate-input m-b-23" data-validate = "Kata Sandi Diperlukan">
						<span class="label-input100">Kata Sandi</span>
						<input class="input100" type="password" name="password" placeholder="Isi Kata Sandi Anda">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>



<div class="text-right p-t-8 p-b-31">
						<a href="#">
							
						</a>
					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="daftar">
								Daftar
							</button>
						</div>
					</div>
				</form>
				<br>
				<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a href="Login.php"><button class="login100-form-btn" type="submit" name="login">
								Login
							</button></a>
						</div>
					</div>
<?php
include 'koneksi.php';
if(isset($_POST['daftar'])){
	if (!is_numeric($_POST['no'])) {
		echo "<script>alert('No Telp Harus Angka !!!');</script>";
	}else{
	$insert = mysqli_query($conn, "INSERT INTO tb_daftar VALUES('".$_POST['id_user']."','".ucwords($_POST['nama'])."','".$_POST['no']."','".$_POST['email']."','".$_POST['kelamin']."','".$_POST['password']."')");
	if ($insert) {
		echo"<script>alert('Data Berhasil Disimpan');document.location.href='login.php'</script>";
 	} else {
 		echo "<script>alert('ID Sudah Digunakan');</script>";
 	}
}}
?>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>