<div class="container">
	<div class="jumbotron text-center">
		<div class="col-sm-8 mx-auto">
			<h1>Sistem Informasi Pindah Agama</h1>
			
				<p><strong><?php echo $this->session->userdata('nama'); ?></strong> telah login sebagai <b><?php $this->session->userdata('nama'); ?></b>[petugas].</p>
				
		</div>		
	</div>

	<div class="card">
		<div class="card-header">Dashboard</div>
		<div class="card-body">Halo</div>

		<div class="row">

		<div class="col-md-3">
			<a href="http://localhost/simdukcapil/petugas/pindah_agama"><div class="card bg-danger text-white">
					<div class="card-body"><h1><center><?php echo $this->M_data->get_data('pindah_agama')->num_rows(); ?></center>
						<div class="pull-right"><i class="fa fa-user"></i></div></h1><center>Jumlah Orang Pindah Agama</center>
					</div>
				</div>
			</a>
		</div>

		<div class="col-md-3">
			<a href="http://localhost/simdukcapil/petugas/anggota"><div class="card bg-warning text-white">
					<div class="card-body"><h1><center><?php echo $this->M_data->get_data('m_data')->num_rows(); ?></center>
						<div class="pull-right"><i class="fa fa-user"></i></div></h1><center>Jumlah Peserta Server</center>
					</div>
				</div>
			</a>
		</div>

		<div class="col-md-3">
			<a href="http://localhost/simdukcapil/petugas/daftar_petugas"><div class="card bg-primary text-white">
					<div class="card-body"><h1><center><?php echo $this->M_data->get_data('m_petugas')->num_rows(); ?></center>
						<div class="pull-right"><i class="fa fa-user"></i></div></h1><center>Jumlah Petugas</center>
					</div>
				</div>
			</a>
		</div>

		</div>
	</div>
	
</div>