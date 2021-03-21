<div class="container">
	<div class="card">
		<div class="card-header text-center"><h4>Tambah Petugas Baru</h4></div>
		<div class="card-body">
			<a href="<?php echo base_url().'admin/petugas' ?>" class='btn btn-sm btnlight btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i>Kembali</a><br/><br/>

			<form method="post" action="<?php echo base_url().'admin/petugas_tambah_aksi'; ?>">
				<div class="form-group">
					<label class="font-weight-bold" for="id_petugas">ID Petugas</label>
					<input type="text" name="id_petugas" class="form-control" placeholder="Masukan ID Petugas" required="required">
				</div>

				<div class="form-group">
					<label class="font-weight-bold" for="nama_petugas">Nama Lengkap</label>
					<input type="text" name="nama_petugas" class="form-control" placeholder="Masukan Nama Lengkap" required="required">
				</div>

				<div class="form-group">
					<label class="font-weight-bold" for="username">Username</label>
					<input type="text" name="username" class="form-control" placeholder="Masukan Username" required="required">
				</div>

				<div class="form-group">
					<label class="font-weight-bold" for="password">Password</label>
					<input type="text" name="password" class="form-control" placeholder="Masukan Password" required="required">
				</div>
				<input type="submit" class="btn btn-success" value="Simpan">
			</form>
		</div>
	</div>
</div>