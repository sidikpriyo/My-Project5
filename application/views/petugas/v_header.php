<!DOCTYPE html>
<html>
<head>
	<title>Petugas - Sistem Pindah Agama</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/DataTables/datatables.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/awesome/css/font-awesome.css' ?>">

	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/DataTables/datatables.js' ?>"></script>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="<?php echo base_url ().'petugas'; ?>">SIMDUKCAPIL</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" datatarget="#navbarText"
				aria-controls="navbarText" aria-expanded="false" arialabel="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
				</button>
			<div class="collapse navbar-collapse" id="navbarText">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item"><a class="nav-link" href="<?php echo base_url().'petugas';?>">
						<i class="fa fa-home"></i>Home</a></li>

						<!-- ambil data server -->
					<li class="nav-item"><a class="nav-link" href="<?php echo base_url().'petugas/ambilpenduduk';?>">
						<i class="fa fa-users"></i>Server</a></li>

						<!-- input data pindah agama -->
					<li class="nav-item"><a class="nav-link" href="<?php echo base_url().'petugas/anggota'; ?>">
						<i class="fa fa-users"></i>Pindah Agama</a></li>

						
						<!-- tampilkan data petugas -->
					<li class="nav-item"><a class="nav-link" href="<?php echo base_url().'petugas/daftar_petugas'; ?>">
						<i class="fa fa-user"></i>Petugas</a></li>

						<!-- tampilkan data peserta pindah agama -->
					<li class="nav-item"><a class="nav-link" href="<?php echo base_url().'petugas/pindah_agama'; ?>">
						<i class="fa fa-user"></i>Pendaftaran</a></li>

					
					<li class="nav-item"><a href="<?php echo base_url().'petugas/ganti_password' ?>" class="nav-link">
						<i class="fa fa-lock"></i> Ganti Password</a></li>
					</ul>

				<span style="background: #ffffff" class="navbarText mr-3 text-center">Hallo, <?php echo $this->session->userdata('nama'); ?> [Petugas]</span>
				<a href="<?php echo base_url().'petugas/logout'?>" class="btn btn-outline-light ml-I">
				<i class="fa fa-power-off">KELUAR</i></a>
			</div>
		</div>
	</nav>
</body>
</html>