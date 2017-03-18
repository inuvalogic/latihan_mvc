<section id="content" class="container">
	<article id="artikel">
		<h2 class="judul"><?php echo $row['judul']; ?></h2>
		<figure>
			<img src="<?php echo ASSETS_URL.'images/artikel/'.$row['gambar']; ?>" alt="<?php echo $row['judul_gambar']; ?>">
			<figcaption><?php echo $row['judul_gambar']; ?></figcaption>
		</figure>
		<div class="isi-artikel">
			<p><?php echo nl2br($row['isi']); ?></p>
		</div>
		<a class="readmore" href="<?php echo BASE_URL; ?>artikel">kembali ke list artikel</a>
	</article>
	<aside id="sidebar" class="mtopside">
		<div class="ads_spot">Spot iklan</div>
		<div class="ads_spot">Spot iklan</div>
		<div class="ads_spot">Spot iklan</div>
	</aside>
</section>
<div class="clear"></div>