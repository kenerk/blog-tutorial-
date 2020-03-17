<?php include('../path.php') ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); ?>
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
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <title>Admin Section - Dashboard</title>
</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>
    <!--admin wrapper-->
    <div class="admin-wrapper">
        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
        <!-- Admin Content -->
        <div class="admin-content">
           
            <div class="content">
                <h2 class="page-title">Dashboard</h2>

                <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>


               

            </div>
        </div>
        <!-- // Admin Content -->
    </div>
    <!-- // admin-wrapper -->

    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--Ckeditor-->
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    <!--custom script-->
    <script src="../assets/js/scripts.js"></script>
</body>

</html>