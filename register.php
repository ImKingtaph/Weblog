<?php include('config.php'); ?>
<?php include('includes/public/head_section.php'); ?>
<?php include('includes/public/registration_login.php'); ?>
<title>MyWebSite | Home </title>

</head>

<body>

	<div class="container">

		<!-- Navbar -->
		<?php include(ROOT_PATH . '/includes/public/navbar.php'); ?>
		<!-- // Navbar -->

        
        <div class="register_div">
			<form action="<?php echo BASE_URL . 'register.php'; ?>" method="post">
				<h2>Register on MyWebSite</h2>
				<input type="text" name="username" value="" placeholder="Username">
                <input type="email" name="email" value="" placeholder="email">
                <input type="password" name="password" value="" placeholder="Password">
				<input type="password" name="password_confirmation" placeholder="Password Confirmation">
				<button class="btn" type="submit" name="register_btn">Sign in</button>
				<div style="width: 60%; margin: 0px auto;">
					<?php include(ROOT_PATH . '/includes/public/errors.php') ?>
				</div>
                
			</form>
            <p>
					Already a member? <a href="login.php"> Sign in</a>
				</p>
		</div>

		<!-- Messages -->
		
		<!-- // Messages -->

	

			



		</div>
		<!-- // content -->


	</div>
	<!-- // container -->


	<!-- Footer -->
	<?php include(ROOT_PATH . '/includes/public/footer.php'); ?>
	<!-- // Footer -->