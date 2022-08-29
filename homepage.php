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
            <a class="navbar-brand" href="homepage.php">Tadaki</a>
          </div>
          <div class="collapse navbar-collapse" id="example-navbar-primary" data-nav-image="./assets/storage/uploads/img/blurred-image-1.jpg">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item active">
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
							background-image: url('assets/storage/uploads/img/peaky_blinders_bg.jpg');
							filter: brightness(75%);
						"></div>
        <div class="content-center mt-4">
          <div class="container">
            <div class="row justify-content-space justify-content-between mb-4">
              <div class="btn-play-homepage col-md-4 d-flex align-items-lg-end">
                <a href="movie.php">
                  <div id="circle" style="position: relative">
                    <i class="now-ui-icons media-1_button-play" style="
													font-size: 38px;
													color: #fed530;
													position: absolute;
													top: 50%;
													left: 50%;
													transform: translate(
														-50%,
														-50%
													);
												" aria-hidden="true"></i>

                    <div class="loader">
                      <div class="loader">
                        <div class="loader">
                          <div class="loader"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="content-header-homepage col-md-4 text-left mt-5">
                <h1 class="title" style="letter-spacing: 4px;">Peaky Blinders</h1>
                <h5 class="description font-italic">
                  Một băng đảng khét tiếng xuất hiện ở
                  Birmingham, Anh Quốc năm 1919. Cầm đầu
                  băng là Tommy Shelby, tên trùm tội phạm
                  khét tiếng muốn nổi lên bằng mọi giá.
                </h5>
                <h7 class="font-weight-normal">
                  Thể loại : Kịch, Tội phạm
                </h7>
                <h7 class="font-weight-normal">
                  Thời lượng : 1hr
                </h7>
                <div class="stats stats-right justify-content-center">
                  <img src="./assets/storage/uploads/img/imdb.png" alt="" style="width: 27px" />
                  3 / 10
                  <img src="./assets/storage/uploads/img/tomato.png" alt="" style="
												width: 22px;
												margin-left: 12px;
											" />
                  90%
                </div>
                <div class="progress-container progress-danger mt-3">
                  <span class="progress-badge">
                    <i class="now-ui-icons ui-2_favourite-28" style="
													font-size: 18px;
													color: #fed530;
												"></i>
                  </span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="
													width: 93%;
													background-color: #fed530;
												">
                      <span class="progress-value" style="color: #fed530">93%</span>
                    </div>
                  </div>
                </div>
                <div class="btn-play-mobile col-sm-4 p-0" style="margin-top: 20px">
                  <button type="button" class="btn btn-warning btn-round btn-block" style="
													font-weight: 600;
													color: #000;
												">
                    Xem phim
                  </button>
                </div>
              </div>
            </div>
            <div class="trailer-container row">
              <div class="col-md-3 carousel">
                <div class="card-image">
                  <img class="img rounded" src="assets/storage/uploads/img/bg1.jpg" style="
												filter: brightness(75%);
												box-shadow: 0px 5px 25px 0px
													rgb(0 0 0 / 20%);
											" />
                </div>
                <div style="
											position: absolute;
											bottom: -18px;
											right: 20px;
										" ;>
                  <h4 class="font-weight-bold" style="font-size: 30px">
                    01
                  </h4>
                </div>
              </div>
              <div class="col-md-3 carousel">
                <div class="card-image">
                  <img class="img rounded" src="assets/storage/uploads/img/bg0.jpg" style="
												filter: brightness(75%);
												box-shadow: 0px 5px 25px 0px
													rgb(0 0 0 / 20%);
											" />
                </div>
                <div style="
											position: absolute;
											bottom: -18px;
											right: 20px;
										" ;>
                  <h4 class="font-weight-bold" style="font-size: 30px">
                    02
                  </h4>
                </div>
              </div>
              <div class="col-md-3 carousel">
                <div class="card-image">
                  <img class="img rounded" src="assets/storage/uploads/img/bg3.jpg" style="
												filter: brightness(75%);
												box-shadow: 0px 5px 25px 0px
													rgb(0 0 0 / 20%);
											" />
                </div>
                <div style="
											position: absolute;
											bottom: -18px;
											right: 20px;
										" ;>
                  <h4 class="font-weight-bold" style="font-size: 30px">
                    03
                  </h4>
                </div>
              </div>
              <div class="col-md-3 carousel">
                <div class="card-image">
                  <img class="img rounded" src="assets/storage/uploads/img/bg4.jpg" style="
												filter: brightness(75%);
												box-shadow: 0px 5px 25px 0px
													rgb(0 0 0 / 20%);
											" />
                </div>
                <div style="
											position: absolute;
											bottom: -18px;
											right: 20px;
										" ;>
                  <h4 class="font-weight-bold" style="font-size: 30px">
                    04
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Content section -->
    <div class="container-fluid" style="background-color: #2c2c2c">
      <div class="container" style="padding-top: 90px">
        <!-- Best Film section -->
        <div class="cards">
          <div class="progress-container progress-warning mb-4">
            <div class="title text-uppercase d-flex justify-content-between align-items-center" style="color: #fed530">
              <h3 class="m-0">
                <i class="now-ui-icons ui-2_like"></i> Phim
                hay
              </h3>
              <a href="movies.php" style="color: #fed530;">Xem thêm</a>
            </div>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-8">
              <div class="card card-background" style="
										background-image: url('assets/storage/uploads/img/joker_bg.jpg');
										height: 500px;
										filter: brightness(160%);
									">
                <div class="card-body">
                  <div class="card-title text-left" style="
												margin-top: 250px;
												color: #fed530;
												font-weight: 600;
												font-size: 38px;
												overflow: hidden;
												text-overflow: ellipsis;
												display: -webkit-box;
												-webkit-line-clamp: 1; /* number of lines to show */
												line-clamp: 2;
												-webkit-box-orient: vertical;
											">
                    Joker
                  </div>
                  <div class="card-footer d-flex justify-content-between align-content-center">
                    <div class="stats" style="
													font-size: 14px;
													margin-top: 4px;
												">
                      <span>
                        <i class="now-ui-icons tech_watch-time"></i>
                        90min
                      </span>
                      <span>
                        <i class="now-ui-icons users_single-02"></i>
                        2.4k
                      </span>
                    </div>
                    <div class="stats-link pull-right">
                      <div class="stats stats-right justify-content-center">
                        <img src="./assets/storage/uploads/img/imdb.png" alt="" style="width: 27px" />
                        3 / 10
                        <img src="./assets/storage/uploads/img/tomato.png" alt="" style="
															width: 22px;
															margin-left: 12px;
														" />
                        90%
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 p-0" style="margin-top: 20px">
                    <button type="button" class="btn btn-warning btn-round btn-block" style="
													font-weight: 600;
													color: #000;
												">
                      Xem phim
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-background" style="
										background-image: url('assets/storage/uploads/img/the_godfather_poster.jpg');
										height: 500px;
										filter: brightness(160%);
									">
                <div class="card-body">
                  <div class="card-title text-left" style="
												margin-top: 250px;
												color: #fed530;
												font-weight: 600;
												font-size: 38px;
												overflow: hidden;
												text-overflow: ellipsis;
												display: -webkit-box;
												-webkit-line-clamp: 1; /* number of lines to show */
												line-clamp: 2;
												-webkit-box-orient: vertical;
											">
                    The Godfather
                  </div>
                  <div class="stats d-flex justify-content-between align-items-center" style="
												font-size: 14px;
												margin-top: 15px;
											">
                    <span>
                      <i class="now-ui-icons tech_watch-time"></i>
                      90min
                    </span>
                    <span>
                      <i class="now-ui-icons users_single-02"></i>
                      2.4k
                    </span>
                    <span>
                      <img src="./assets/storage/uploads/img/imdb.png" alt="" style="width: 27px" />
                      3 / 10
                    </span>
                    <span>
                      <img src="./assets/storage/uploads/img/tomato.png" alt="" style="width: 22px" />
                      90%
                    </span>
                  </div>
                  <div class="col-sm-6 p-0" style="margin-top: 20px">
                    <button type="button" class="btn btn-warning btn-round btn-block" style="
													font-weight: 600;
													color: #000;
												">
                      Xem phim
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card card-background" style="
										background-image: url('assets/storage/uploads/img/inception_poster.jpg');
										height: 500px;
										filter: brightness(160%);
									">
                <div class="card-body">
                  <div class="card-title text-left" style="
												margin-top: 250px;
												color: #fed530;
												font-weight: 600;
												font-size: 38px;
												overflow: hidden;
												text-overflow: ellipsis;
												display: -webkit-box;
												-webkit-line-clamp: 1; /* number of lines to show */
												line-clamp: 2;
												-webkit-box-orient: vertical;
											">
                    Inception
                  </div>
                  <div class="stats d-flex justify-content-between align-items-center" style="
												font-size: 14px;
												margin-top: 15px;
											">
                    <span>
                      <i class="now-ui-icons tech_watch-time"></i>
                      90min
                    </span>
                    <span>
                      <i class="now-ui-icons users_single-02"></i>
                      2.4k
                    </span>
                    <span>
                      <img src="./assets/storage/uploads/img/imdb.png" alt="" style="width: 27px" />
                      3 / 10
                    </span>
                    <span>
                      <img src="./assets/storage/uploads/img/tomato.png" alt="" style="width: 22px" />
                      90%
                    </span>
                  </div>
                  <div class="col-sm-6 p-0" style="margin-top: 20px">
                    <button type="button" class="btn btn-warning btn-round btn-block" style="
													font-weight: 600;
													color: #000;
												">
                      Xem phim
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-background" style="
										background-image: url('assets/storage/uploads/img/the-big_short_poster.jpg');
										height: 500px;
										filter: brightness(160%);
									">
                <div class="card-body">
                  <div class="card-title text-left" style="
												margin-top: 250px;
												color: #fed530;
												font-weight: 600;
												font-size: 38px;
												overflow: hidden;
												text-overflow: ellipsis;
												display: -webkit-box;
												-webkit-line-clamp: 1; /* number of lines to show */
												line-clamp: 2;
												-webkit-box-orient: vertical;
											">
                    The Big Short
                  </div>
                  <div class="stats d-flex justify-content-between align-items-center" style="
												font-size: 14px;
												margin-top: 15px;
											">
                    <span>
                      <i class="now-ui-icons tech_watch-time"></i>
                      90min
                    </span>
                    <span>
                      <i class="now-ui-icons users_single-02"></i>
                      2.4k
                    </span>
                    <span>
                      <img src="./assets/storage/uploads/img/imdb.png" alt="" style="width: 27px" />
                      3 / 10
                    </span>
                    <span>
                      <img src="./assets/storage/uploads/img/tomato.png" alt="" style="width: 22px" />
                      90%
                    </span>
                  </div>
                  <div class="col-sm-6 p-0" style="margin-top: 20px">
                    <button type="button" class="btn btn-warning btn-round btn-block" style="
													font-weight: 600;
													color: #000;
												">
                      Xem phim
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-background" style="
										background-image: url('assets/storage/uploads/img/la _la_land_poster.jpg');
										height: 500px;
										filter: brightness(160%);
									">
                <div class="card-body">
                  <div class="card-title text-left" style="
												margin-top: 250px;
												color: #fed530;
												font-weight: 600;
												font-size: 38px;
												overflow: hidden;
												text-overflow: ellipsis;
												display: -webkit-box;
												-webkit-line-clamp: 1; /* number of lines to show */
												line-clamp: 2;
												-webkit-box-orient: vertical;
											">
                    La La Land
                  </div>
                  <div class="stats d-flex justify-content-between align-items-center" style="
												font-size: 14px;
												margin-top: 15px;
											">
                    <span>
                      <i class="now-ui-icons tech_watch-time"></i>
                      90min
                    </span>
                    <span>
                      <i class="now-ui-icons users_single-02"></i>
                      2.4k
                    </span>
                    <span>
                      <img src="./assets/storage/uploads/img/imdb.png" alt="" style="width: 27px" />
                      3 / 10
                    </span>
                    <span>
                      <img src="./assets/storage/uploads/img/tomato.png" alt="" style="width: 22px" />
                      90%
                    </span>
                  </div>
                  <div class="col-sm-6 p-0" style="margin-top: 20px">
                    <button type="button" class="btn btn-warning btn-round btn-block" style="
													font-weight: 600;
													color: #000;
												">
                      Xem phim
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Animation  Film section -->
        <div class="cards">
          <div class="progress-container progress-warning mb-4">
            <div class="title text-uppercase d-flex justify-content-between align-items-center" style="color: #fed530">
              <h3 class="m-0">
                <i class="now-ui-icons objects_spaceship"></i>
                Hoạt hình
              </h3>
              <a href="movies.php" style="color: #fed530;">Xem thêm</a>
            </div>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-8">
              <div class="card card-background" style="
										background-image: url('assets/storage/uploads/img/coco_bg.jpg');
										height: 500px;
										filter: brightness(160%);
									">
                <div class="card-body">
                  <div class="card-title text-left" style="
												margin-top: 250px;
												color: #fed530;
												font-weight: 600;
												font-size: 38px;
											">
                    Coco
                  </div>
                  <div class="card-footer d-flex justify-content-between align-content-center">
                    <div class="stats" style="
													font-size: 14px;
													margin-top: 4px;
												">
                      <span>
                        <i class="now-ui-icons tech_watch-time"></i>
                        90min
                      </span>
                      <span>
                        <i class="now-ui-icons users_single-02"></i>
                        2.4k
                      </span>
                    </div>
                    <div class="stats-link pull-right">
                      <div class="stats stats-right justify-content-center">
                        <img src="./assets/storage/uploads/img/imdb.png" alt="" style="width: 27px" />
                        3 / 10
                        <img src="./assets/storage/uploads/img/tomato.png" alt="" style="
															width: 22px;
															margin-left: 12px;
														" />
                        90%
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 p-0" style="margin-top: 20px">
                    <button type="button" class="btn btn-warning btn-round btn-block" style="
													font-weight: 600;
													color: #000;
												">
                      Xem phim
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-background" style="
										background-image: url('assets/storage/uploads/img/soul_poster.jpg');
										height: 500px;
										filter: brightness(160%);
									">
                <div class="card-body">
                  <div class="card-title text-left" style="
												margin-top: 250px;
												color: #fed530;
												font-weight: 600;
												font-size: 38px;
											">
                    Soul
                  </div>
                  <div class="stats d-flex justify-content-between align-items-center" style="
												font-size: 14px;
												margin-top: 15px;
											">
                    <span>
                      <i class="now-ui-icons tech_watch-time"></i>
                      90min
                    </span>
                    <span>
                      <i class="now-ui-icons users_single-02"></i>
                      2.4k
                    </span>
                    <span>
                      <img src="./assets/storage/uploads/img/imdb.png" alt="" style="width: 27px" />
                      3 / 10
                    </span>
                    <span>
                      <img src="./assets/storage/uploads/img/tomato.png" alt="" style="width: 22px" />
                      90%
                    </span>
                  </div>
                  <div class="col-sm-6 p-0" style="margin-top: 20px">
                    <button type="button" class="btn btn-warning btn-round btn-block" style="
													font-weight: 600;
													color: #000;
												">
                      Xem phim
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card card-background" style="
										background-image: url('assets/storage/uploads/img/luca_poster.jpg');
										height: 500px;
										filter: brightness(160%);
									">
                <div class="card-body">
                  <div class="card-title text-left" style="
												margin-top: 250px;
												color: #fed530;
												font-weight: 600;
												font-size: 38px;
											">
                    Luca
                  </div>
                  <div class="stats d-flex justify-content-between align-items-center" style="
												font-size: 14px;
												margin-top: 15px;
											">
                    <span>
                      <i class="now-ui-icons tech_watch-time"></i>
                      90min
                    </span>
                    <span>
                      <i class="now-ui-icons users_single-02"></i>
                      2.4k
                    </span>
                    <span>
                      <img src="./assets/storage/uploads/img/imdb.png" alt="" style="width: 27px" />
                      3 / 10
                    </span>
                    <span>
                      <img src="./assets/storage/uploads/img/tomato.png" alt="" style="width: 22px" />
                      90%
                    </span>
                  </div>
                  <div class="col-sm-6 p-0" style="margin-top: 20px">
                    <button type="button" class="btn btn-warning btn-round btn-block" style="
													font-weight: 600;
													color: #000;
												">
                      Xem phim
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-background" style="
										background-image: url('assets/storage/uploads/img/onward_poster.jpg');
										height: 500px;
										filter: brightness(160%);
									">
                <div class="card-body">
                  <div class="card-title text-left" style="
												margin-top: 250px;
												color: #fed530;
												font-weight: 600;
												font-size: 38px;
											">
                    Onward
                  </div>
                  <div class="stats d-flex justify-content-between align-items-center" style="
												font-size: 14px;
												margin-top: 15px;
											">
                    <span>
                      <i class="now-ui-icons tech_watch-time"></i>
                      90min
                    </span>
                    <span>
                      <i class="now-ui-icons users_single-02"></i>
                      2.4k
                    </span>
                    <span>
                      <img src="./assets/storage/uploads/img/imdb.png" alt="" style="width: 27px" />
                      3 / 10
                    </span>
                    <span>
                      <img src="./assets/storage/uploads/img/tomato.png" alt="" style="width: 22px" />
                      90%
                    </span>
                  </div>
                  <div class="col-sm-6 p-0" style="margin-top: 20px">
                    <button type="button" class="btn btn-warning btn-round btn-block" style="
													font-weight: 600;
													color: #000;
												">
                      Xem phim
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-background" style="
										background-image: url('assets/storage/uploads/img/turning_red_poster.jpg');
										height: 500px;
										filter: brightness(160%);
									">
                <div class="card-body">
                  <div class="card-title text-left" style="
												margin-top: 250px;
												color: #fed530;
												font-weight: 600;
												font-size: 38px;
											">
                    Turning red
                  </div>
                  <div class="stats d-flex justify-content-between align-items-center" style="
												font-size: 14px;
												margin-top: 15px;
											">
                    <span>
                      <i class="now-ui-icons tech_watch-time"></i>
                      90min
                    </span>
                    <span>
                      <i class="now-ui-icons users_single-02"></i>
                      2.4k
                    </span>
                    <span>
                      <img src="./assets/storage/uploads/img/imdb.png" alt="" style="width: 27px" />
                      3 / 10
                    </span>
                    <span>
                      <img src="./assets/storage/uploads/img/tomato.png" alt="" style="width: 22px" />
                      90%
                    </span>
                  </div>
                  <div class="col-sm-6 p-0" style="margin-top: 20px">
                    <button type="button" class="btn btn-warning btn-round btn-block" style="
													font-weight: 600;
													color: #000;
												">
                      Xem phim
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- TV Show section -->
        <div class="cards">
          <div class="progress-container progress-warning mb-4">
            <div class="title text-uppercase d-flex justify-content-between align-items-center" style="color: #fed530">
              <h3 class="m-0">
                <i class="now-ui-icons travel_istanbul"></i>
                Phim bộ
              </h3>
              <a href="movies.php" style="color: #fed530;">Xem thêm</a>
            </div>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-8">
              <div class="card card-background" style="
										background-image: url('assets/storage/uploads/img/bg15.jpg');
										height: 500px;
										filter: brightness(160%);
									">
                <div class="card-body">
                  <div class="card-title text-left" style="
												margin-top: 250px;
												color: #fed530;
												font-weight: 600;
												font-size: 38px;
												overflow: hidden;
												text-overflow: ellipsis;
												display: -webkit-box;
												-webkit-line-clamp: 1; /* number of lines to show */
												line-clamp: 2;
												-webkit-box-orient: vertical;
											">
                    Breaking Bad
                  </div>
                  <div class="card-footer d-flex justify-content-between align-content-center">
                    <div class="stats" style="
													font-size: 14px;
													margin-top: 4px;
												">
                      <span>
                        <i class="now-ui-icons tech_watch-time"></i>
                        90min
                      </span>
                      <span>
                        <i class="now-ui-icons users_single-02"></i>
                        2.4k
                      </span>
                    </div>
                    <div class="stats-link pull-right">
                      <div class="stats stats-right justify-content-center">
                        <img src="./assets/storage/uploads/img/imdb.png" alt="" style="width: 27px" />
                        3 / 10
                        <img src="./assets/storage/uploads/img/tomato.png" alt="" style="
															width: 22px;
															margin-left: 12px;
														" />
                        90%
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 p-0" style="margin-top: 20px">
                    <button type="button" class="btn btn-warning btn-round btn-block" style="
													font-weight: 600;
													color: #000;
												">
                      Xem phim
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-background" style="
										background-image: url('assets/storage/uploads/img/umbrella_academy_poster.jpg');
										height: 500px;
										filter: brightness(160%);
									">
                <div class="card-body">
                  <div class="card-title text-left" style="
												margin-top: 250px;
												color: #fed530;
												font-weight: 600;
												font-size: 38px;
												overflow: hidden;
												text-overflow: ellipsis;
												display: -webkit-box;
												-webkit-line-clamp: 1; /* number of lines to show */
												line-clamp: 2;
												-webkit-box-orient: vertical;
											">
                    Umbrella Academy
                  </div>
                  <div class="stats d-flex justify-content-between align-items-center" style="
												font-size: 14px;
												margin-top: 15px;
											">
                    <span>
                      <i class="now-ui-icons tech_watch-time"></i>
                      90min
                    </span>
                    <span>
                      <i class="now-ui-icons users_single-02"></i>
                      2.4k
                    </span>
                    <span>
                      <img src="./assets/storage/uploads/img/imdb.png" alt="" style="width: 27px" />
                      3 / 10
                    </span>
                    <span>
                      <img src="./assets/storage/uploads/img/tomato.png" alt="" style="width: 22px" />
                      90%
                    </span>
                  </div>
                  <div class="col-sm-6 p-0" style="margin-top: 20px">
                    <button type="button" class="btn btn-warning btn-round btn-block" style="
													font-weight: 600;
													color: #000;
												">
                      Xem phim
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card card-background" style="
										background-image: url('assets/storage/uploads/img/bg17.jpg');
										height: 500px;
										filter: brightness(160%);
									">
                <div class="card-body">
                  <div class="card-title text-left" style="
												margin-top: 250px;
												color: #fed530;
												font-weight: 600;
												font-size: 38px;
												overflow: hidden;
												text-overflow: ellipsis;
												display: -webkit-box;
												-webkit-line-clamp: 1; /* number of lines to show */
												line-clamp: 2;
												-webkit-box-orient: vertical;
											">
                    Friends
                  </div>
                  <div class="stats d-flex justify-content-between align-items-center" style="
												font-size: 14px;
												margin-top: 15px;
											">
                    <span>
                      <i class="now-ui-icons tech_watch-time"></i>
                      90min
                    </span>
                    <span>
                      <i class="now-ui-icons users_single-02"></i>
                      2.4k
                    </span>
                    <span>
                      <img src="./assets/storage/uploads/img/imdb.png" alt="" style="width: 27px" />
                      3 / 10
                    </span>
                    <span>
                      <img src="./assets/storage/uploads/img/tomato.png" alt="" style="width: 22px" />
                      90%
                    </span>
                  </div>
                  <div class="col-sm-6 p-0" style="margin-top: 20px">
                    <button type="button" class="btn btn-warning btn-round btn-block" style="
													font-weight: 600;
													color: #000;
												">
                      Xem phim
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-background" style="
										background-image: url('assets/storage/uploads/img/bg18.jpg');
										height: 500px;
										filter: brightness(160%);
									">
                <div class="card-body">
                  <div class="card-title text-left" style="
												margin-top: 250px;
												color: #fed530;
												font-weight: 600;
												font-size: 38px;
												overflow: hidden;
												text-overflow: ellipsis;
												display: -webkit-box;
												-webkit-line-clamp: 1; /* number of lines to show */
												line-clamp: 2;
												-webkit-box-orient: vertical;
											">
                    Stranger Things
                  </div>
                  <div class="stats d-flex justify-content-between align-items-center" style="
												font-size: 14px;
												margin-top: 15px;
											">
                    <span>
                      <i class="now-ui-icons tech_watch-time"></i>
                      90min
                    </span>
                    <span>
                      <i class="now-ui-icons users_single-02"></i>
                      2.4k
                    </span>
                    <span>
                      <img src="./assets/storage/uploads/img/imdb.png" alt="" style="width: 27px" />
                      3 / 10
                    </span>
                    <span>
                      <img src="./assets/storage/uploads/img/tomato.png" alt="" style="width: 22px" />
                      90%
                    </span>
                  </div>
                  <div class="col-sm-6 p-0" style="margin-top: 20px">
                    <button type="button" class="btn btn-warning btn-round btn-block" style="
													font-weight: 600;
													color: #000;
												">
                      Xem phim
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-background" style="
										background-image: url('assets/storage/uploads/img/bg19.jpg');
										height: 500px;
										filter: brightness(160%);
									">
                <div class="card-body">
                  <div class="card-title text-left" style="
												margin-top: 250px;
												color: #fed530;
												font-weight: 600;
												font-size: 38px;
												margin-top: 250px;
												color: #fed530;
												font-weight: 600;
												font-size: 38px;
												overflow: hidden;
												text-overflow: ellipsis;
												display: -webkit-box;
												-webkit-line-clamp: 1;
												line-clamp: 2;
												-webkit-box-orient: vertical;
											">
                    The Witcher
                  </div>
                  <div class="stats d-flex justify-content-between align-items-center" style="
												font-size: 14px;
												margin-top: 15px;
											">
                    <span>
                      <i class="now-ui-icons tech_watch-time"></i>
                      90min
                    </span>
                    <span>
                      <i class="now-ui-icons users_single-02"></i>
                      2.4k
                    </span>
                    <span>
                      <img src="./assets/storage/uploads/img/imdb.png" alt="" style="width: 27px" />
                      3 / 10
                    </span>
                    <span>
                      <img src="./assets/storage/uploads/img/tomato.png" alt="" style="width: 22px" />
                      90%
                    </span>
                  </div>
                  <div class="col-sm-6 p-0" style="margin-top: 20px">
                    <button type="button" class="btn btn-warning btn-round btn-block" style="
													font-weight: 600;
													color: #000;
												">
                      Xem phim
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid" style="background-color: #3d3d3d">
      <div class="container" style="padding-top: 29px">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-background" style="
									background-image: url('assets/storage/uploads/img/bg20.jpg');
									height: 500px;
									filter: brightness(160%);
								">
              <div class="card-body carousel">
                <div class="card-title text-left" style="
											margin-top: 250px;
											color: #fed530;
											font-weight: 600;
											font-size: 38px;
											overflow: hidden;
											text-overflow: ellipsis;
											display: -webkit-box;
											-webkit-line-clamp: 1; /* number of lines to show */
											line-clamp: 2;
											-webkit-box-orient: vertical;
										">
                  This is us
                </div>
                <div class="card-footer text-left">
                  <div class="stats" style="
												font-size: 14px;
												margin-top: 4px;
											">
                    <span>
                      This is us là câu chuyện về một
                      nhóm người có cùng chung một
                      ngày sinh nhật nhưng số phận lại
                      không hề giống nhau chút nào.
                      Nội dung đơn giản nhưng chân
                      thực và quyến rũ đến bất ngờ.
                    </span>
                  </div>
                </div>
                <a href="#" class="round-button"><i class="fa fa-play fa-2x" style="color: #fed530"></i></a>
              </div>
            </div>
          </div>
          <div class="card-episode col-md-4" style="height: 90px">
            <div class="card-container">
              <div class="card card-fashion p-3 d-flex justify-content-between">
                <h7 class="m-0">Episode 1</h7>
                <h6 class="m-0" style="letter-spacing: 2px">
                  Pilot
                </h6>
                <p class="p-0 m-0 font-italic font-weight-normal" style="font-size: 10px">
                  Lorem ipsum dolor sit amet, consec tetur
                  adipis cing elit
                </p>
                <span style="font-size: 12px">
                  <i class="now-ui-icons tech_watch-time"></i>
                  1hr 24mins
                </span>
                <span style="font-size: 12px">
                  <i class="now-ui-icons ui-1_calendar-60"></i>
                  1hr 24mins
                </span>
              </div>
              <div class="card card-fashion card-background" style="
										background-image: url('assets/storage/uploads/img/bg21.jpg');
										filter: brightness(180%);
										position: relative;
									">
                <a href="#" class="round-button"><i class="fa fa-play fa-2x" style="color: #fed530"></i></a>
              </div>
            </div>
          </div>
          <div class="card-episode col-md-4" style="height: 90px">
            <div class="card-container">
              <div class="card card-fashion p-3 d-flex justify-content-between">
                <h7 class="m-0">Episode 1</h7>
                <h6 class="m-0" style="letter-spacing: 2px">
                  The Big Three
                </h6>
                <p class="p-0 m-0 font-italic font-weight-normal" style="font-size: 10px">
                  Lorem ipsum dolor sit amet, consec tetur
                  adipis cing elit
                </p>
                <span style="font-size: 12px">
                  <i class="now-ui-icons tech_watch-time"></i>
                  June 2, 2021
                </span>
                <span style="font-size: 12px">
                  <i class="now-ui-icons ui-1_calendar-60"></i>
                  1hr 24mins
                </span>
              </div>
              <div class="card card-fashion card-background" style="
										background-image: url('assets/storage/uploads/img/bg22.jpg');
										filter: brightness(180%);
										position: relative;
									">
                <a href="#" class="round-button"><i class="fa fa-play fa-2x" style="color: #fed530"></i></a>
              </div>
            </div>
          </div>
          <div class="card-episode col-md-4" style="height: 90px">
            <div class="card-container">
              <div class="card card-fashion p-3 d-flex justify-content-between">
                <h7 class="m-0">Episode 3</h7>
                <h6 class="m-0" style="letter-spacing: 2px">
                  Kyle
                </h6>
                <p class="p-0 m-0 font-italic font-weight-normal" style="font-size: 10px">
                  Lorem ipsum dolor sit amet, consec tetur
                  adipis cing elit
                </p>
                <span style="font-size: 12px">
                  <i class="now-ui-icons tech_watch-time"></i>
                  1hr 24mins
                </span>
                <span style="font-size: 12px">
                  <i class="now-ui-icons ui-1_calendar-60"></i>
                  June 2, 2021
                </span>
              </div>
              <div class="card card-fashion card-background" style="
										background-image: url('assets/storage/uploads/img/bg23.jpg');
										filter: brightness(180%);
										position: relative;
									">
                <a href="#" class="round-button"><i class="fa fa-play fa-2x" style="color: #fed530"></i></a>
              </div>
            </div>
          </div>
        </div>
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