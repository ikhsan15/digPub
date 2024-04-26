<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Gema Insani Digital</title>

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

	<link rel="stylesheet" href="<?php echo base_url('/assets/css/profil.css');?>">
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

	<!-- SEJARAH -- START -->
	<section id="span_profil">
		<h3>
			<span>G</span><span>e</span><span>m</span><span>a</span> <span>I</span><span>n</span><span>s</span><span>a</span><span>n</span><span>i</span>
			<br>
			<span>D</span><span>i</span><span>g</span><span>i</span><span>t</span><span>a</span><span>l</span>
			<span>P</span><span>u</span><span>b</span><span>l</span><span>i</span><span>s</span><span>h</span><span>i</span><span>n</span><span>g</span>
		</h3>
		<?php if($this->session->userdata('language') == 'id' || $this->session->userdata('language') == ''){ ?>
			<div class="content">
				<p style="text-indent: 20px;">
					Selama lebih dari 30 tahun, Gema Insani hadir untuk merawat tumbuh-kembangnya wawasan dan peningkatan kualitas umat Islam di Indonesia. Kami sangat percaya bahwa untuk bisa berdaya, berkarya, dan menghasilkan banyak karya bermanfaat, umat Islam butuh didukung dengan ilmu dari sumber terpercaya. Kami memastikan kebutuhan ilmu yang mencerahkan setiap Muslim dapat terpenuhi, tidak hanya untuk orang dewasa, tetapi juga
					anak-anak dan remaja.
				</p>
				<p style="text-indent: 20px;">
					Seiring dengan perjalanan waktu serta perkembangan zaman dan teknologi, Gema Insani terus mengembangkan diri agar mampu menyebarluaskan inspirasi Islam yang berdampak bagi kebangkitan umat. Menyikapi perkembangan zaman dan teknologi, kini Gema Insani Digital Publishing
					yang merupakan bagian dari Gema Insani hadir sebagai sarana dan wadah untuk menghasilkan berbagai produk digital Islami.
				</p>
				<p style="text-indent: 20px;">
					Berbagai produk digital, seperti buku elektronik (ebook), buku suara (audiobook), format buku digital lain, serta konten Islami digital lain kami hadirkan untuk menyediakan dan memenuhi kebutuhan atas konten Islami dalam berbagai bentuk dan platform. Selain itu, Gema Insani Digital Publishing berupaya mengembangkan agar berbagai produk terbitan kami dapat dinikmati tidak hanya masyarakat Indonesia, tetapi juga warga Indonesia di luar negeri dan masyarakat Muslim di seluruh dunia.
				</p>
				<p style="text-indent: 20px;">
					Sampai saat ini buku terbitan Gema Insani, baik buku cetak maupun buku digital sudah tersebar di Malaysia, Singapura, Australia, New Zealand, Inggris, Jepang, Taiwan.
				</p>
			</div>
		<?php }else if($this->session->userdata('language') == 'en'){ ?>
			<div class="content">
				<p style="text-indent: 20px;">
					For more than 30 years, Gema Insani has been care for the development of insights and improve the quality of Muslims in Indonesia. We really believe that in order to be empowered, to work, and to produce many useful works, Muslims need to be supported by knowledge from trusted sources. We ensure that the knowledge that enlightens every Muslim can be fulfilled, not only for adults, but also for children and adolescents.
				</p>
				<p style="text-indent: 20px;">
					Along with the passage of time and the development of technology, Gema Insani continues to develop itself in order to be able to spread Islamic inspiration that has an impact on the awakening of Muslims. Responding to the age and technology, now Gema Insani Digital Publishing as part of Gema Insani is here as a medium to produce digital products.
				</p>
				<p style="text-indent: 20px;">
					Gema Insani Digital Publishing present various digital products, such as electronic books (ebooks), sound books (audiobooks), and other digital book formats, as well as digital Islamic content to provide and fulfill the need for Islamic content in various forms and platforms. In addition, Gema Insani Digital Publishing seeks to develop so that our various published products can be enjoyed not only by the Indonesian people, but also Indonesian citizens abroad and Muslim communities around the world.
				</p>
				<p style="text-indent: 20px;">
					Until now, the books published by Gema Insani, both printed books and digital books, have been scattered in Malaysia, Singapore, Australia, New Zealand, England, Japan, Taiwan.
				</p>
			</div>
		<?php } ?>
		<div class="img">
			<img id="img_mockup" src="<?php echo base_url('/gambar/mockup-mobile.png');?>" />
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
	</section>
	<!-- SEJARAH -- END -->

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
	<script src="<?php echo base_url('/assets/js/social.js');?>"></script>

</body>
</html>
