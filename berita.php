<style type="text/css">
	.k {
		background-color: black;
		color: white;
	}

	.l {

		color: red;
	}
</style>
<br>
<br>
<div class="middle-w3l">
	<div align="left" class="left-build-wthree py-5 px-sm-5 px-4">
		<section class="blog-area area-padding">
			<div class="text-center mb-lg-5 mb-4">
				<h3 class="tittle mb-2">Berita</h3>
				<p>See Our Galery</p>
			</div>
			<div class="container 50px">

				<div class="row">
					<?php
					include "koneksi.php";
					$berita = mysqli_query($koneksi, "SELECT * from tb_berita limit 6");
					while ($sql = mysqli_fetch_array($berita)) {
						?>
					<div class="col-md-6 col-lg-4 col-md-4">
						<div class="single-blog">
							<div class="thumb">
								<img class="img-fluid" src="admin/admin/images/<?php echo $sql['foto_berita']; ?>" alt="">
							</div>
							<div class="short_details">

								<div class="k" align="center">
									<b><?php echo $sql['judul_berita'] ?></b>
								</div>
								<br>
								<a class="l d-block" href="?page=detail_berita&id=<?= $sql['id_berita']; ?>">
									<h6>Selengkapnya...</h6>
								</a>

							</div>
						</div>
						<br>

					</div>

					<?php } ?>
				</div>
			</div>
		</section>
	</div>
</div>
<br>
<br>