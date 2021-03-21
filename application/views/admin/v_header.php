<!DOCTYPE html>
<html>
<head>
	<title>Admin - Sistem Informasi Pindah Agama</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/DataTables/datatables.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/awesome/css/font-awesome.css' ?>">

	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/DataTables/datatables.js' ?>"></script>
</head>

<body>
	<nav class="navbar nav-navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="<?php echo base_url().'admin'; ?>">SIMDUKCAPIL</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" arial-control="navbarText" arial-expanded="false" ariallabel="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarText">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item"><a class="nav-link" href="<?php echo base_url().'admin'; ?>">
						<i class="fa fa-home"></i>Dashboard</a>
					</li>		

					<li class="nav-item"><a class="nav-link" href="<?php echo base_url().'admin/petugas'; ?>">
						<i class="fa fa-user"></i>Petugas</a>
					</li>

					<li class="nav-item"><a class="nav-link" href="<?php echo base_url().'admin/ganti_password'; ?>">
						<i class="fa fa-lock"></i>Ganti Password</a>
					</li>
				</ul>
				<span style="background: #ffffff" class="navbarText mr-3 text-center">Hallo, <?php echo $this->session->userdata('username'); ?> [Admin]</span>
				<a href="<?php echo base_url().'admin/logout'?>" class="btn btn-outline-light ml-I">
				<i class="fa fa-power-off">KELUAR</i></a>
			</div>
		</div>
	</nav>
</body>
</html>