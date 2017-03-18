<section id="content" class="container">
	<div id="form-contact">
		<h2 class="judul">Kontak Kami</h2>
		<form method="post">
			<div class="form-row">
				<label for="nama">Nama</label>
				<input type="text" name="nama" required>	
			</div>
			<div class="form-row">
				<label for="telp">No Telp</label>
				<input type="text" name="telp" required>	
			</div>
			<div class="form-row">
				<label for="pesan">Pesan</label>
				<textarea name="pesan" required></textarea>
			</div>
			<button type="submit" name="submit" value="kirim">Kirim</button>
			
			<?php
			if ($hasil!='') {
				echo '<h3>'.$hasil.'</h3>';
			}
			?>

		</form>
	</div>
</section>