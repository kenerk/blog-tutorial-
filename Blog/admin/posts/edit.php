<?php include('../../path.php') ?>
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
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <title>Admin Section - Edit Post</title>
</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>
    <!--admin wrapper-->
    <div class="admin-wrapper">
        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
        <!-- Admin Content -->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add Post</a>
                <a href="index.php" class="btn btn-big">Manage Post</a>
            </div>
            <div class="content">
                <h2 class="page-title">Edit Posts</h2>

                <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                <form action="edit.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div>
                        <label>Title</label>
                        <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
                    </div>
                    <div>
                        <label>Body</label>
                        <textarea name="body" value="<?php echo $body ?>" id="body"></textarea>
                    </div>
                    <div>
                        <label>Image</label>
                        <input type="file" name="image" class="text-input">
                    </div>
                    <div>
                        <label>Topic</label>
                        <select name="topic_id" class="text-input">
                            <option value=""></option>
                            <?php foreach ($topics as $key => $topic) : ?>
                                <?php if (!empty($topic_id) && $topic_id == $topic['id']) : ?>
                                    <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                                <?php else : ?>
                                    <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name']  ?></option>
                                <?php endif; ?>

                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <?php if (empty($published) && $published == 0) : ?>
                            <label>
                                <input type="checkbox" name="published">
                                Publish
                            </label>
                        <?php else : ?>
                            <label>
                                <input type="checkbox" name="published" checked>
                                Publish
                            </label>
                        <?php endif; ?>

                    </div>
                    <button type="submit" name="update-post" class=" btn btn-big"><span>Update Post</span></button>
                </form>

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
    <script src="../../assets/js/scripts.js"></script>
</body>

</html>