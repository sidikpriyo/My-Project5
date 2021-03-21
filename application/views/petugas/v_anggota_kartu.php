<!DOCTYPE html>
<html>
<head>
	<title>Cetak Formulir Pindah Agama</title>
</head>
<body>
	<style type="text/css">
		.card{ border: 1px solid #000; width: 450px; }
		.card-header{
			border-bottom: 1px solid #000; text-align: center; font-weight: bold; padding: 10px; }
		.card-body{ padding: 20px; }
	</style>

	<div class="card">
		<div class="card-header" align="center">KARTU ANGGOTA PERPUSTAKAAN</div>
		<div class="card-body">
			<div class="container">
				<table class="table table-borderless table-sm fs-2">
					<?php
					$no=1;
					foreach ($anggota as $a) 
					{ ?>
					
						<tr><td>NIK</td><td>:</td><td><?php echo $a->nik;?></td></tr>
						<tr><td>Nama</td><td>:</td><td><?php echo $a->nama;?></td></tr>
						<tr><td>Kode Pos</td><td>:</td><td><?php echo $a->kode_pos;?></td></tr>
						<tr><td>Agama</td><td>:</td><td><?php echo $a->id_agama;?></td></tr>
						<tr><td>Jenis Kelamin</td><td>:</td><td><?php echo $a->jenis_kelamin;?></td></tr>
				<?php  } ?>
					
				</table>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		window.print();
</script>
</body>
</html>