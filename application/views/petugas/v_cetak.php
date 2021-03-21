<!DOCTYPE html>
<html>
<head>
</head>
<body>

<table width="100%">

<tr>
<td width="10" align="center"><img src="<?php echo base_url() ?>assets/dist/image/mgl_logo.png" width="80" height="90"></td>
<td><center><font size="4" face="arial" style="line-height: 20px;">PEMERINTAH KOTA MAGELANG</font></center>
<center><b><font size="4" face="Courier New" style="line-height: 20px;">DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL</font></b></center><br>
<center><b>Jl. Veteran No.7 (0293) 362070 - 56789<b></center><br>
<hr><width="100" height="75"></hr>
</td>
</tr>
</table>

	<style type="text/css">
		.card{ border: 1px solid #000; width: 450px; }
		.card-header{
			border-bottom: 1px solid #000; text-align: center; font-weight: bold; padding: 10px; }
		.card-body{ padding: 20px; }
	</style>

	<center><font size="2" face="arial" style="line-height: 20px;"><u>SURAT KEPUTUSAN DAN KETERANGAN</u></font></center>
	<center><b><font size="1" face="arial" style="line-height: 20px;">Nomor :470/..../dukcapil/VI/2020 </font></b></center>

	<p style= "text-align: justify; text-indent: 0.5in">Kepala Dinas Kependudukan dan Pencatatan Sipil Kota Magelang Menerangkan bahwa :</p>

	
				<table>
				
					<tr>
						<td><strong>&emsp;Nomor</strong></td>
						<td>&emsp;:</td>
						<td><strong>&emsp;<?php echo $pendaftaran->idpindah_agama; ?></td></tr>
						<tr><td><strong>&emsp;NIK</td><td>&emsp;:</td><td><strong>&emsp;<?php echo $pendaftaran->nik;?></td></tr>
						<tr><td><strong>&emsp;Nama</td><td>&emsp;:</td><td><strong>&emsp;<?php echo $pendaftaran->nama;?></td></tr>
						<tr><td><strong>&emsp;Kode Pos</td><td>&emsp;:</td><td><strong>&emsp;<?php echo $pendaftaran->kode_pos;?></td></tr>
						<tr><td><strong>&emsp;Agama Asal</td><td>&emsp;:</td><td><strong>&emsp;<?php echo $pendaftaran->id_agama;?></td></tr>
						<tr><td><strong>&emsp;Agama Pindah</td><td>&emsp;:</td><td><strong><font color="red">&emsp;<?php echo $pendaftaran->agama_pindah;?></font></td></tr>
						<tr><td><strong>&emsp;Jenis Kelamin</td><td>&emsp;:</td><td><strong>&emsp;<?php echo $pendaftaran->jenis_kelamin;?></td></tr>
						

				
					
				</table>
		<p style= "text-align: justify; text-indent: 0.5in">Saudara/i dengan keterangan di atas telah mengajukan perpindahan agama yang telah diputuskan Pengadilan Agama Berdasarkan Undang-Undang Nomor.x Tahun 2005 dan terdaftar dengan agama baru seperti keterangan di atas. Perekaman data ulang dilakukan oleh Dinas Kependudukan dan Pencatatan Sipil Kota Magelang</p>
		<p style= "text-align: justify; text-indent: 0.5in">Demikian Surat Keterangan dan Keputusan ini dibuat untuk dipergunakan sebagaimana mestinya</p>

		<td><p align="right">Magelang, <?php echo $pendaftaran->tanggal;?></p></td>
		<table width="100%">
			<td><center><font face="arial" style="line-height: 20px;">Nama Petugas,<br><br><br><br><br><br><?php echo $this->session->userdata('nama'); ?></font></center>
			<td><center><font face="arial" style="line-height: 20px;">Kepala Dukcapil,<br><br><br><br><br><br>Setiya Nugroho, M.Eng</font></center>
		</table>
			
		
	<script type="text/javascript">
		window.print();
</script>
</body>
</html>