<?php include("path.php") ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php');

if (isset($_GET['id'])) {
  $post = selectOne('posts', ['id' => $_GET['id']]);
}

$posts = selectAll('posts', ['published' => 1]);

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
  <title><?php echo $post['title']; ?> | ImprovJester</title>
</head>

<body>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0">
  </script>

  <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

  <!--page wrapper-->
  <div class="page-wrapper">

    <!--Content-->
    <div class="content clearfix">
      <!--main content-->
      <!--main-content-wrapper-->
      <div class="main-content-wrapper">
        <div class="main-content single">
          <h1 class="post-title"><?php echo $post['title']; ?></h1>
          <div class="post-content">
            <?php echo html_entity_decode($post['body']); ?>
          </div>
        </div>
        <!--main-content-->
      </div>
      <!--main-content-wrapper-->
      <!--sidebar-->
      <div class="sidebar singleSidebar">
        <div class="fb-page" data-href="https://www.facebook.com/Improv-Jester-103228871249606/?modal=composer" data-tabs="message" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <blockquote cite="https://www.facebook.com/Improv-Jester-103228871249606/?modal=composer" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Improv-Jester-103228871249606/?modal=composer">Improv Jester</a></blockquote>
        </div>
        <div class=" popular">
          <h2 class="section-title">Popular</h2>

          <?php foreach ($posts as $p) : ?>
            <div class="post clearfix">
              <img src="<?php echo './assets/images' . $p['image']; ?>">
              <a class="title" href="#">
                <h4><?php echo $p['title'] ?></h4>
              </a>
            </div>
          <?php endforeach; ?>
        </div>




        <div class="section topics">
          <h2 class="section-title">Topics</h2>
          <ul>
            <li><a href="#">some text</a></li>
            <li><a href="#">some text</a></li>
            <li><a href="#">some text</a></li>
            <li><a href="#">some text</a></li>
            <li><a href="#">some text</a></li>
            <li><a href="#">some text</a></li>
            <li><a href="#">some text</a></li>
          </ul>
        </div>

      </div>
      <!--sidebar-->
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
  <script src="assets/js/scripts.js"></script>
</body>

</html>