<div class="container mt-5">
	<div class="row">
		<div class="col-6">
			<h3>Daftar mahasiswa</h3>

			<ul>
				<?= foreach ($data['mhs'] as $mhs) :?>
					<ul>
						<li><?= $mhs['nama']; ?></li>
						<li><?= $mhs['nrp']; ?></li>
						<li><?= $mhs['email']; ?></li>
						<li><?= $mhs['jurusan']; ?></li>
					</ul>
				<?= ;?>
			</ul>
		</div>
	</div>



</div>