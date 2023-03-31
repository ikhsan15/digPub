<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Gema Insani Digital</title>
  
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

	<link rel="stylesheet" href="<?php echo base_url('/assets/css/kriteria.css');?>">
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

	<!-- KRITERIA IDN -- START -->
	<section id="span_profil">		
		<?php if($this->session->userdata('language') == 'id' || $this->session->userdata('language') == ''){ ?>
			<h3>
				<span>K</span><span>r</span><span>i</span><span>t</span><span>e</span><span>r</span><span>i</span><span>a</span> <span>N</span><span>a</span><span>s</span><span>k</span><span>a</span><span>h</span>
				<br>
				<span>G</span><span>e</span><span>m</span><span>a</span> <span>I</span><span>n</span><span>s</span><span>a</span><span>n</span><span>i</span>
				<span>D</span><span>i</span><span>g</span><span>i</span><span>t</span><span>a</span><span>l</span>
				<span>P</span><span>u</span><span>b</span><span>l</span><span>i</span><span>s</span><span>h</span><span>i</span><span>n</span><span>g</span>
			</h3>

			<div class="content">
				<p style="text-indent: 20px;">
					Gema Insani Digital Publishing menerima pengiriman naskah baru yang nanti akan diterbitkan dalam bentuk buku digital (ebook atau audiobook). Cara dan kriteria naskah Gema Insani Digital Publishing sebagai berikut.
				</p>
				<br><br>
				<div class="tabs">
					<input type="radio" id="tab1" name="tab-control" checked>
					<input type="radio" id="tab2" name="tab-control">
					<input type="radio" id="tab3" name="tab-control">  
					<input type="radio" id="tab4" name="tab-control">
					<ul class="tabs-ul">
						<li title="Kriteria-Umum">
							<label for="tab1" role="button">
								<span>Kriteria Umum</span>
							</label>
						</li>
						<li title="Kriteria-Khusus">
							<label for="tab2" role="button">
								<span>Kriteria Khusus</span>
							</label>
						</li>
						<li title="Format Naskah">
							<label for="tab3" role="button">
								<span>Format Naskah</span>
							</label>
						</li>
						<li title="Format Pengiriman">
							<label for="tab4" role="button">
								<span>Format Pengiriman</span>
							</label>
						</li>
					</ul>
					
					<div class="slider">
						<div class="indicator"></div>
					</div>
					<div class="content">
						<section>
							<h2>Kriteria Umum</h2>
							<p style="text-indent: 20px;">
								Naskah tidak bertentangan dengan aqidah ahlus sunnah wal jamaah dan dapat menginspirasi serta menjadi penggerak kebaikan dan kemajuan umat Islam.
							</p>
						</section>
						<section>
							<h2>Kriteria Khusus</h2>
							<ol>
								<li>
									<b>Segmentasi Umum (terbit dalam bentuk ebook/audiobook)</b>
									<br>
									<b>Tema: </b> aqidah, akhlak, fiqih, ibadah, pemikiran, kesehatan, ekonomi, sejarah, muamalah, Islam dan sains, pernikahan, keluarga, parenting, kisah-kisah inspiratif, motivasi, gaya hidup, self-help, pengembangan diri, perempuan, biografi, bisnis, psikologi, tazkiyatun nafs, dan lain-lain yang dibutuhkan oleh keluarga Muslim (naskah asli maupun terjemahan).
									<br>
									<b>Jenis: </b> nonfiksi dan fiksi
								</li>
								<br>
								<li>
									<b>Segmentasi Remaja (terbit dalam bentuk ebook/audiobook)</b>
									<br>
									<b>Tema buku remaja: </b> characters building, pencarian jati diri, prestasi, cinta, selfhelp, how to/how to be dan lain-lain yang berhubungan dengan kehidupan remaja Islami (naskah asli maupun terjemahan).
									<br>
									<b> Jenis: </b> nonfiksi dan fiksi
								</li>
								<br>
								<li>
									<b>Segmentasi Anak (terbit dalam bentuk ebook/audiobook) </b>
									<br>
									<b>Tema buku remaja: </b> aqidah, akhlak, fiqih, ibadah, sejarah, sains, keluarga, pengembangan karakter, fabel, kesehatan, ekonomi, petualangan, persahabatan, dan lain-lain yang dibutuhkan oleh anak keluarga Muslim.
									Batasan umur: untuk usia 8+
									<br>
									<b>Jenis: </b> nonfiksi dan fiksi
								</li>
							</ol>
						</section>
						<section>
							<h2>Format Naskah</h2>
							<ol>
								<li>
									<b>NASKAH UMUM DAN REMAJA</b>
									<ul>
										<li>Ms.word margin normal</li>
										<li>Font calibri</li>
										<li>Ukuran font 12 pt</li>
										<li>Spasi 1,5</li>
										<li>Jumlah halaman minimal 100 halaman word</li>
									</ul>
								</li>
								<br>
								<li>
									<b>NASKAH ANAK</b>
									<ul>
										<li>Pictorial book minimal 24 halaman jadi, dan kelipatannya. Naskah dalam Ms.word. Font calibri, 14 pt, spasi 1,5.</li>
										<li>Ilustrated book 48, 72, 96 halaman jadi. Naskah dalam Ms.word. Font calibri, 14 pt, spasi 1,5.</li>
										<li>Komik 72 halaman jadi. Naskah dalam Ms.word. Font calibri, 14 pt, spasi 1,5.</li>
									</ul>
								</li>
							</ol>
						</section>
						<section>
							<h2>Format Pengiriman</h2>
							<ol>
								<li>Kirimkan naskah dalam bentuk softcopy (Ms. Word atau PDF) ke email: redaksi @gemainsani.co.id</li>
								<li>Judul email: [Segmentasi_Digital Publishing] Judul Naskah
									<br>Contoh:
									<br>[Umum_Digital Publishing] Pribadi Hebat
									<br>[Umum_Digital Publishing] Tenanglah, Masih Ada Allah
									<br>[Remaja_Digital Publishing] Gaul Bebas, Kenapa Enggak?
									<br>[Anak_Digital Publishing] Komik Petualangan Sula
								</li>
								<li>Kirimkan naskah dalam bentuk attachment. BUKAN di badan email.</li>
								<li>Dilengkapi CV penulis, sinopsis lengkap, nilai jual/nilai pembeda, marketing plan jika ada, dan penjelasan mengenai copyright jika naskah terjemahan.</li>
								<li>Tim redaksi tidak menerima naskah dalam bentuk hardcopy.</li>
							</ol>
						</section>
					</div>
				</div>
			</div>
		<?php }else if($this->session->userdata('language') == 'en'){ ?>
			<h3>
				<span>C</span><span>r</span><span>i</span><span>t</span><span>e</span><span>r</span><span>i</span><span>a</span> <span>F</span><span>o</span><span>r</span>
				<br>
				<span>G</span><span>e</span><span>m</span><span>a</span> <span>I</span><span>n</span><span>s</span><span>a</span><span>n</span><span>i</span>
				<span>D</span><span>i</span><span>g</span><span>i</span><span>t</span><span>a</span><span>l</span>
				<span>P</span><span>u</span><span>b</span><span>l</span><span>i</span><span>s</span><span>h</span><span>i</span><span>n</span><span>g</span>
				<span>S</span><span>c</span><span>r</span><span>i</span><span>p</span><span>t</span><span>s</span>
			</h3>
			
			<div class="content">
				<p style="text-indent: 20px;">
					Gema Insani Digital Publishing accepts submissions of new scripts which will be published in the form of a digital book (ebook or audiobook). The methods and criteria for the Gema Insani Digital Publishing script are as follows.
				</p>
				<br><br>
				<div class="tabs">
					<input type="radio" id="tab1" name="tab-control" checked>
					<input type="radio" id="tab2" name="tab-control">
					<input type="radio" id="tab3" name="tab-control">  
					<input type="radio" id="tab4" name="tab-control">
					<ul class="tabs-ul">
						<li title="Kriteria-Umum">
							<label for="tab1" role="button">
								<span>General Criteria</span>
							</label>
						</li>
						<li title="Kriteria-Khusus">
							<label for="tab2" role="button">
								<span>Special Criteria</span>
							</label>
						</li>
						<li title="Format Naskah">
							<label for="tab3" role="button">
								<span>Format of Script</span>
							</label>
						</li>
						<li title="Format Pengiriman">
							<label for="tab4" role="button">
								<span>Format of Shipping</span>
							</label>
						</li>
					</ul>
					
					<div class="slider">
						<div class="indicator"></div>
					</div>
					<div class="content">
						<section>
							<h2>General Criteria</h2>
							<p style="text-indent: 20px;">
								Scripts do not contradict the aqidah ahlus sunnah wal jamaah and can inspire and become a driving force for the good and progress of Muslims.
							</p>
						</section>
						<section>
							<h2>Special Criteria</h2>
							<ol>
								<li>
									<b>General Segmentation (published in ebook / audiobook)</b>
									<br>
									<b>Themes: </b> aqidah, morals, fiqh, worship, thought, health, economic, history, muamalah, Islam and science, marriage, family, parenting, inspirational stories, motivation, lifestyle, self-healing, self-development, self-help, women, biography, business, psychology, tazkiyatun nafs, and others required by Muslim families (original text and translation).
									<br>
									<b>Types: </b> nonfiction and fiction
								</li>
								<br>
								<li>
									<b>Segmentation Youth (published in ebook / audiobook)</b>
									<br>
									<b>The theme of teen books: </b> characters building, look for identity, achievement, love, self-help, how to / how to be and others related to the life of Islamic adolescents (original script or translation).
									<br>
									<b> Types: </b> nonfiction and fiction
								</li>
								<br>
								<li>
									<b>Segmentation Children (published in ebook / audiobook)</b>
									<br>
									<b>The theme of children’s books: </b> aqidah, morals, fiqh, worship, history, science, family, character development, fable, health, economy, adventure, friendship, and others needed by children of Muslim families. Age restrictions: for ages 8+
									<br>
									<b>Types: </b> nonfiction and fiction
								</li>
							</ol>
						</section>
						<section>
							<h2>Format of Script</h2>
							<ol>
								<li>
									<b>General and Teen Segmentation</b>
									<ul>
										<li>Ms. Word margin is normal</li>
										<li>Calibration font</li>
										<li>12 pt</li>
										<li>Space 1,5</li>
										<li>The minimum number of pages is 100 pages</li>
									</ul>
								</li>
								<br>
								<li>
									<b>Children Segmentation</b>
									<ul>
										<li>Pictorial book: 24 and its multiples finished pages. Scripts in Ms. Word. Calibry, 14 pt, spaced 1,5.</li>
										<li>Illustrated book: 48, 72, 96 finished pages. Scripts in Ms. Word. Calibry, 14 pt, spaced 1,5.</li>
										<li>Comic: 72 finished pages. Scripts in Ms. Word. Calibry font, 14 pt, spaced 1,5.</li>
									</ul>
								</li>
							</ol>
						</section>
						<section>
							<h2>Format of Shipping</h2>
							<ol>
								<li>Send the script in softcopy (Ms. Word or PDF) to email: digitalpublishing@gemainsani.co.id</li>
								<li>Email title: [Segmentation_Digital Publishing] Title
									<br>Example:
									<br>[General_Digital Publishing] Great Personal
									<br>[General_Digital Publishing] Calm Down, God Always with You
									<br>[Teen_Digital Publishing] Jomblo’s Diary
									<br>[Children_Digital Publishing] Adventures of Sula Comic
								</li>
								<li>Send the scripts in the form of attachments. NOT in the body of the email.</li>
								<li>Equipped with the author's CV, complete synopsis, selling point / differentiating value, marketing plan if any, and an explanation of the copyright if the script is translated.</li>
								<li>The editorial team did not accept hardcopy scripts.</li>
							</ol>
						</section>
					</div>
				</div>
			</div>
		<?php } ?>
	</section>
	<!-- KRITERIA IDN -- END -->
	
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

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
  <script src="<?php echo base_url('/assets/js/script3.js');?>"></script>
	<script src="<?php echo base_url('/assets/js/social.js');?>"></script>

</body>
</html>
