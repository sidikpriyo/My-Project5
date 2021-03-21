<!DOCTYPE html>
<html>
<head>
	<title>Login-Sistem Informasi Dinas Kependudukan Dan Pencatatan Sipil</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js' ?>"></script>
</head>
<body background="<?php echo base_url() ?>assets/dist/image/mgl.jpg">

 	<div class="container">
 	</br>
 	<h3 class="font-weight-normal text-center text-black"><b><font size="6" color="#0d0d0d">H A L A M A N - L O G I N</font></b></h3>
 	<center><marquee>
    <font size="5" face="Cooper Black" color="#0d0d0d">S U G E N G - R A W U H - S I L A H K A N - L O G I N</font>
  	</marquee>
  	</center>
 	<!-- <marquee><h2 class="font-weight-normal text-center text-black mb-5"><b>S U G E N G - R A W U H</b></h2></marquee> -->
 	<div class="col-md-4 offsite-md-4"></div>

 		<div align="center">
 		<div class="card bg-warning text-left" style="width: 50rem; height: 36rem;">
 			<div class="container">
 				<?php
 				if(isset($_GET['alert'])) {
 					if ($_GET['alert']=="gagal") {
 						echo "<div class='alert alert-danger font-weight-bold text-center'>LOGIN GAGAL!!</div>";
 					} else if ($_GET['alert']=="belum_login") {
 						echo "<div class='alert alert-danger font-weight-bold text-center'>SILAHKAN LOGIN DULU!!</div>";
 					} else if ($_GET['alert']=="logout") {
 						//coba
 						echo "<div class='alert alert-success font-weight-bold text-center'>ANDA TELAH LOGOUT</div>";
 					}
 				}
 				?>
 				<h4 class="font-weight-bold text-center mb-2 mt-2">DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL KOTA MAGELANG</h4>
 				<div class="form-group" align="center">
 					<img src="<?php echo base_url() ?>assets/dist/image/mgl_logo.png" width="90" height="110">
 				</div>
 				<?php echo validation_errors(); ?>
 				<form method="post" action="<?php echo
 				base_url().'login/login_aksi'; ?>">
 					
 					<div class="form-group mb-2 mt-2">
 						<label for="username"><b>Username</b></label>
 						<input type="text" name="username" class="form-control" placeholder="Masukkan Username">
 					</div>
 					
 					<div class="form-group mb-2 mt-2">
 						<label for="password"><b>Password</b></label>
 						<input type="password" name="password" class="form-control" placeholder="Masukkan Password">
 					</div>

 					<div class="form-group mb-2 mt-2">
 						<label for="sebagai"><b>Pilih Login Sebagai : </b></label>
 						<select name="sebagai" class="form-control">
 							<option value="admin">Admin</option>
 							<option value="petugas">Petugas</option>
 						</select>
 					</div>
 					<br><button  type="submit" class="btn btn-success btn-lg btn-block">LOGIN</button>
 					</div>
 				</form>
 			</div>
 		</div>
 	</div>
</body>
</html>