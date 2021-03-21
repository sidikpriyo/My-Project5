<div class="container">
	<div class="card">
		<div class="card-header text-center"><h4>Edit Data Petugas</h4></div>
		<div class="card-body">
			<a href="<?php echo base_url().'admin/petugas' ?>" class='btn btn-sm btnlight btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i>Kembali</a><br/><br/>

			<?php
			foreach ($petugas as $p) 
			{ ?>
			<form method="post" action="<?php echo base_url().'admin/petugas_update' ?>">
				<div class="form-group">
					<label class="font-height-bold" for="id_petugas">Nomor Induk Kepegawaian</label>
					<input type="text" class="form-control" value="<?php echo $p->id_petugas; ?>" name="id_petugas" readonly>

				</div>

				<div class="form-group">
					<label class="font-height-bold" for="nama_petugas">Masukan Nama Lengkap</label>
					<input type="text" class="form-control" name="nama_petugas" placeholder="Masukan Nama Lengkap"
					required="required" value="<?php echo $p->nama_petugas; ?>">
				</div>
				<div class="form-group">
					<label class="font-height-bold" for="username">Username</label>
					<input type="text" class="form-control" name="username" placeholder="Masukan Username"
					required="required" value="<?php echo $p->username; ?>">
				</div>
				<div class="form-group">
					<label class="font-height-bold" for="password">Password</label>
					<input type="text" class="form-control" name="password" placeholder="Masukan Password">
					<small class="form-text text-muted">Kosongkan Jika Tidak Ingin Mengubah Password</small>
				</div>
				<input type="submit" class="btn btn-succes" value="simpan">
			</form>	
			<?php
		} ?>
		</div>
	</div>
</div>