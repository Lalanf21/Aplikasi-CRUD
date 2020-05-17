<div class="container section">
	<?php if ( $this->session->flashdata('pesan') ): ?>
		<div class="row">
			<div class="col m12">
				<p class="green white-text" style="font-size: 20px; text-transform: uppercase;"> 
					data mahasiswa <b> Berhasil </b>  
					<?= $this->session->flashdata('pesan');?>
					<a href="" class="right" style="margin-right: 15px; color: white;"> x </a>
				</p>
			</div>
		</div>
	<?php endif ?>

	<div class="row">
			<div class="col s6 offset-s1">
				<form action="" method="post">
					<input name="cari" placeholder="Search Mahasiswa" id="cari" type="text" autofocus>
					<button type="submit" class="btn blue darken-4"><i class="fa fa-search "></i>Search</a>
				</form>
			</div>
	</div>
	
	<div class="row">
		<div class="col m12">
			<a href="<?=base_url('data_mahasiswa/tambah') ?>" class="btn red lighten-2 section" > Tambah data mahasiswa </a>
			<ul class="collection with-header">
				<li class="collection-header center"> <h3>Daftar Mahasiswa</h3> </li>
				<?php if ( empty($mahasiswa) ): ?>
					<div class="row">
						<div class="col m12">
							<p class="red white-text" style="font-size: 20px; text-transform: uppercase;"> 
								Data Mahasiswa <b> Tidak Ditemukan !</b>
							</p>
						</div>
					</div>
				<?php endif ?>

				<?php foreach ($mahasiswa as $mhs) :?>	
		      		<li class="collection-item">
		      			<?= $mhs['nama'];?>

		      			<span class="badge">
		      				<!-- kirim data dengan url (/) -->
		      				<a href="<?=base_url(); ?>Data_mahasiswa/hapus/<?= $mhs['id'];?>" class="btn red" onclick="return confirm('yakin?');"> Hapus </a>
		      			</span>

		      			<span class="badge">
		      				<a href="<?=base_url('')?>Data_mahasiswa/edit/<?= $mhs['id'];?>" class="btn green"> Edit </a>
		      			</span>

		      			<span class="badge">
		      				<a href="<?=base_url(); ?>Data_mahasiswa/detail/<?= $mhs['id'];?>" class="btn blue"> detail </a> 
		      			</span>
		      		</li> 
				<?php endforeach; ?>
    		</ul>
		</div>
	</div>
    
</div>
