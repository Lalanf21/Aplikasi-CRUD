<div class="container section">
	<div class="row">
		<div class="col m12">
			<div class="card hovereable">
				<div class="card-content">
					<a href="<?=base_url('data_mahasiswa') ?>" class="btn blue"><span class="fa fa-arrow-left"></span></a>
					<span class="card-title center blue-text">Edit data mahasiswa</span>
					<!-- <?php if ( validation_errors() ): ?>
						<div class="red white-text">
							<?= validation_errors();?>
						</div>
					<?php endif ?> -->

					<form action="" method="post">
						<input type="hidden" name="id" value="<?= $mahasiswa['id'];?>">
						<label for="nama">Nama</label>
						<input placeholder="Masukkan Nama" id="nama" type="text" name="nama" value="<?= $mahasiswa['nama'];?>">
						<span class="helper-text red-text"> <?= form_error('nama') ?> </span>

						<label for="nrp">NRP</label>
						<input placeholder="Masukkan NRP" id="NRP" type="text" name="nrp" value="<?= $mahasiswa['nrp'];?>">
						<span class="helper-text red-text"> <?= form_error('nrp') ?> </span>

						<label for="email"> Masukkan email</label>
						<input type="text" name="email" id="email" name="email" value="<?= $mahasiswa['email'];?>">
						<span class="helper-text red-text"> <?= form_error('email') ?> </span>

						<label>Program Studi</label>
						<select name="prodi" id="prodi">
							<?php foreach ($prodi as $p) :?>
								<?php if ($p == $mahasiswa['jurusan']): ?>
									<option value="<?= $p;?>" selected>
										<?= $p;?>
									</option>
								<?php else: ?>
									<option value="<?= $p;?>">
										<?= $p;?>
									</option>
								<?php endif; ?>
								
							<?php endforeach; ?>
						</select>

						<button type="submit" class="btn blue center">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>