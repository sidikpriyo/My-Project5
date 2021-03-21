<div class="container">
	<div class="card">
		<div class="card-header text-center"><h4>Tambah Peserta</h4></div>
		<div class="card-body">
			<a href="<?php echo base_url().'petugas/pindah_agama' ?>" class='btn btn-sm btnlight btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i>Kembali</a><br/><br/>

			
				<form method="post" action="<?php echo base_url('petugas/tambah_aksipendaftaran')?>">
				<div class="form-group">
                            <label for="nama" class="font-weight-bold">Nama Pendaftar</label>
                            <span class="input-group-btn">
                                <input type="text" name="nama" id="nama" class="form-control" required autofocus readonly>
                                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#modal-item">
                                <i class="fa fa-plus"> Pilih Nama Pendaftar</i>
                                </button>
                            </span>
                        </div>

				<div class="form-group">
					<label class="font-weight-bold" for="id_petugas">NIK</label>
					<input type="hidden" name="idpindah_agama">
					<input type="text" name="nik" class="form-control" required="required" id="nik" readonly="">
				</div>

				

				<div class="form-group">
					<label class="font-weight-bold" for="kode_pos">Kode Pos</label>
					<input type="text" name="kode_pos" class="form-control" required="required" id="kode_pos" readonly="">
				</div>

				<div class="form-group">
					<label class="font-weight-bold" for="id_agama">Agama Asal</label>
					<input type="text" name="id_agama" class="form-control" required="required" id="id_agama" readonly="">
				</div>

				<div class="form-group">
					<label class="font-weight-bold" for="jenis_kelamin">Jenis Kelamin</label>
					<input type="text" name="jenis_kelamin" class="form-control" required="required" id="jenis_kelamin" readonly="">
				</div>

				<div class="form-group">
					<label class="font-weight-bold" for="id_petugas">Petugas</label>
					<select class="form-control" name="id_petugas" required="required" id="id_petugas">
					<?php { ?>
					<option value="<?php echo $this->session->userdata('id'); ?>"><?php echo $this->session->userdata('nama'); ?></option>
					<?php } ?>	
				</select>
				</div>

				<div class="form-group">
					<label class="font-weight-bold" for="agama_pindah">Agama Pindah</label>
					<select class="form-control" name="agama_pindah" required="required" id="agama_pindah">
					<option value="">--Pilih Agama--</option>

					<?php { ?>
					<option value="<?php echo 'Islam'; ?>"><?php echo 'Islam'; ?></option>
					<option value="<?php echo 'Kristen'; ?>"><?php echo 'Kristen'; ?></option>
					<option value="<?php echo 'Katholik'; ?>"><?php echo 'Katholik'; ?></option>
					<option value="<?php echo 'Hindu'; ?>"><?php echo 'Hindu'; ?></option>
					<option value="<?php echo 'Budha'; ?>"><?php echo 'Budha'; ?></option>
					<?php } ?>	
					</select>
				</div>

				<div class="form-group">
					<label class="font-weight-bold" for="tanggal">Tanggal Pendaftaran</label>
					<input type="date" name="tanggal" class="form-control" placeholder="Masukan Tanggal" required="required" id="tanggal">
				</div>
				<input type="submit" class="btn btn-success" value="Simpan">
			</form>

	

		</div>
	</div>
</div>

<!-- panggil modal dalam lookup -->
<div class="modal fade" id="modal-item">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" arial-label="Close">
                    <span arial-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title"><STRONG>Pilih Nama</STRONG></h5>
            </div>
            <div class="modal-body table-responsive">
            <table class="table table-border table-sriped" id="table1" style="width:100%">
                <thead>
                    <tr>
                        <th><strong>No Induk Kependudukan</strong></th>
                        <th><strong>Nama</strong></th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dd_bidang as $row =>$data) { ?>
                    <tr>
                        <td><?=$data->nik?></td>
                        <td><?=$data->nama?></td>
                        
                        
                        <td>
                            <button class="btn btn-xs btn-success" id="select"
                            data-nik="<?=$data->nik?>"
                            data-nama="<?=$data->nama?>"
                            data-kode_pos="<?=$data->kode_pos?>"
                            data-id_agama="<?=$data->id_agama?>"
                            data-jenis_kelamin="<?=$data->jenis_kelamin?>"

                            
                                <i class="fa fa-check"></i>Pilih
                            </button>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    
</div>

</div>


<script src="<?= base_url('assets')?>/bower_components/jquery/dist/jquery.min.js"></script>

 <script>
    $('#nama').on('click',function() {
        $.post('<?=base_url("petugas/find_note")?>', 
            { nama: $('#nama').val() },
              function(returnedData){
                $('#nik').val(returnedData.no_induk);
                
                },"json");
    });
</script>

<script src="<?= base_url('assets')?>/bower_components/jquery/dist/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $(document).on('click','#select',function() {
        var nik = $(this).data('nik');
        var nama = $(this).data('nama');
        var kode_pos = $(this).data('kode_pos');
        var id_agama = $(this).data('id_agama');
        var jenis_kelamin = $(this).data('jenis_kelamin');

       
        $('#nik').val(nik);
        $('#nama').val(nama);
        $('#kode_pos').val(kode_pos);
        $('#id_agama').val(id_agama);
        $('#jenis_kelamin').val(jenis_kelamin);
        
        $('#modal-item').modal('hide');
    })
})
</script>