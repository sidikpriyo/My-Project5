<div class="container">
	<div class="row justyfy-content-md-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header text-center"> <h4>Ganti Password</h4></div>
				<div class="card-body">
				<?php
					if (isset($_GET['alert'])) {
						if ($_GET['alert']=="sukses") {
							echo "<div class='alert alert-success'>Password Berhasil Diganti!</div>";
						}
					}
				?>
				<?php echo validation_errors(); ?>
				<form method="post" action="<?php echo base_url().'admin/ganti_password_aksi'; ?>">
					<div class="form-group">
						<label class="font-weight-bold" for="password_baru">Password Baru</label>
						<input type="password" name="password_baru" class="form-control"
						placeholder="Masukkan Password Baru">
					</div>

					<div class="form-group">
						<label class="font-weight-bold" for="password_ulang">Ulangi Password Baru</label>
						<input type="password" name="password_ulang" class="form-control"
						placeholder="Ulangi Password">
					</div>
						<input type="submit" class="btn btn-success" value="Ubah Password">
						<a href="<?php echo base_url().'admin'; ?>" class='btn btn-danger'> <i class="fa fa-undo">Kembali</i></a>

				</form>
			</div>
		</div>
	</div>
</div>
</div>