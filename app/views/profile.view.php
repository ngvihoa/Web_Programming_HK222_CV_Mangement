<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo ROOT ?>/assets/images/logo_green.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo ROOT ?>/assets/css/root.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT ?>/assets/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT ?>/assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT ?>/assets/css/profile.css">

    <title>CVblog.com</title>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="space"></div>

    <section class="profile-area">
        <nav id="profile_nav" class="">
            <div>
                <div id="user-button" class="<?php echo $active_User; ?>">
                    <a href="<?php echo ROOT ?>/profile">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                        </svg>
                        <span class="">User Profile</span>
                    </a>
                </div>
                <div id="cv-button" class="<?php echo $active_CV; ?>">
                    <a href="<?php echo ROOT ?>/profile/profile_cv">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-file-earmark-person" viewBox="0 0 16 16">
                            <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5v2z"/>
                        </svg>
                        <span class="">User CV</span>
                    </a>
                </div>
            </div>
        </nav>

        <!-- class: profile-container -->
        <?php
            $tmp = $p ?? 'profile_user';
            include ''.$tmp.'.view.php';
        ?>
    </section>

    <?php
        include 'footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>