<?php
session_start();
if (isset($_POST['submit'])) {

  $title = $_POST['submit'];

  include 'dbh.php';
  $im = "SELECT * FROM movies WHERE name = '$title'";

  $records = mysqli_query($conn, $im);

  echo '<!DOCTYPE html>
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
                <a class="nav-link" href="contact.php">
                  Liên hệ
                </a>
              </li>';
  if (isset($_SESSION['user_id'])) {
    if ($_SESSION['user_id'] == 1) {
      echo "<li class='nav-item'> <a href='admin.php' class='nav-link'>Thêm phim</a> </li>";
    }
  }
  echo '</ul>
            <ul class="nav navbar-nav navbar-right" style="display: flex; align-items: center">
              <li class="nav-item">
                <div class="col-sm-6 col-lg-12">
                  <div class="input-group" style="
                        height: 30px;
                        margin-bottom: 0;
                      ">
                    <input type="text" placeholder="Seach..." class="form-control form-control-success" />
                    <span class="input-group-addon" style="padding-left: 12px">
                      <i class="now-ui-icons ui-1_zoom-bold"></i>
                    </span>
                  </div>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                  <i class="now-ui-icons users_circle-08" style="font-size: 24px" aria-hidden="true"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">';

  echo " 
                    <a href='profile.php' class='dropdown-item'>Account</a>
                    <div class='divider'></div>
                    <a href='logout.php' class='dropdown-item'>Logout</a>";
  echo
  '</div>
              </li>
            </ul>
          </div>
        </div>
      </nav>';
  while ($result = mysqli_fetch_assoc($records)) {
    $mname = $result['name'];
    $movieid = $result['movie_id'];
    $current = $result['viewers'];
    $genre_id = $result['genre_id'];
    $newcount = $current + 1;
    $newsql = "UPDATE movies SET viewers = '$newcount' WHERE name='$mname' ";
    $updatecount = mysqli_query($conn, $newsql);

    $genre_sql = "SELECT genre_name FROM genres WHERE genre_id = '$genre_id'";
    $genre_query = mysqli_query($conn, $genre_sql);
    $genre_name = mysqli_fetch_assoc($genre_query);

    echo '<div class="page-header header-filter">
        <div class="page-header-image" style="
             background-image: url(';
    echo "'assets/storage/uploads/img/" . $result['imgpath'] . "'";
    echo ');
              background-position: center;
              background-size: cover;
              filter: brightness(75%);
            "></div>
            <div class="container">
              <div class="row">
                <div class="col-md-10 ml-auto mr-auto carousel">
                  <div
                    class="row"
                    style="position: absolute; top: 180px"
                  >
                    <div class="poster-container col-md-4">
                      <img
                        src="assets/storage/uploads/img/' . $result['poster'] . '"
                        class="rounded img-raised"
                        style="
                          height: 400px;
                          width: 100%;
                          object-fit: cover;
                        "
                      />
                    </div>
                    <div
                      class="content-header-movie col-md-7 d-flex justify-content-between flex-column"
                    >
                      <h6
                        class="category m-0"
                        style="color: #fed530"
                      >
                        ' . $result['rdate'] . '
                      </h6>
                      <h3 class="card-title m-0">
                        <a
                          href="#pablo"
                          style="color: #fed530"
                          >' . $result['name'] . '</a
                        >
                      </h3>
                      <h5
                        class="description m-0"
                        style="font-weight: 500"
                      >
                        ' . $genre_name['genre_name'] . '
                      </h5>
                      <p
                        class="description font-italic m-0"
                        style="
                          overflow: hidden;
                          text-overflow: ellipsis;
                          display: -webkit-box;
                          -webkit-line-clamp: 4; /* number of lines to show */
                          line-clamp: 2;
                          -webkit-box-orient: vertical;
                        "
                      >
                        ' . $result['description'] . '
                        <a
                          href="#pablo"
                          class="font-weight-normal"
                          style="color: #fed530"
                        >
                          Read More
                        </a>
                      </p>
                      <div style="display: flex; justify-content: space-between; align-items: center; width: 150px;">
                        <h7 class="font-weight-normal m-0">
                        <span class="progress-badge">
                          <i
                            class="now-ui-icons tech_watch-time"
                            style="
                              font-size: 14px;
                              color: #fed530;
                              margin-right: 4px;
                            "
                            ></i>
                          </span>
                          ' . $result['runtime'] . 'mins
                        </h7>
                        <h7 class="font-weight-normal m-0">
                          <span class="progress-badge">
                            <i
                              class="now-ui-icons users_single-02"
                              style="
                                font-size: 14px;
                                color: #fed530;
                                margin-right: 4px;
                              "
                            ></i>
                          </span>
                          ' . $result['viewers'] . '
                        </h7>
                      </div>
                      <div
                        class="progress-container progress-danger m-0"
                      >
                        <span class="progress-badge">
                          <i
                            class="now-ui-icons ui-2_favourite-28"
                            style="
                              font-size: 18px;
                              color: #fed530;
                            "
                          ></i>
                        </span>
                        <div class="progress">
                          <div
                            class="progress-bar"
                            role="progressbar"
                            aria-valuenow="93"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            style="
                              width: 93%;
                              background-color: #fed530;
                            "
                          >
                            <span
                              class="progress-value"
                              style="color: #fed530"
                              >93%</span
                            >
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                        <form action="watch.php" method="POST">
                          <button 
                              style=" width: 100%; background-color: #fed530; color: #000; font-weight: 500;"
                              class="btn btn-round btn-lg"
                              type="submit"
                              name="submit"
                              value="' . ucwords($result['name']) . '"
                            >
                              <i class="now-ui-icons media-1_button-play"
                                style="margin-right: 4px;"
                              ></i>
                              Xem phim
                            </button>
                        </form>
                        </div>
                        <div class="col-md-6">
                          <a
                            style="width: 100%"
                            href=""
                            class="btn btn-simple btn-round btn-lg"
                            target="_blank"
                            ><i
                              class="now-ui-icons ui-1_simple-add"
                              style="
                                margin-right: 4px;
                              "
                            ></i
                            >Xem sau</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
    </div>

    <!-- Content section -->
    <div class="container-fluid" style="background-color: #2c2c2c">
      <div class="container" style="padding-top: 20px">
        <!-- Casts section -->
        <div class="casts">
          <div class="row justify-content-center">
            <div class="col-12">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                </ol>
                <div role="listbox" style="overflow: hidden;">
                  <div class="carousel-item active">
                    <div class="col-sm-2">
                      <div class="card card-profile card-plain" style="
                            background-color: transparent;
                          ">
                        <div class="card-avatar">
                          <a href="#pablo">
                            <img class="img img-raised" src="assets/storage/uploads/img/cast1.jpg" style="
                                  width: 200px;
                                  height: 130px;
                                  object-fit: cover;
                                " />
                          </a>
                          <p style="color: #fff">
                            Cillian Murphy
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="card card-profile card-plain" style="
                            background-color: transparent;
                          ">
                        <div class="card-avatar">
                          <a href="#pablo">
                            <img class="img img-raised" src="assets/storage/uploads/img/cast2.jpg" style="
                                  width: 200px;
                                  height: 130px;
                                  object-fit: cover;
                                " />
                          </a>
                          <p style="color: #fff">
                            Paul Anderson
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="card card-profile card-plain" style="
                            background-color: transparent;
                          ">
                        <div class="card-avatar">
                          <a href="#pablo">
                            <img class="img img-raised" src="assets/storage/uploads/img/cast3.jpg" style="
                                  width: 200px;
                                  height: 130px;
                                  object-fit: cover;
                                " />
                          </a>
                          <p style="color: #fff">
                            Helen McCrory
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="card card-profile card-plain" style="
                            background-color: transparent;
                          ">
                        <div class="card-avatar">
                          <a href="#pablo">
                            <img class="img img-raised" src="assets/storage/uploads/img/cast4.jpg" style="
                                  width: 200px;
                                  height: 130px;
                                  object-fit: cover;
                                " />
                          </a>
                          <p style="color: #fff">
                            Steven Knight
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="card card-profile card-plain" style="
                            background-color: transparent;
                          ">
                        <div class="card-avatar">
                          <a href="#pablo">
                            <img class="img img-raised" src="assets/storage/uploads/img/cast5.jpg" style="
                                  width: 200px;
                                  height: 130px;
                                  object-fit: cover;
                                " />
                          </a>
                          <p style="color: #fff">
                            Tom Hardy
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="col-sm-2">
                      <div class="card card-profile card-plain" style="
                            background-color: transparent;
                          ">
                        <div class="card-avatar">
                          <a href="#pablo">
                            <img class="img img-raised" src="assets/storage/uploads/img/cast6.jpg" style="
                                  width: 200px;
                                  height: 130px;
                                  object-fit: cover;
                                " />
                          </a>
                          <p style="color: #fff">
                            Finn Cole
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="card card-profile card-plain" style="
                            background-color: transparent;
                          ">
                        <div class="card-avatar">
                          <a href="#pablo">
                            <img class="img img-raised" src="assets/storage/uploads/img/cast7.jpg" style="
                                  width: 200px;
                                  height: 130px;
                                  object-fit: cover;
                                " />
                          </a>
                          <p style="color: #fff">
                            Natasha O"Keeffe
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="card card-profile card-plain" style="
                            background-color: transparent;
                          ">
                        <div class="card-avatar">
                          <a href="#pablo">
                            <img class="img img-raised" src="assets/storage/uploads/img/cast8.jpg" style="
                                  width: 200px;
                                  height: 130px;
                                  object-fit: cover;
                                " />
                          </a>
                          <p style="color: #fff">
                            Joe Cole
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="card card-profile card-plain" style="
                            background-color: transparent;
                          ">
                        <div class="card-avatar">
                          <a href="#pablo">
                            <img class="img img-raised" src="assets/storage/uploads/img/cast9.jpg" style="
                                  width: 200px;
                                  height: 130px;
                                  object-fit: cover;
                                " />
                          </a>
                          <p style="color: #fff">
                            Anya Taylor-Joy
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="card card-profile card-plain" style="
                            background-color: transparent;
                          ">
                        <div class="card-avatar">
                          <a href="#pablo">
                            <img class="img img-raised" src="assets/storage/uploads/img/cast10.jpg" style="
                                  width: 200px;
                                  height: 130px;
                                  object-fit: cover;
                                " />
                          </a>
                          <p style="color: #fff">
                            Sophie Rundle
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="col-sm-2">
                      <div class="card card-profile card-plain" style="
                            background-color: transparent;
                          ">
                        <div class="card-avatar">
                          <a href="#pablo">
                            <img class="img img-raised" src="assets/storage/uploads/img/cast1.jpg" style="
                                  width: 200px;
                                  height: 130px;
                                  object-fit: cover;
                                " />
                          </a>
                          <p style="color: #fff">
                            Cillian Murphy
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="card card-profile card-plain" style="
                            background-color: transparent;
                          ">
                        <div class="card-avatar">
                          <a href="#pablo">
                            <img class="img img-raised" src="assets/storage/uploads/img/cast1.jpg" style="
                                  width: 200px;
                                  height: 130px;
                                  object-fit: cover;
                                " />
                          </a>
                          <p style="color: #fff">
                            Cillian Murphy
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="card card-profile card-plain" style="
                            background-color: transparent;
                          ">
                        <div class="card-avatar">
                          <a href="#pablo">
                            <img class="img img-raised" src="assets/storage/uploads/img/cast1.jpg" style="
                                  width: 200px;
                                  height: 130px;
                                  object-fit: cover;
                                " />
                          </a>
                          <p style="color: #fff">
                            Cillian Murphy
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="card card-profile card-plain" style="
                            background-color: transparent;
                          ">
                        <div class="card-avatar">
                          <a href="#pablo">
                            <img class="img img-raised" src="assets/storage/uploads/img/cast1.jpg" style="
                                  width: 200px;
                                  height: 130px;
                                  object-fit: cover;
                                " />
                          </a>
                          <p style="color: #fff">
                            Cillian Murphy
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="card card-profile card-plain" style="
                            background-color: transparent;
                          ">
                        <div class="card-avatar">
                          <a href="#pablo">
                            <img class="img img-raised" src="assets/storage/uploads/img/cast1.jpg" style="
                                  width: 200px;
                                  height: 130px;
                                  object-fit: cover;
                                " />
                          </a>
                          <p style="color: #fff">
                            Cillian Murphy
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="width: 0">
                  <i class="now-ui-icons arrows-1_minimal-left"></i>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style="width: 0">
                  <i class="now-ui-icons arrows-1_minimal-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Episode -->
        <div class="episode row">
          <div class="title col-md-12">
            <h4 style="
                  color: #fff;
                  font-weight: 600;
                  display: inline-block;
                ">
              Server:
            </h4>
            <p class="category" style="
                  color: #ffb236;
                  font-weight: 600;
                  margin-left: 8px;
                  display: inline-block;
                ">
              #Vietsub1
            </p>
          </div>
          <div class="col-md-12">
            <button class="btn" style="
                  background-color: #3d3d3d;
                  color: #ffb236;
                  font-size: 20px;
                ">
              1
            </button>
            <button class="btn" style="
                  background-color: #3d3d3d;
                  color: #ffb236;
                  font-size: 20px;
                ">
              2
            </button>
            <button class="btn" style="
                  background-color: #3d3d3d;
                  color: #ffb236;
                  font-size: 20px;
                ">
              3
            </button>
            <button class="btn" style="
                  background-color: #3d3d3d;
                  color: #ffb236;
                  font-size: 20px;
                ">
              4
            </button>
            <button class="btn" style="
                  background-color: #3d3d3d;
                  color: #ffb236;
                  font-size: 20px;
                ">
              5
            </button>
            <button class="btn" style="
                  background-color: #3d3d3d;
                  color: #ffb236;
                  font-size: 20px;
                ">
              6
            </button>
          </div>
        </div>';
  }
  echo '<!-- Comment section -->
        <div id="comments" style="color: #fff">
          <div class="title">
            <h3>
              <small>Comments</small>
            </h3>
          </div>
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <h4 class="text-center">Post your comment</h4>
              <div class="media media-post">
                <a class="pull-left author" href="#pablo">
                  <div class="avatar">
                    <img class="media-object img-raised" alt="64x64" src="assets/storage/uploads/img/avatar_ex.jpg" />
                  </div>
                </a>
                <div class="media-body">';

  echo '
                <!-- Insert Comment -->
                <form class="form-insert-comment" role="form" method="post" action="comments.php?actioin=comment&id=' . $movieid . '">
                    <textarea class="form-control" name="comment" placeholder="Write some nice stuff or   nothing..." rows="6"></textarea>
                    <div class="media-footer">
                      <button type="submit" class="btn-post-comment btn btn-primary btn-wd pull-right">Post Comment</a>
                    </div>
                  </form>

                </div>
              </div>
              <div class="media-area">
                <!-- Show Comment -->
                <h3 class="title text-center">
                  <small>10 Comments</small>
                </h3>
                <div class="media" style="flex-direction: column;">';

  echo '
                  <a class="pull-left" href="#pablo">
                  <div class="avatar">
                    <img class="media-object img-raised" src="assets/storage/uploads/img/avatar_ex.jpg" />
                  </div>
                </a>
                <div class="media-body">
                    <h5 class="media-heading">
                      Tina Andrew
                      <small class="text-muted">· 7 minutes ago</small>
                    </h5>
                    <p>
                      Chance too good. God level bars.
                      I"m so proud of @LifeOfDesiigner
                      #1 song in the country. Panda!
                      Don"t be scared of the truth
                      because we need to restart the
                      human foundation in truth I
                      stand with the most humility. We
                      are so blessed!
                    </p>
                    <div class="media-footer">
                      <a href="#pablo" class="btn btn-primary pull-right" rel="tooltip" title="" data-original-title="Reply to Comment">
                        <i class="now-ui-icons ui-1_send"></i>
                        Reply
                      </a>
                      <a href="#pablo" class="btn btn-primary pull-right">
                        <i class="now-ui-icons ui-2_favourite-28"></i>
                        243
                      </a>
                    </div>
                </div>
              ';
  echo '
                <ul class="pagination pagination-primary" style="margin: 0 auto;">
                  <li class="page-item">
                    <a class="page-link text-white" href="#" aria-label="Previous">
                      <span aria-hidden="true"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link text-white" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link text-white" href="#">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link text-white" href="#">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link text-white" href="#" aria-label="Next">
                      <span aria-hidden="true"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>';

  include 'footer.php';
  echo '</div>';
  include 'src_js.php';
  echo '</body>
</html>';
}
