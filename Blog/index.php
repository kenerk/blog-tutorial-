<?php
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");
$posts = array();
$postsTitle = 'Recent Posts';


if (isset($_POST['search-term'])) {
    $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
    $posts = searchPosts($_POST['search-term']);
} else {
    $posts = getPublishedPosts();
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/e2626be2cb.js" crossorigin="anonymous"></script>
    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Improv Jester</title>
</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>


    <!--page wrapper-->
    <div class="page-wrapper">

        <!--post-slider-->
        <div class="post-slider">
            <h1 class="slider-title">Proper Man</h1>
            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>

            <div class="post-wrapper">


                <?php foreach ($posts as $post) : ?>
                    <div class="post">
                        <img src="<?php echo './assets/images' . $post['image']; ?>" class="slider-image" alt="">
                        <div class="post-info">
                            <h4><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h4>
                        </div>
                        <i class="far fa-user">&nbsp;<?php echo $post['username']; ?></i>
                        &nbsp;
                        <i class="far fa-calendar"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                    </div>
                <?php endforeach; ?>

            </div>
            <!--//post-slider-->

            <!--Content-->
            <div class="content clearfix">

                <div class="main-content">
                    <h1 class="recent-post-title"><?php echo $postsTitle ?></h1>
                    <?php foreach ($posts as $post) : ?>
                        <div class="posts">
                            <img src="<?php echo './assets/images' . $post['image']; ?>" class="slider-image" alt="">
                            <div class="post-preview">
                                <h1><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h1>
                                <i class="far far-user"><?php echo $post['username']; ?></i>
                                &nbsp;
                                <i class="far calendar"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                                <p class="preview-text">
                                    <?php echo html_entity_decode(substr($post['body'], 0, 150) . '...') ?>
                                </p>
                                <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">Read More</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!--main-content-->
                <div class="sidebar">
                    <div class="section search">
                        <h2 class="section-title">Search a video</h2>
                        <form action="index.php" method="post">
                            <input type="text" name="search-term" class="text-input" placeholder="Search...">
                        </form>
                    </div>

                    <div class="section topics">
                        <h2 class="section-title">Topics</h2>
                        <ul>
                            <?php foreach ($topics as $key => $topic) : ?>
                                <li><a href="#"><?php echo $topic['name']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                </div>
            </div>
            <!--content-->
            <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

        </div>
        <!--page-wrapper-->
        <!--JQuery-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!--SLICK CAROUSEL-->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <!--custom script-->
        <script src="./assets/js/scripts.js"></script>
</body>

</html>