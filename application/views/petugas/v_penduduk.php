<div class="container">
	<div class="card">
		<div class="card-header text-center"><h4>Data Server Penduduk Pindah Agama</h4></div>
			<div class="card-body">
				<a href="<?php echo base_url().'petugas/api_input' ?>" class="btn btn-sm btn-success">
					<i class="fa fa-plus"></i>Simpan Ke Ganti Agama</a><br>
				<div class="table-responsive">
				<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
				<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
				<table id="tables" class="table table-bordered table-striped table-hover table-datatable">
					<thead>
						<tr>
							<th width="1%">No</th>
							<th>NIK</th>
							<th>Nama</th>
							<th>kode_pos</th>
							<th>Agama</th>
							<th>Pekerjaan</th>
							<th>Kewarganegaraan</th>
							<th>Perkawinan</th>
							<th>Jenis Kelamin</th>	
						</tr>
					</thead>

					<tbody>
					<?php
						$no = 1;
						foreach ($penduduk as $b) 
						{ ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $b->nik; ?></td>
								<td><?php echo $b->nama; ?></td>
								<td><?php echo $b->kode_pos; ?></td>
								<td><?php echo $b->agama; ?></td>
								<td><?php echo $b->pekerjaan; ?></td>
								<td><?php echo $b->sts_kewarganegaraan; ?></td>
								<td><?php echo $b->perkawinan; ?></td>
								<td><?php echo $b->jenis_kelamin; ?></td>
						</tr>
					<?php } ?>
					</tbody>
				</table>

<script>
	$(document).ready(function() {
    $('#tables').DataTable();
} );
</script>	
			</div>
		</div>
	</div>
</div>