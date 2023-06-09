<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo ROOT ?>/assets/images/logo_green.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT ?>/assets/css/login.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT ?>/assets/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT ?>/assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT ?>/assets/css/root.css">
    <title>Login Page</title>
</head>

<body>
    <form class="form" id="login" method="post" autocomplete>
        <h1 id="title">Login</h1>

        <label for="username">Username</label>
        <input value="<?= old_value('username') ?>" name="username" placeHolder="*Enter your username" id="Username" class="TextField form-control">
        
        <label for="password">Password</label>
        <input value="<?= old_value('password') ?>" type="password" name="password" placeholder="Enter your password..." id="Password" class="PasswordField form-control">
        <div class="form-message" id="response"><?= $user->getError('username') ?></div>
        <!-- <div class="form-message" id="response"><?= $user->getError('password') ?></div> -->

        <input type="submit" name="login_submit" value="Login" id="login-btn" />
        <div id="notMember">Not a member? <a href="<?= ROOT ?>/signup" id="signup-link">Sign up</a></div>
        <div id="backtoHome"><a href="<?= ROOT ?>/home" id="home-link">Back to Home</a></div>

        <!-- <div class="bottom-icon">
            <button class="social-signin facebook" type="button">
                <ion-icon name="logo-facebook" size="small"></ion-icon>
            </button>
            <button class="social-signin twitter" type="button">
                <ion-icon name="logo-twitter" size="small"></ion-icon>
            </button>
            <button class="social-signin microsoft" type="button">
                <ion-icon name="logo-google" size="small"></ion-icon>
            </button>
        </div> -->

    </form>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>