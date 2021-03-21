<div class="container">
	<div class="card">
		<div class="card-header text-center"><h4>Data Petugas SIMDUKCAPIL</h4></div>
		<div class="card-body">
			<div class="table-responsive"></div>
			<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
			<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
			<table id="tables" class="table table-bordered table-striped table-hover table-datatable">
				<thead>
					<tr>
						<th width="1%">No</th>
						<th>ID</th>
						<th>Nama Petugas</th>
						<th>Username</th>
					</tr>
				</thead>

				<tbody>
				<?php
				$no=1;
				foreach ($petugas as $a) 
				{ ?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $a->id_petugas; ?></td>
						<td><?php echo $a->nama_petugas; ?></td>
						<td><?php echo $a->username; ?></td>
					</tr>
				<?php } ?>
				</tbody>
<script>
	$(document).ready(function() {
    $('#tables').DataTable();
} );
</script>
			</table>

		</div>
	</div>
</div>
