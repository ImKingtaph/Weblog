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

		<!-- Banner -->
		<?php include(ROOT_PATH . '/includes/public/banner.php'); ?>
		<!-- // Banner -->

		<!-- Messages -->
		
		<!-- // Messages -->

		<!-- content -->
		<div class="content">
			<h2 class="content-title">Recent Articles</h2>
			<hr>
			<?php include('includes/all_functions.php'); 

			$posts = getPublishedPosts();

			foreach ($posts as $post): ?>
				<div class="post" style="margin-left: 0px;">
					<?php echo $post['topic']['name']; ?>
					<img src="/static/images/<?php echo $post['image']; ?>" class="post_image" alt="">
					<?php echo $post['title'] ?><br>
					<i class="fa fa-clock-o"><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></i> </br>
					<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">Read more</a>
				</div>
			<?php endforeach; ?>
		</div>
			



		</div>
		<!-- // content -->


	</div>
	<!-- // container -->


	<!-- Footer -->
	<?php include(ROOT_PATH . '/includes/public/footer.php'); ?>
	<!-- // Footer -->