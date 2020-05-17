<div class="container section" style="margin-top: 50px;">
	<div class="row">
		<div class="col m12">
			<div class="card blue darken-4">
				<a href="<?=base_url('data_mahasiswa') ?>" class="btn blue"><i class="fa fa-arrow-left"></i></a>
				<div class="card-content white-text">
					<span class="card-title black center">
						<?= $mahasiswa['nama'];?>
					</span>
					<ul class="browser-default">
						<li> Nim :<?= $mahasiswa['nrp'];?> </li>
						<li> email :<?= $mahasiswa['email'];?> </li>
						<li> Jurusan :<?= $mahasiswa['jurusan'];?> </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>