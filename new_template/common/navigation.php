<nav id="navigation" class="navbar navbar-expand-lg navbar-default fixed-top">
	<div class="container">
		<a class="navbar-brand" href="<?php echo SERVER_URL; ?>">PRAPE <span class="text-point">.</span></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation-link" aria-controls="navigation-link" aria-expanded="false" aria-label="Toggle navigation">
			<?php /* <span class="navbar-toggler-icon"></span> */?>
			<i class="fas fa-bars"></i>
		</button>
	
		<div class="collapse navbar-collapse justify-content-end" id="navigation-link">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="<?php echo SERVER_URL; ?>" class="nav-link" name="home">HOME</a>
				</li>

				<li class="nav-item">
					<a href="<?php echo SERVER_PAGE_URL; ?>/aboutus.php" class="nav-link" name="aboutus">ABOUT US</a>
				</li>

				<li class="nav-item">
					<a href="<?php echo SERVER_PAGE_URL; ?>/products.php" class="nav-link" name="products">PRODUCTS</a>
				</li>

				<!-- <li class="nav-item">
					<a href="<?php echo SERVER_PAGE_URL; ?>/news.php" class="nav-link" name="news">NEWS</a>
				</li> -->

				<li class="nav-item">
					<a href="<?php echo SERVER_PAGE_URL; ?>/contactus.php" class="nav-link" name="contactus">CONTACT US</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
