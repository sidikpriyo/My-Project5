<div class="container">
	<div class="card">
		<div class="card-header text-center"><h4>Pendaftaran Pindah Agama</h4></div>
		<div class="card-body">
			<a href="<?php echo base_url().'petugas/plus_pendaftaran' ?>" class="btn btn-sm btn-success">
					<i class="fa fa-plus"></i>Tambah Peserta</a>
			<div class="table-responsive"></div>
			<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
		<table id="tables" class="table table-bordered table-striped table-hover table-datatable">
				<thead>
					<tr>
						<th width="1%"><p align="center">No</p></th>
						<th><p align="center">No Induk Kependudukan</p></th>
						<th><p align="center">Nama Pendaftar</p></th>
						<th><p align="center">Kode Pos</p></th>
						<th><p align="center">Agama Asal</p></th>
						<th><p align="center">Agama Pindah</p></th>
						<th><p align="center">Jenis Kelamin</p></th>
						<th><p align="center">Nama Petugas</p></th>
						<th><p align="center">Tanggal Daftar</p></th>
						<th colspan="3"><p align="center">Opsi</p></th>
					</tr>
				</thead>

				<tbody>
				<?php
				$no=1;
				foreach ($kacau as $a) 
				{ ?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $a->nik; ?></td>
						<td><?php echo $a->nama; ?></td>
						<td><?php echo $a->kode_pos; ?></td>
						<td><?php echo $a->id_agama; ?></td>
						<td><font color="red"><b><?php echo $a->agama_pindah; ?></b></font></td>
						<td><?php echo $a->jenis_kelamin; ?></td>
						<td><?php echo $a->nama_petugas; ?></td>
						<td><?php echo $a->tanggal; ?></td>

						
						<!-- cetak kartu -->
						<td><a href="<?php echo base_url().'petugas/cetak/'.$a->idpindah_agama; ?>" class="btn btn-sm btn-success"><i class="fa fa-address-card"></i>Print</a></td>
						<!-- hapus data -->
						<td><a href="<?php echo base_url().'petugas/hapus/'.$a->idpindah_agama; ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Hapus</a></td>
											
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
