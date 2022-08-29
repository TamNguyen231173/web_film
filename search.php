<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

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
  <link rel="stylesheet" href="./assets/css/main.css" />
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
            <a class="navbar-brand" href="#pablo">Tadaki</a>
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
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  Liên hệ
                </a>
              </li>
              <?php
              if (isset($_SESSION['user_id'])) {
                if ($_SESSION['user_id'] == 1) {
                  echo "<li class='nav-item'> <a href='admin.php' class='nav-link'>Thêm phim</a> </li>";
                }
              }
              ?>
            </ul>
            <ul class="nav navbar-nav navbar-right" style="display: flex; align-items: center">
              <?php
              include 'form-search.php';
              ?>

              <li class="nav-item dropdown">
                <a class="nav-link" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                  <i class="now-ui-icons users_circle-08" style="font-size: 24px" aria-hidden="true"></i>
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
    </div>
    <!-- Content section -->
    <div class="container-fluid" style="background-color: #2c2c2c">
      <div class="container" style="padding-top: 100px">
        <?php
        include 'searchback.php';
        ?>
      </div>
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