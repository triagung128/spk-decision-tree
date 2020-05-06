<div class="content-box-large">

	<?php if ($this->session->userdata('hasil') !== NULL): ?>
        <h4><b>Hasil Identifikasi Adalah...</b></h4>
        <h2 style="color: green;"><b><?php echo $this->session->userdata('hasil'); ?></b></h2>
        <hr>
    <?php endif ?>

	<div class="panel-heading">
		<div class="panel-title">Tabel Hasil Identifikasi</div>
	</div>

	<div class="panel-body">
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
					<th>No</th>
					<th>Berat Umbi</th>
					<th>Warna Umbi_Kulit</th>
					<th>Warna Umbi_Daging</th>
					<th>Tipe Tanaman</th>
					<th>Bentuk Daun</th>
					<th>Warna Daun_Tua</th>
					<th>Warna Daun_Muda</th>
					<th>Warna Tangkai Daun</th>
					<th>Hasil</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; ?>
				<?php foreach ($data_hasil as $hasil) : ?>
					<tr class="odd gradeX">
						<td><?php echo $no++; ?></td>
						<td><?php echo $hasil['berat'];?></td>
						<td><?php echo $hasil['warna_kulit'];?></td>
						<td><?php echo $hasil['warna_daging'];?></td>
						<td><?php echo $hasil['tipe'];?></td>
						<td><?php echo $hasil['bentuk_daun'];?></td>
						<td><?php echo $hasil['warna_daun_tua'];?></td>
						<td><?php echo $hasil['warna_daun_muda'];?></td>
						<td><?php echo $hasil['warna_tangkai_daun'];?></td>
						<td><b><?php echo $hasil['varietas'];?></b></td>
						<td><a href="<?php echo base_url('tabel_hasil/hapus/'.$hasil['id']) ?>" class="btn btn-danger btn-circle" title="hapus" onclick="return confirm('Apakah anda yakin ?')"><i class="glyphicon glyphicon-trash"></i></a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	
</div>