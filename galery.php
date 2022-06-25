<div class="middle-w3l">
	<div align="left" class="left-build-wthree py-5 px-sm-5 px-4">
		<section class="blog-area area-padding">
			<div class="container py-xl-5 py-lg-3">
				<div class="text-center mb-lg-5 mb-4">
					<h3 class="tittle mb-2">Galery</h3>
					<p>See Our Galerry</p>
				</div>

				<ul class="portfolio-area clearfix">
					<?php
					include "koneksi.php";
					$berita = mysqli_query($koneksi, "SELECT * from tb_galeri");
					while ($sql = mysqli_fetch_array($berita)) {
						?>
					<li class="portfolio-item2" data-id="id-4" data-type="cat-item-4">
						<span class="image-block">
							<a class="image-zoom" href="admin/admin/images/<?php echo $sql['foto_galeri'] ?>">
								<img src=" admin/admin/images/<?php echo $sql['foto_galeri'] ?>" class="img-fluid w3layouts agileits" alt="Traventure">
							</a>
						</span>
					</li>
					<?php
					}
					?>
				</ul>


				<!--end portfolio-area -->
			</div>
			<!-- //gallery container -->
		</section>
	</div>
</div>