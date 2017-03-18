<section id="content" class="list_artikel container">
	<h2 class="judul">List Artikel</h2>
	<?php foreach ($data_artikel as $row) { ?>
		<div class="item">
			<h3 class="title"><?php echo $row['judul']; ?></h3>
			<figure>
				<img src="<?php echo ASSETS_URL.'images/artikel/'.$row['gambar']; ?>" alt="<?php echo $row['judul_gambar']; ?>">
			</figure>
			<div class="description">
				<p><?php echo substr($row['isi'], 0, 200); ?>...</p>
				<a class="readmore" href="<?php echo BASE_URL.'artikel/detail/'.$row['id']; ?>">Read More</a>
			</div>
			<div class="clear"></div>
		</div>
	<?php } ?>
</section>