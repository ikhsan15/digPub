<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Gema Insani Digital</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/Login.css'); ?>">
		<link rel="icon" type="image/png" href="<?php echo base_url('/gambar/icon_gi_digital2.png');?>">
		
	</head>
	<body class="img js-fullheight" style="background-image: url(<?php echo base_url('/gambar/bg.jpg'); ?>)">

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6 text-center mb-5">
						<h2 class="heading-section">WELCOME!</h2>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-6 col-lg-4">
						<div class="login-wrap p-0">
							<h3 class="mb-4 text-center">Sign in by entering the information below</h3>
							<form class="signin-form" method="POST" action="<?php echo site_url('login/autentikasi');?> ">
								<div class="form-group">
									<input name="email" type="email" class="form-control" placeholder="email" required />
								</div>
								<div class="form-group">
									<input name="pass" id="password-field" type="password" class="form-control" placeholder="Password" required />
									<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" ></span>
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary submit px-3" >
										Sign In
									</button>
								</div>
							</form>
              <div class="w3-panel w3-blue w3-display-container">
                <?php echo $this->session->flashdata('msg'); ?>
              </div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<script src="<?php echo base_url('/assets/js/jquery.min.js'); ?>"></script>
		<script src="<?php echo base_url('/assets/js/popper.js'); ?>"></script>
		<script src="<?php echo base_url('/assets/js/bootstrap.min.js'); ?>"></script>
		<script src="<?php echo base_url('/assets/js/login.js'); ?>"></script>
	</body>
</html>
