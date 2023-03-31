<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Gema Insani Digital</title>

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

	<link rel="stylesheet" href="<?php echo base_url('/assets/css/figure.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/flickity.css');?>" media="screen">
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/social.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/pv_kategori.css');?>">

	<link rel="icon" type="image/png" href="<?php echo base_url('/gambar/icon_gi_digital2.png');?>">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />

	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>
<body>
<!-- partial:index.partial.html -->
<body class="hero-anime">	

  <!-- NAVIGATION -- START -->
	<div class="navigation-wrap bg-light start-header start-style">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-light">
					
						<a class="navbar-brand" href="#"><img src="<?php echo base_url('/gambar/gi_digital2.png');?>" alt=""></a>	
						
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						
						<?php if($this->session->userdata('language') == 'id' || $this->session->userdata('language') == ''){ ?>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav ml-auto py-4 py-md-0">
									<!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active"> -->
									<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
										<a class="nav-link" href="<?php echo base_url(); ?>">Halaman Utama</a>
									</li>
									<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
										<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Katalog</a>
										<div class="dropdown-menu">
											<?php
												$no = 1;
												foreach ($rec_kat->result() as $r){
											?>
												<a class="dropdown-item" href="<?php echo base_url('home/'.$r->func_column); ?>"><?php echo $r->nama_kategori_idn; ?></a>
											<?php } ?>
										</div>
									</li>
									<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
										<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profil</a>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="<?php echo base_url('profil'); ?>">Tentang Kami</a>
											<a class="dropdown-item" href="<?php echo base_url('profil/kriteria'); ?>">Kriteria Naskah</a>
										</div>
									</li>
									<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
										<a class="nav-link" href="<?php echo base_url('profil/kontak'); ?>">Kontak</a>
									</li>
									<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
										<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Bahasa</a>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="<?php echo base_url('home/bahasa/id'); ?>"> <span class="fi fi-id"></span> </a>
											<a class="dropdown-item" href="<?php echo base_url('home/bahasa/en'); ?>"> <span class="fi fi-gb"></span> </a>
										</div>
									</li>
									<?php if($this->session->userdata('access') == 'Administrator' || $this->session->userdata('access') == 'Magang'){ ?>
									<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
										<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menu Admin</a>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="<?php echo base_url('produk'); ?>">Produk</a>
											<a class="dropdown-item" href="<?php echo base_url('kategori'); ?>">Kategori</a>
										</div>
									</li>
									<?php } ?>
									<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
										<?php if($this->session->userdata('access') == 'Administrator' || $this->session->userdata('access') == 'Magang'){ ?>
											<a href="<?php echo site_url('login/logout');?>" class="nav-link">Keluar</a>
										<?php } ?>
									</li>
								</ul>
							</div>
						<?php }else if($this->session->userdata('language') == 'en'){ ?>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav ml-auto py-4 py-md-0">
									<!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active"> -->
									<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
										<a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
									</li>
									<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
										<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Catalog</a>
										<div class="dropdown-menu">
											<?php
												$no = 1;
												foreach ($rec_kat->result() as $r){
											?>
												<a class="dropdown-item" href="<?php echo base_url('home/'.$r->func_column); ?>"><?php echo $r->nama_kategori_eng; ?></a>
											<?php } ?>
										</div>
									</li>
									<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
										<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profile</a>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="<?php echo base_url('profil'); ?>">About Us</a>
											<a class="dropdown-item" href="<?php echo base_url('profil/kriteria'); ?>">Script of Criteria</a>
										</div>
									</li>
									<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
										<a class="nav-link" href="<?php echo base_url('profil/kontak'); ?>">Contact</a>
									</li>
									<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
										<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Language</a>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="<?php echo base_url('home/bahasa/id'); ?>"> <span class="fi fi-id"></span> </a>
											<a class="dropdown-item" href="<?php echo base_url('home/bahasa/en'); ?>"> <span class="fi fi-gb"></span> </a>
										</div>
									</li>
									<?php if($this->session->userdata('access') == 'Administrator' || $this->session->userdata('access') == 'Magang'){ ?>
									<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
										<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Admin Menu</a>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="<?php echo base_url('produk'); ?>">Product</a>
											<a class="dropdown-item" href="<?php echo base_url('kategori'); ?>">Category</a>
										</div>
									</li>
									<?php } ?>
									<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
										<?php if($this->session->userdata('access') == 'Administrator' || $this->session->userdata('access') == 'Magang'){ ?>
											<a href="<?php echo site_url('login/logout');?>" class="nav-link">Logout</a>
										<?php } ?>
									</li>
								</ul>
							</div>
						<?php } ?>

					</nav>		
				</div>
			</div>
		</div>
	</div>
	<!-- NAVIGATION -- END -->

	<div class="section full-height">
		<div class="absolute-center">
			<div class="section">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h1>
								<span>G</span><span>E</span><span>M</span><span>A</span> 
								<span>I</span><span>N</span><span>S</span><span>A</span><span>N</span><span>I</span>
								<span>D</span><span>I</span><span>G</span><span>I</span><span>T</span><span>A</span><span>L</span>
							</h1>
						</div>	
					</div>		
				</div>
				<div class="container">
          <div class="row">
						<div class="col-12">
							<h3>
								<span>E</span><span>-</span><span>B</span><span>o</span><span>o</span><span>k</span><span>s</span>
								<?php foreach ($rec_up->result() as $r){ ?>
									<?php if($this->session->userdata('language') == 'id' || $this->session->userdata('language') == ''){ ?>
										<span><?php echo $r->nama_kategori_idn; ?></span>
									<?php }else if($this->session->userdata('language') == 'en'){ ?>
										<span><?php echo $r->nama_kategori_eng; ?></span>
								<?php } break; } ?>
							</h3>
						</div>	
					</div>	
				</div>	
			</div>
		</div>
	</div>

	<!-- PRODUK KATEGORI -- START -->
	<div class="container">
		<div class="row justify-content-center align-items-center my-1">
			<?php
				$no = 1;
				foreach ($rec_up->result() as $r){
			?>
				<figure class="image-block">
					<div class="gallery-cell">
						<img src="<?php echo base_url().'./gambar/cover/'.$r->cover_img; ?>" alt="">
					</div>
					<figcaption>
						<h3>
							<?php if($this->session->userdata('language') == 'id' || $this->session->userdata('language') == ''){ ?>
								<?php echo $r->judul_idn; ?>
							<?php }else if($this->session->userdata('language') == 'en'){ ?>
								<?php echo $r->judul_eng; ?>
							<?php } ?>
						</h3>
						<p><?php echo $r->nama_penulis; ?></p>
						<div class="vertical-center" id="center">
							<div class="row" id="btn_buku">
								<button onclick="window.location.href = '<?php echo base_url('home/detail_prod/'.$r->produk_id) ?>';" formtarget="_blank">
									<i class="fa-solid fa-book"></i>
								</button>
							</div>
							<div class="row" id="btn_keranjang">
								<button onclick="window.location.href = '<?php echo $r->link_gplay; ?>';" formtarget="_blank">
									<i class="fa-solid fa-cart-shopping"></i>
								</button>
							</div>
						</div>
					</figcaption>
				</figure>
			<?php
					$no++;
				}
			?>
		</div>
		<div class="row justify-content-center align-items-center my-2">
			<?php
				$no = 1;
				foreach ($rec_down->result() as $r){
			?>
				<figure class="image-block">
					<div class="gallery-cell">
						<img src="<?php echo base_url().'./gambar/cover/'.$r->cover_img; ?>" alt="">
					</div>
					<figcaption>
						<h3>
							<?php if($this->session->userdata('language') == 'id' || $this->session->userdata('language') == ''){ ?>
								<?php echo $r->judul_idn; ?>
							<?php }else if($this->session->userdata('language') == 'en'){ ?>
								<?php echo $r->judul_eng; ?>
							<?php } ?>
						</h3>
						<p><?php echo $r->nama_penulis; ?></p>
						<div class="vertical-center" id="center">
							<div class="row" id="btn_buku">
								<button onclick="window.location.href = '<?php echo base_url('home/detail_prod/'.$r->produk_id) ?>';" formtarget="_blank">
									<i class="fa-solid fa-book"></i>
								</button>
							</div>
							<div class="row" id="btn_keranjang">
								<button onclick="window.location.href = '<?php echo $r->link_gplay; ?>';" formtarget="_blank">
									<i class="fa-solid fa-cart-shopping"></i>
								</button>
							</div>
						</div>
					</figcaption>
				</figure>
			<?php
					$no++;
				}
			?>
		</div>
		<?php if($this->session->userdata('language') == 'id' || $this->session->userdata('language') == ''){ ?>
			<div class="btn-content-1" id="myBtn-1">Lebih Lengkap</div>
		<?php }else if($this->session->userdata('language') == 'en'){ ?>
			<div class="btn-content-1" id="myBtn-1">More</div>
		<?php } ?>
	</div>
	<!-- PRODUK KATEGORI -- END -->

	<!-- SOCIAL PANEL -- START -->
	<div class="social-panel-container">
		<div class="social-panel">
			<p>Gema Insani Digital Publishing</p>
			<button class="close-btn"><i class="fas fa-times"></i></button>
			<h4>Get in touch on</h4>
			<ul>
				<li>
					<a href="https://www.gemainsani.co.id/" target="_blank">
					<i class="fa-solid fa-globe"></i>
					</a>
				</li>
				<li>
					<a href="https://wa.me/6282113166865?text=Assalamualaikum%20warahmatullahi%20wabarakatuh" target="_blank">
					<i class="fa-brands fa-whatsapp"></i>
					</a>
				</li>
				<li>
					<a href="https://www.instagram.com/gemainsanidigital/" target="_blank">
						<i class="fab fa-instagram"></i>
					</a>
				</li>
				<li>
					<a href="https://www.facebook.com/gemainsanipage/" target="_blank">
						<i class="fab fa-facebook"></i>
					</a>
				</li>
				<li>
					<a href="https://www.youtube.com/@gemainsanigip" target="_blank">
						<i class="fa-brands fa-youtube"></i>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<button class="floating-btn">Get in Touch</button>
	<!-- SOCIAL PANEL -- END -->

	<!-- BACK TO TOP -- START -->
	<div class="fixed-top">
		<a href="#" id="scroll" style="display: none;">
			<span></span>
		</a>
	</div>
	<!-- BACK TOP TOP -- END -->

<!-- </body> -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
  <script src="<?php echo base_url('/assets/js/script3.js');?>"></script>
  <script src="<?php echo base_url('/assets/js/flickity.pkgd.js');?>"></script>
	<script src="<?php echo base_url('/assets/js/social.js');?>"></script>

	<!-- read more & read less -->
	<?php if($this->session->userdata('language') == 'id' || $this->session->userdata('language') == ''){ ?>
		<script>
			$(".my-2").hide();
			$(".btn-content-1").click(function () {
				if ($(this).hasClass("active")) {
					$(this).html("Lebih Lengkap").removeClass("active");
					$(this).prev(".my-2").slideUp();
				} else {
					$(this).html("Lebih Singkat").addClass("active");
					$(this).prev(".my-2").slideDown();
				}
			});
		</script>
	<?php }else if($this->session->userdata('language') == 'en'){ ?>
		<script>
			$(".my-2").hide();
			$(".btn-content-1").click(function () {
				if ($(this).hasClass("active")) {
					$(this).html("More").removeClass("active");
					$(this).prev(".my-2").slideUp();
				} else {
					$(this).html("Less").addClass("active");
					$(this).prev(".my-2").slideDown();
				}
			});
		</script>
	<?php } ?>
  <!-- read more & read less -->

</body>
</html>
