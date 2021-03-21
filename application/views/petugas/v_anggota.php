<div class="container">
	<div class="card">
		<div class="card-header text-center"><h4>Data Penduduk Pindah Agama</h4></div>
		<div class="card-body">
			<a href="<?php echo base_url().'petugas/hapus_anggota'?>" class="btn btn-sm btn-danger">
				<i class="fa fa-trash"></i>Hapus Semua Data</a><br/><br/>
			<div class="table-responsive"></div>
		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
		<table id="tables" class="table table-bordered table-striped table-hover table-datatable">
				<thead>
					<tr>
						<th width="1%">No</th>
						<th>nik</th>
						<th>nama</th>
						<th>kode_pos</th>
						<th>agama</th>
						<th>jenis_kelamin</th>
						<!-- <th>Opsi</th> -->
					</tr>
				</thead>

				<tbody>
				<?php
				$no=1;
				foreach ($anggota as $a) 
				{ ?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $a->nik; ?></td>
						<td><?php echo $a->nama; ?></td>
						<td><?php echo $a->kode_pos; ?></td>
						<td><?php echo $a->id_agama; ?></td>
						<td><?php echo $a->jenis_kelamin; ?></td>

						<!-- cetak kartu -->
						<!-- <td><a target="blank" href="<?php echo base_url().'petugas/anggota_kartu/'.$a->nik; ?>" class="btn btn-sm btn-success"><i class="fa fa-address-card"></i>Cetak Kartu</a></td> -->
					
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
