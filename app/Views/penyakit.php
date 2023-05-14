<div class="container mt-5">
	<h2><?= $title ?></h2>
	<form action="<?= base_url('hasil') ?>" method="post">
		<div class="form-group">
			<label for="penyakit">Pilih Jenis Penyakit:</label>
			<select class="form-control" id="penyakit" name="penyakit">
				<?php foreach ($getPenyakit as $row) : ?>
					<option value="<?= $row['id_penyakit'] ?>"><?= $row['nama_penyakit'] ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<?php foreach ($getGejala as $row) : ?>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="<?= $row['id_gejala'] ?>" id="<?= $row['id_gejala'] ?>" name="gejala[]">
				<label class="form-check-label" for="<?= $row['id_gejala'] ?>">
					<?= $row['nama_gejala'] ?>
				</label>
			</div>
		<?php endforeach; ?>
		<button type="submit" class="btn btn-primary mt-3">Analisa</button>
	</form>
</div>