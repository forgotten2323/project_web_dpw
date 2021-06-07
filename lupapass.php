<?php 
session_start();
include 'koneksi.php';
?>

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
						Lupa Password
					</span>
<div class="wrap-input100 validate-input m-b-23" data-validate = "ID Diperlukan">
						<span class="label-input100">ID</span>
						<input class="input100" type="text" name="id_user" placeholder="Isi ID Anda">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>	

<div class="wrap-input100 validate-input m-b-23" data-validate = "Kata Sandi Diperlukan">
						<span class="label-input100">Kata Sandi lama</span>
						<input class="input100" type="password" name="pass_lama" placeholder="Isi Kata Sandi Anda">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

<div class="wrap-input100 validate-input m-b-23" data-validate = "Kata Sandi Diperlukan">
						<span class="label-input100">Kata Sandi Baru</span>
						<input class="input100" type="password" name="pass_baru" placeholder="Isi Kata Sandi Anda">
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
<?php
				if(isset($_POST['daftar'])){
					$id = $_POST['id_user'];
					$pass_lama = $_POST['pass_lama'];
					$pass_baru = $_POST['pass_baru'];
					$sql = "select * from tb_daftar where id_user='$id'";
                    $hasil = mysqli_query ($conn,$sql);
                    $jumlah = mysqli_num_rows($hasil);
					$row = mysqli_fetch_assoc($hasil);
					$cek_pass_lama = $row["password"];
					// echo $jumlah;
	                if ($jumlah>0) {    
						
						if ($pass_lama == $cek_pass_lama) {
							$sql2 = "UPDATE tb_daftar SET password = '$pass_baru' WHERE id_user='$id'";
							if(mysqli_query($conn, $sql2)){
                                echo "<script>alert('Password anda berhasil diubah!');document.location='login.php'</script>";
                                // echo "Records added successfully.";
                            } else{
                                echo "ERROR: Could not able to execute $sql2. " . mysqli_error($conn);
                            }
								
								// ;document.location='login.php'
						} else {
							echo "<script>alert('Maaf, Password Lama Yang Anda Masukan Salah!')</script>";
						}
                    }
					else{
						echo "<script>alert('Maaf, akun tidak terdaftar')</script>";
					}
				}
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