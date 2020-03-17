<?php include("path.php") ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); ?>
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
    <title>Register</title>
</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

    <div class="auth-content">

        <form action="register.php" method="post">
            <h2 class="form-title">Register</h2>

            <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

            <div>
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
            </div>
            <div>
                <label>Password Confirmation</label>
                <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
            </div>
            <div>
                <button class="btn btn-big register-btn" type="submit" name="register-btn">Register</button>
            </div>
            <p>Or <a href="<?php echo BASE_URL . '/login.php' ?>">Sign In</a></p>
        </form>
    </div>
    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--custom script-->
    <script src="assets/js/scripts.js"></script>
</body>

</html>