<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tadaki</title>

    <link rel="apple-touch-icon" sizes="76x76" href="./assets/storage/uploads/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="./assets/storage/uploads/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Sections - Now UI Kit Pro by Creative Tim</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport" />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <link href="./assets/css/main.css" rel="stylesheet" />
    <link href="./assets/validator.js" rel="stylesheet" />
</head>

<body>
    <div id="app">
        <!-- Header section -->
        <div id="header" class="header-2">
            <nav class="navbar navbar-expand-lg navbar-transparent bg-primary navbar-absolute">
                <div class="container">
                    <div class="navbar-translate">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-navbar-primary" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                        <a class="navbar-brand" href="homepage.php">Tadaki</a>
                    </div>
                    <div class="collapse navbar-collapse" id="example-navbar-primary" data-nav-image="./assets/storage/uploads/img/blurred-image-1.jpg">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="homepage.php">
                                    Trang chủ
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <p>Thể loại</p>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Hành động</a>
                                    <a class="dropdown-item" href="#">Chính kịch</a>
                                    <a class="dropdown-item" href="#">Kinh dị</a>
                                    <a class="dropdown-item" href="#">Hoạt hình</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    Phim truyền hình
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    Videos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo"> FAQ </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="contact.php">
                                    Liên hệ
                                </a>
                            </li>
                            <?php
                            if (isset($_SESSION['user_id'])) {
                                if ($_SESSION['user_id'] == 1) {
                                    echo "<li class='nav-item'> <a href='admin.php' class='nav-link'>Thêm phim</a> </li>";
                                }
                            } ?>
                        </ul>
                        <ul class="nav navbar-nav navbar-right" style="display: flex; align-items: center">
                            <?php
                            include 'form-search.php';
                            ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-expanded="false" style="cursor: pointer;">
                                    <i class="now-ui-icons users_circle-08" style="font-size: 22px; " aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <?php
                                    echo " 
                  <a href='profile.php' class='dropdown-item'>Account</a>
                  <div class='divider'></div>
                  <a href='logout.php' class='dropdown-item'>Logout</a>";
                                    ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="page-header header-filter">
                <div class="page-header-image" style="
                            background-image: url('assets/storage/uploads/img/contact_bg.jpg');
                            filter: brightness(75%);
                        "></div>
                <div class="content-center mt-4">
                    <div class="container">
                        <div class="card card-contact card-raised" style="overflow: hidden; background-color: rgba(255, 255, 255, 0.3);">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role=" form" id="contact-form" method="post">
                                        <div class="card-header text-center text-black">
                                            <h4 class="card-title text-white">Liên hệ với chúng tôi</h4>
                                        </div>
                                        <div class="card-body">
                                            <span class="progress-badge pull-left mb-2" style="font-size: 12px;">Họ tên</span>
                                            <div class=" input-group mb-4">
                                                <span class="input-group-addon">
                                                    <i class="now-ui-icons users_circle-08"></i>
                                                </span>
                                                <input type="text" class="form-control form-control-contact text-white" placeholder="Họ tên...">
                                            </div>
                                            <span rules="required | email" class="progress-badge pull-left mb-2" style="font-size: 12px;">Email</span>
                                            <div class="input-group mb-4">
                                                <span class="input-group-addon">
                                                    <i class="now-ui-icons ui-1_email-85"></i>
                                                </span>
                                                <input type="email" class="form-control form-control-contact text-white" placeholder="Email...">
                                            </div>
                                            <div class="form-group mb-4">
                                                <span class="progress-badge pull-left mb-2" style="font-size: 12px;">Thông điệp</span>
                                                <textarea class="form-control form-control-contact text-white" name="name" rows="4" cols="80" placeholder="Bạn có thể viết ở đây..."></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-warning btn-round mb-0">Gửi</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122445.89064279904!2d107.50707190515467!3d16.45354346082278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a115e1a7935f%3A0xbf3b50af70b5c7b7!2zVHAuIEh14bq_LCBUaOG7q2EgVGhpw6puIEh14bq_LCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1659750268450!5m2!1svi!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="canvas-container" style="height: 200px; overflow: hidden; margin-bottom: -150px;">
            <?php
            include 'canvas.html';
            ?>
        </div>
        <?php
        include 'footer.php';
        ?>
    </div>
    <?php
    include 'src_js.php';
    ?>
</body>

</html>