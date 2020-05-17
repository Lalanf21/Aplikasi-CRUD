<div class="container section">
	<div class="row">
		<div class="col m12">
			<div class="card hovereable">
				<div class="card-content">
					<a href="<?=base_url('data_mahasiswa') ?>" class="btn blue"><span class="fa fa-arrow-left"></span></a>
					<span class="card-title center blue-text">Tambah data mahasiswa</span>
					<!-- <?php if ( validation_errors() ): ?>
						<div class="red white-text">
							<?= validation_errors();?>
						</div>
					<?php endif ?> -->

					<form action="" method="post">
						<input type="hidden" name="<?= $this->security->get_csrf_token_name();?>" value="<?= $this->security->get_csrf_hash();?>">
						<label for="nama">Nama</label>
						<input placeholder="Masukkan Nama" id="nama" type="text" name="nama">
						<span class="helper-text red-text"> <?= form_error('nama') ?> </span>

						<label for="nrp">NRP</label>
						<input placeholder="Masukkan NRP" id="NRP" type="text" name="nrp">
						<span class="helper-text red-text"> <?= form_error('nrp') ?> </span>

						<label for="email"> email email</label>
						<input type="text" name="email" id="email" name="email" placeholder="masukkan email">
						<span class="helper-text red-text"> <?= form_error('email') ?> </span>

						<label>Program Studi</label>
						<select name="prodi" id="prodi">
							<option value="" disabled selected> Program Studi </option>
							<option value="Teknik informatika">Teknik informatika</option>
							<option value="Teknik Industri">Teknik Industri</option>
							<option value="Teknik mesin">Teknik Mesin</option>
						</select>

						<button type="submit" class="btn blue center">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>