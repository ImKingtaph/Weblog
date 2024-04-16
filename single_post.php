<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles.css">
<?php include('config.php'); ?>
<?php include('includes/public/head_section.php'); ?>
<?php include('includes/public/registration_login.php'); ?>
<title><?php echo $_GET['post-slug']; ?> | MyWebSite</title>
</head>
<body>
<div class="container">
    <!-- Navbar -->
    <?php include(ROOT_PATH . '/includes/public/navbar.php'); ?>
    <!-- // Navbar -->

    <?php include(ROOT_PATH . '/includes/all_functions.php'); ?>

    <div class="content">

   

        <div class="post-wrapper">
            <div class="full-post-div">
                <h2 class="post-title"><?php echo $_GET['post-slug']; ?></h2>
                <?php $contenu = getPost($_GET['post-slug']); ?>
                <p class="post-body-div"><?php echo $contenu; ?></p>
            </div>
        </div>

        <div class="post-sidebar">
            <table class="card">
                <tr class="card-header">
                    <th>Topics</th>
                </tr>
                <?php $topics = getAllTopics();
                foreach ($topics as $topic): ?>
                    <tr>
                        <td class="card-content"><a href="#"><?php echo $topic['name']; ?></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>    
        </div>
    


</div>


    <!-- Footer -->
    <?php include(ROOT_PATH . '/includes/public/footer.php'); ?>
    <!-- // Footer -->
</div>
</body>
</html>
