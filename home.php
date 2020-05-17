<?php error_reporting(0); ?>

<form action="aksi.php" method="GET">
	<div class="row">
		<label>Nama</label>
		<input type="text" name="nama" value=""/>
	</div>
	<div class="row">
		<label>Email</label>
		<input type="text" name="email" value=""/>
	</div>
	<div class="row">
		<label>Lokasi</label>
		<select name="area">
			<?php $options = array('Jakarta', 'Semarang', 'Surakarta', 'Yogyakarta', 'Surabaya');
			foreach ($options as $area) {
				$selected = @$_POST['area'] == $area ? ' selected="selected"' : '';
				echo '<option value="' . $area . '"' . $selected . '>' . $area . '</option>';
			}?>
		</select>
	</div>
	<div class="row">
		<label>Jenis Kelamin</label>
		<div class="options">
			<?php
			$jenis_kelamin = array('Laki Laki' => 'Laki Laki', 'Perempuan' => 'Perempuan');
			foreach ($jenis_kelamin as $kode => $detail) {
				$checked = @$_POST['jenis_kelamin'] == $kode ? ' checked="checked"' : '';
				echo '<label class="radio">
						<input name="jenis_kelamin" type="radio" value="' . $kode . '"' . $checked . '>' . $detail . '</option>
					</label>';
			}
			?>
		</div>
	</div>
	<div class="row">
		<input type="submit" name="submit" value="Simpan"/>
	</div>
</form>
