<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo ROOT ?>/assets/images/logo_green.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT ?>/assets/css/profile.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT ?>/assets/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT ?>/assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT ?>/assets/css/root.css">

    <title>CVblog.com</title>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="space"></div>
    <section class="profile-area">
        <div style="width: 100%;height:50px;"></div>

        <div class="col profile-container">
            <!-- <h3>User CV</h3> -->
            <div class="CVform">

                <div class="blockname">
                    <h1 class="name">Hoa Nguyen</h1>
                    <div class="address">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                        <span>Ho Chi Minh City, Vietnam</span>
                    </div>
                </div>
                <br>
                <div class="block">
                    <div class="label"><span></span><span>Job title</span><span></span></div>
                    <p class="degree data">Software Engineer</p>
                </div>
                <!-- <hr> -->
                <div class="block">
                    <div class="label"><span></span><span>Work experiences</span><span></span></div>
                    <ul>
                        <li class="degree">
                            <span class="name">Frontend Developer</span>
                            <span class="school_organization">Geekup</span>
                            <div class="time">August, 2016 - June, 2017</div>
                            <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum fugiat alias incidunt eos mollitia consequatur sit necessitatibus maxime molestiae aut suscipit, cumque vitae accusamus corrupti, aliquam error culpa? Sint, velit.</div>
                        </li>

                        <li class="degree">
                            <span class="name">Fullstack Developer</span>
                            <span class="school_organization">Meta</span>
                            <div class="time">August, 2016 - June, 2017</div>
                            <div class="description"></div>
                        </li>
                    </ul>
                </div>
                <!-- <hr> -->
                <div class="block">
                    <div class="label"><span></span><span>Education</span><span></span></div>
                    <ul>
                        <li class="degree">
                            <span class="name">Bachelor of Computer Science</span>
                            <span class="school_organization">Ho Chi Minh city University of Technology</span>
                            <div class="time">August, 2016</div>
                            <div class="description"></div>
                        </li>

                        <li class="degree">
                            <span class="name">Bachelor of Computer Engineering</span>
                            <span class="school_organization">Ho Chi Minh city University of Technology</span>
                            <div class="time">August, 2016</div>
                            <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum fugiat alias incidunt eos mollitia consequatur sit necessitatibus maxime molestiae aut suscipit, cumque vitae accusamus corrupti, aliquam error culpa? Sint, velit.</div>
                        </li>

                    </ul>
                </div>
                <!-- <hr> -->
                <div class="block">
                    <div class="label"><span></span><span>Certificates</span><span></span></div>
                    <ul>
                        <li class="degree">
                            <span class="name">Fresher Coding</span>
                            <span class="school_organization">Codelearn.io</span>
                            <div class="time">August, 2016</div>
                            <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum fugiat alias incidunt eos mollitia consequatur sit necessitatibus maxime molestiae aut suscipit, cumque vitae accusamus corrupti, aliquam error culpa? Sint, velit.</div>
                        </li>

                    </ul>

                </div>
                <!-- <hr> -->
                <div class="block">
                    <div class="label"><span></span><span>Hobbies</span><span></span></div>
                    <p>Hiking</p>
                </div>
                <!-- <hr> -->
                <div class="block">
                    <div class="label"><span></span><span>References</span><span></span></div>
                    <ul>
                        <li class="degree">
                            <span class="name">Mr. Khamarash</span>
                            <span class="school_organization">Codelearn.io</span>
                            <span class="school_organization">Team leader</span>
                            <div class="phone">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg> 0923444625
                            </div>
                            <div class="email">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                </svg> example@gmail.com
                            </div>
                        </li>

                    </ul>

                </div>
            </div>

            <div class="blank"></div>

        </div>

    </section>
    <?php include 'footer.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>