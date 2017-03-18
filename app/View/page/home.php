<?php echo $this->loadView('layout/slider'); ?>

<section id="herotext">
	<h1>Welcome to My Website</h1>
	<h3>Here's you will find more about me</h3>
</section>

<section id="content" class="container">

	<article id="artikel">
		<h2 class="judul"><?php echo $latest['judul']; ?></h2>
		<figure>
			<img src="<?php echo ASSETS_URL.'images/artikel/'.$latest['gambar']; ?>" alt="<?php echo $latest['judul_gambar']; ?>">
			<figcaption><?php echo $latest['judul_gambar']; ?></figcaption>
		</figure>
		<div class="isi-artikel">
			<p><?php echo nl2br($latest['isi']); ?>... <a href="<?php echo BASE_URL.'artikel/detail/'.$latest['id']; ?>">Read More</a></p>
		</div>
		<div class="clear">
			<a class="readmore" href="<?php echo BASE_URL ?>artikel">Lihat Semua Artikel</a>
		</div>
	</article>

	<aside id="sidebar">

	<?php foreach ($sidebar as $data) { ?>
		<div class="item">
			<h3 class="title"><?php echo $data['judul']; ?></h3>
			<p class="description"><?php echo substr($data['isi'], 0, 200); ?>...</p>
			<a class="readmore" href="<?php echo BASE_URL.'artikel/detail/'.$data['id']; ?>">Read More</a>
		</div>
	<?php } ?>

	<div class="ads_spot">Spot iklan</div>

	</aside>

</section>

<div class="clear"></div>