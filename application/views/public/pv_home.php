<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Gema Insani Digital</title>
	
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

	<link rel="stylesheet" href="<?php echo base_url('/assets/css/Home.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/flickity.css');?>" media="screen">
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/social.css');?>">

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
						<a class="navbar-brand" href="#"><img src="<?php echo base_url('/gambar/Prestasi.png');?>" alt=""></a>
						<a class="navbar-brand" href="#"><img src="<?php echo base_url('/gambar/Sinergi.png');?>" alt=""></a>
						
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

	<!-- LOGO ATAS -- START -->
	<div class="section full-height">
		<div class="absolute-center">
			<div class="container" id="par-logoatas">
				<div class="row">
					<div class="col-12">
						<h1>
							<span>G</span><span>E</span><span>M</span><span>A</span> 
							<span>I</span><span>N</span><span>S</span><span>A</span><span>N</span><span>I</span> 						
							<span>D</span><span>I</span><span>G</span><span>I</span><span>T</span><span>A</span><span>L</span>
						</h1>
						<p id="ph">
							<?php if($this->session->userdata('language') == 'id' || $this->session->userdata('language') == ''){ ?>
								Penerbit Buku Digital Islami
							<?php }else if($this->session->userdata('language') == 'en'){ ?>
								Islamic Digital Book Publisher
							<?php } ?>
						</p>
						<img class="rounded mx-auto d-block" src="<?php echo base_url('/gambar/mockup-mobile.png');?>" />
						<div class="row">
							<div class="col-md-6">
								<a href="https://play.google.com/store/apps/details?id=com.google.android.apps.books" target="_blank">
									<img class="rounded mx-auto d-block" id="img-gp" src="<?php echo base_url('/gambar/Google-Play.png');?>" alt="" />
								</a>
							</div>
							<div class="col-md-6">
								<a href="https://play.google.com/store/search?q=gema%20insani&c=books" target="_blank">
									<img class="rounded mx-auto d-block" id="img-gpb" src="<?php echo base_url('/gambar/Google-Play-Books.png');?>" alt="" />
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- LOGO ATAS -- END -->

	<!-- SEGERA TERBIT -- START -->
	<div class="container" id="par-coomingsoon">
		<div class="row">
			<div class="col-12">
				<h3>
				<?php if($this->session->userdata('language') == 'id' || $this->session->userdata('language') == ''){ ?>
					<span>S</span><span>E</span><span>G</span><span>E</span><span>R</span><span>A</span><span> </span><span>T</span><span>E</span><span>R</span><span>B</span><span>I</span><span>T</span>
				<?php }else if($this->session->userdata('language') == 'en'){ ?>
					<span>C</span><span>O</span><span>M</span><span>I</span><span>N</span><span>G</span><span> </span><span>S</span><span>O</span><span>O</span><span>N</span>
				<?php } ?>
				</h3>
			</div>	
		</div>	
	</div>

	<div class="main-carousel" id="p-coomingsoon" data-flickity='{ "cellAlign": "left", "contain": "true", "wrapAround": "true", "autoPlay": "true", "groupCells": "true"}'>
		<!-- <div class="p-bestseller"> -->
			<?php
				$no = 1;
				foreach ($recordcs->result() as $r){
			?>
				<div class="person">
					<div class="p-container">
						<div class="p-container-inner">
							<!-- <img class="p-circle" /> -->
							<img
								class="p-img img1"
								src="<?php echo base_url().'gambar/cover/'.$r->cover_img; ?>"
							/>
							<div class="overlay" id="overlay_kat"></div>							
							<div class="button" id="btn_books">
								<a href="<?php echo base_url('home/detail_prod/'.$r->produk_id); ?>">
									<?php if($this->session->userdata('language') == 'id' || $this->session->userdata('language') == ''){ ?>
										Lihat Buku
									<?php }else if($this->session->userdata('language') == 'en'){ ?>
										See The Book
									<?php } ?>
								</a>
							</div>
						</div>
					</div>
					<div class="p-divider"></div>
					
					<?php if($this->session->userdata('language') == 'id' || $this->session->userdata('language') == ''){ ?>
						<div class="p-name"><?php echo $r->judul_idn; ?></div>
					<?php }else if($this->session->userdata('language') == 'en'){ ?>
						<div class="p-name"><?php echo $r->judul_eng; ?></div>
					<?php } ?>

				</div>
			<?php
					$no++;
				}
			?>
		<!-- </div> -->
	</div>
	<!-- SEGERA TERBIT -- END-->
	
	<!-- PRODUK BARU -- START -->
	<div class="container" id="par-newprod">
		<div class="row">
			<div class="col-12">
				<h3>
				<?php if($this->session->userdata('language') == 'id' || $this->session->userdata('language') == ''){ ?>
					<span>P</span><span>R</span><span>O</span><span>D</span><span>U</span><span>K</span>
					<span>T</span><span>E</span><span>R</span><span>B</span><span>A</span><span>R</span><span>U</span>
				<?php }else if($this->session->userdata('language') == 'en'){ ?>
					<span>N</span><span>E</span><span>W</span><span>
					<span>P</span><span>R</span><span>O</span><span>D</span><span>U</span><span>K</span>
				<?php } ?>
				</h3>
			</div>	
		</div>	
	</div>
	
	<div class="info-box-content" id="p-newprod">
		<div class="row">
			<div class="p-collections">
				<?php
					$no = 1;
					foreach ($rec_new_prod->result() as $r){
				?>
					<div class="person">
						<div class="p-container">
								<div class="p-container-inner">
									<!-- <img class="p-circle" /> -->
									<img
										class="p-img img1"
										src="<?php echo base_url().'gambar/cover/'.$r->cover_img; ?>"
									/>
									<div class="overlay" id="overlay_kat"></div>									
									<div class="button" id="btn_books">
										<a href="<?php echo base_url('home/detail_prod/'.$r->produk_id); ?>">
											<?php if($this->session->userdata('language') == 'id' || $this->session->userdata('language') == ''){ ?>
												Lihat Buku
											<?php }else if($this->session->userdata('language') == 'en'){ ?>
												See The Books
											<?php } ?>
										</a>
									</div>
								</div>
						</div>
						<div class="p-divider"></div>

						<?php if($this->session->userdata('language') == 'id' || $this->session->userdata('language') == ''){ ?>
							<div class="p-name"><?php echo $r->judul_idn; ?></div>
						<?php }else if($this->session->userdata('language') == 'en'){ ?>
							<div class="p-name"><?php echo $r->judul_eng; ?></div>
						<?php } ?>
						
					</div>
				<?php
						$no++;
					}
				?>
			</div>
		</div>
	</div>
	<!-- PRODUK BARU -- END-->

	<!-- BEST SELLER -- START -->
	<div class="container" id="par-bestseller">
		<div class="row">
			<div class="col-12">
				<h3>
				<?php if($this->session->userdata('language') == 'id' || $this->session->userdata('language') == ''){ ?>
					<span>T</span><span>O</span><span>P</span> <span>1</span><span>0</span>
					<span>B</span><span>E</span><span>S</span><span>T</span> 
					<span>S</span><span>E</span><span>L</span><span>L</span><span>E</span><span>R</span>
				<?php }else if($this->session->userdata('language') == 'en'){ ?>
					<span>T</span><span>O</span><span>P</span> <span>1</span><span>0</span>
					<span>B</span><span>E</span><span>S</span><span>T</span> 
					<span>S</span><span>E</span><span>L</span><span>L</span><span>E</span><span>R</span>
				<?php } ?>
				</h3>
			</div>	
		</div>	
	</div>
	
	<div class="info-box-content" id="p-bestseller">
		<div class="row">
			<div class="p-collections">
				<?php
					$no = 1;
					foreach ($recordterlaris->result() as $r){
				?>
					<div class="person">
						<div class="p-container">
								<div class="p-container-inner">
									<!-- <img class="p-circle" /> -->
									<img
										class="p-img img1"
										src="<?php echo base_url().'gambar/cover/'.$r->cover_img; ?>"
									/>
									<div class="overlay" id="overlay_kat"></div>									
									<div class="button" id="btn_books">
										<a href="<?php echo base_url('home/detail_prod/'.$r->produk_id); ?>">
											<?php if($this->session->userdata('language') == 'id' || $this->session->userdata('language') == ''){ ?>
												Lihat Buku
											<?php }else if($this->session->userdata('language') == 'en'){ ?>
												See The Books
											<?php } ?>
										</a>
									</div>
								</div>
						</div>
						<div class="p-divider"></div>

						<?php if($this->session->userdata('language') == 'id' || $this->session->userdata('language') == ''){ ?>
							<div class="p-name"><?php echo $r->judul_idn; ?></div>
						<?php }else if($this->session->userdata('language') == 'en'){ ?>
							<div class="p-name"><?php echo $r->judul_eng; ?></div>
						<?php } ?>
						
					</div>
				<?php
						$no++;
					}
				?>
			</div>
		</div>
	</div>
	<!-- BEST SELLER -- END-->

	<!-- KATALOG -- START -->
	<div class="container" id="par-katalog">
		<div class="row">
			<div class="col-12">
				<h3>
				<?php if($this->session->userdata('language') == 'id' || $this->session->userdata('language') == ''){ ?>
					<span>K</span><span>A</span><span>T</span><span>A</span><span>L</span><span>O</span><span>G</span> 
					<span>E</span><span>-</span><span>B</span><span>O</span><span>O</span><span>K</span> 
					<span>G</span><span>E</span><span>M</span><span>A</span> <span>I</span><span>N</span><span>S</span><span>A</span><span>N</span><span>I</span> 
					<span>D</span><span>I</span><span>G</span><span>I</span><span>T</span><span>A</span><span>L</span>
				<?php }else if($this->session->userdata('language') == 'en'){ ?>
					<span>G</span><span>E</span><span>M</span><span>A</span><span> </span><span>I</span><span>N</span><span>S</span><span>A</span><span>N</span><span>I</span><span>'</span><span>S</span>
					<span>E</span><span>-</span><span>B</span><span>O</span><span>O</span><span>K</span> 
					<span>C</span><span>A</span><span>T</span><span>A</span><span>l</span><span>O</span><span>G</span><span>U</span><span>E</span>
				<?php } ?>
				</h3>
			</div>	
		</div>	
	</div>
	
	<div class="info-box-content" id="katalogbox">
		<div class="row">
			<div class="p-collections">
				<?php
					$no = 1;
					foreach ($rec_kat->result() as $r){
				?>
					<div class="person">
						<div class="p-container">
							<div class="p-container-inner">
								<!-- <img class="p-circle" /> -->
								<img
									class="p-img img1"
									src="<?php echo base_url().'gambar/cover_kat/'.$r->cover_img; ?>"
								/>
								<div class="overlay" id="overlay_kat"></div>									
								<div class="button" id="btn_books">
									<a href="<?php echo base_url('home/'.$r->func_column); ?>">
										<?php if($this->session->userdata('language') == 'id' || $this->session->userdata('language') == ''){ ?>
											Lihat Buku
										<?php }else if($this->session->userdata('language') == 'en'){ ?>
											See The Books
										<?php } ?>
									</a>
								</div>
							</div>
						</div>
						<div class="p-divider"></div>

						<?php if($this->session->userdata('language') == 'id' || $this->session->userdata('language') == ''){ ?>
							<div class="p-name"><?php echo $r->nama_kategori_idn; ?></div>
						<?php }else if($this->session->userdata('language') == 'en'){ ?>
							<div class="p-name"><?php echo $r->nama_kategori_eng; ?></div>
						<?php } ?>
						<div class="p-title">&emsp;</div>
						
					</div>
				<?php
						$no++;
					}
				?>
			</div>
		</div>
	</div>
	<!-- KATALOG -- END -->

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

<!-- JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
  <script src="<?php echo base_url('/assets/js/script3.js');?>"></script>
	<script src="<?php echo base_url('/assets/js/flickity.pkgd.js');?>"></script>
	<script src="<?php echo base_url('/assets/js/social.js');?>"></script>
<!-- JS -->

</body>
</html>
