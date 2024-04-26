<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Gema Insani Digital</title>
	
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" />

	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('/assets/css/pv_detail.php');?>">
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/figure.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/flickity.css');?>" media="screen">
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/pv_kategori.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/social.css');?>">

	<link rel="icon" type="image/png" href="<?php echo base_url('/gambar/icon_gi_digital2.png');?>">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />

	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>

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
  
	<!-- KONTEN  -- START -->
  <?php
    $no = 1;
    foreach ($record as $r){
  ?>
    <section class="portofolio" id="portofolio">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="gallery-cell">
              <!-- <img src="<php echo base_url().'.../../gambar/cover/'.$r->cover_img; ?>" /> -->
							<img src="<?php echo base_url().'gambar/cover/'.$r->cover_img; ?>" />
            </div>
          </div>
          <div class="col-md-7">
            <ul class="accordion-list">
              <?php if($this->session->userdata('language') == 'id' || $this->session->userdata('language') == ''){ ?>
								<li>
									<h3>Sinopsis</h3>
									<div class="answer">
										<div class="card-body">
											<p><?php echo $r->judul_idn; ?></p>
											<p><?php echo $r->sinopsis_idn; ?></p>
										</div>
									</div>
								</li>
								<li>
									<h3>Detail Produk</h3>
									<div class="answer">
										<div class="card-body">
											<p>Penulis&emsp;&emsp;:&emsp; <?php echo $r->nama_penulis; ?></p>
											<p>Halaman&emsp;:&emsp; <?php echo $r->halaman; ?></p>
											<p>E-ISBN&emsp;&emsp;&ensp;:&emsp; <?php echo $r->eisbn; ?></p>
										</div>
									</div>
								</li>
              <?php }else if($this->session->userdata('language') == 'en'){ ?>
								<li>
									<h3>Synopsis</h3>
									<div class="answer">
										<div class="card-body">
											<p><?php echo $r->judul_eng; ?></p>
											<p><?php echo $r->sinopsis_eng; ?></p>
										</div>
									</div>
								</li>
								<li>
									<h3>Product Detail</h3>
									<div class="answer">
										<div class="card-body">
											<p>Author&emsp;&emsp;:&emsp; <?php echo $r->nama_penulis; ?></p>
											<p>Page&emsp;&emsp;&emsp;:&emsp; <?php echo $r->halaman; ?></p>
											<p>E-ISBN&emsp;&emsp;&ensp;:&emsp; <?php echo $r->eisbn; ?></p>
										</div>
									</div>
								</li>
              <?php } ?>
              <li>
                <h3>Video</h3>
                <div class="answer">
                  <div class="card-body">
                    <p><iframe width="520" height="315" src="<?php echo $r->link_yt; ?>" frameborder="0" allowfullscreen></iframe></p>
                  </div>
                </div>
              </li>
            </ul>
						<div class="vertical-center" id="center">
							<div class="row" id="btn_keranjang_det">
								<button onclick="window.location.href = '<?php echo $r->link_gplay; ?>';" formtarget="_blank">
									<i class="fa-solid fa-cart-shopping"></i>
								</button>
							</div>
						</div>
          </div>
        </div>
      </div>
    </section>
  <?php
      $no++;
    }
  ?>
	<!-- KONTEN -- END -->

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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
  <script src="<?php echo base_url('/assets/js/script3.js');?>"></script>
  <script src="<?php echo base_url('/assets/js/flickity.pkgd.js');?>"></script>
  <script src="<?php echo base_url('/assets/js/pv_detail.js');?>"></script>
	<script src="<?php echo base_url('/assets/js/social.js');?>"></script>
  
</body>
</html>
