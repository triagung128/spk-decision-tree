<div class="row">
	<div class="col-md-12">
		<div class="content-box-large">

			<div class="panel-heading">
	            <div class="panel-title">Form Identifikasi Varietas Ubi Jalar</div>
	        </div>

			<div class="panel-body">

				<form class="form-horizontal" role="form" action="<?php echo base_url('form_input/proses') ?>" method="POST">

					<div class="form-group">
						<label class="control-label col-md-4" for="berat_umbi">Berat Umbi</label>
						<div class="col-md-4">
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group">
										<input class="form-control" type="number" name="berat_umbi" id="berat_umbi" required>
										<span class="input-group-addon">/g</span>
									</div>
								</div>
							</div>
						</div>
					</div>

			  <!-- <div class="form-group">
				    	<label for="jumlah_umbi" class="col-sm-4 control-label">Jumlah Umbi</label>
					    <div class="col-sm-4">
					      	<input type="number" class="form-control" name="jumlah_umbi" id="jumlah_umbi" required>
					    </div>
			  		</div> -->

					<div class="form-group">
						<label class="col-md-4 control-label" for="select-1">Warna Umbi_Kulit</label>
						<div class="col-md-4">
							<select class="form-control" id="select-1" name="warna_umbi_kulit" required>
								<option selected hidden disabled value="">---Pilih Warna Umbi Kulit---</option>
								<option value="Krem">Krem</option>
								<option value="Krem Tua">Krem Tua</option>
								<option value="Putih">Putih</option>
								<option value="Merah">Merah</option>
								<option value="Merah Muda">Merah Muda</option>
								<option value="Merah Tua">Merah Tua</option>
							</select> 
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="select-2">Warna Umbi_Daging</label>
						<div class="col-md-4">
							<select class="form-control" id="select-2" name="warna_umbi_daging" required>
								<option selected hidden disabled value="">---Pilih Warna Umbi Daging---</option>
								<option value="Kuning">Kuning</option>
								<option value="Kuning Pucat">Kuning Pucat</option>
								<option value="Putih">Putih</option>
								<option value="Orange">Orange</option>
								<option value="Krem">Krem</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="select-3">Tipe Tanaman</label>
						<div class="col-md-4">
							<select class="form-control" id="select-3" name="tipe_tanaman" required>
								<option selected hidden disabled value="">---Pilih Tipe Tanaman---</option>
								<option value="Semi Tegak">Semi Tegak</option>
								<option value="Menjalar">Menjalar</option>
								<option value="Tegak">Tegak</option>
								<option value="Semi Kompak">Semi Kompak</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="select-4">Bentuk Daun</label>
						<div class="col-md-4">
							<select class="form-control" id="select-4" name="bentuk_daun" required>
								<option selected hidden disabled value="">---Pilih Bentuk Daun---</option>
								<option value="Jantung">Jantung</option>
								<option value="Racik">Racik</option>
								<option value="Segitiga">Segitiga</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="select-5">Warna Daun_Tua</label>
						<div class="col-md-4">
							<select class="form-control" id="select-5" name="warna_daun_tua" required>
								<option selected hidden disabled value="">---Pilih Warna Daun Tua---</option>
								<option value="Ungu">Ungu</option>
								<option value="Hijau">Hijau</option>
								<option value="Hijau Tua">Hijau Tua</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="select-6">Warna Daun_Muda</label>
						<div class="col-md-4">
							<select class="form-control" id="select-6" name="warna_daun_muda" required>
								<option selected hidden disabled value="">---Pilih Warna Daun Muda---</option>
								<option value="Ungu">Ungu</option>
								<option value="Ungu">Ungu Muda</option>
								<option value="Hijau">Hijau</option>
								<option value="Hijau Tepi Ungu">Hijau Tepi Ungu</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="select-7">Warna Tangkai Daun</label>
						<div class="col-md-4">
							<select class="form-control" id="select-7" name="warna_tangkai_daun" required>
								<option selected hidden disabled value="">---Pilih Warna Tangkai Daun---</option>
								<option value="Ungu">Ungu</option>
								<option value="Hijau">Hijau</option>
								<option value="Hijau Bintik Ungu">Hijau Bintik Ungu</option>
								<option value="Hijau Garis Ungu">Hijau Garis Ungu</option>
							</select>
						</div>
					</div>

					<div class="form-group">
					    <div class="col-sm-offset-4 col-sm-8">
					    	<button type="submit" class="btn btn-primary" name="submit">Proses & Simpan</button>
					    </div>
					</div>

				</form>

			</div> <!-- /panel-body -->

		</div>
	</div>
</div>