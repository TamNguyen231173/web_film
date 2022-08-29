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
    <div class="container-fluid" style="height: 100vh; overflow: hidden">
      <div class="row">
        <div class="login-container col-md-5 px-0 d-flex flex-column justify-content-center align-items-center" style="
							padding: 30px;
							background-color: #3d3d3d;
							color: white;
						">
          <h6 style="margin-bottom: 30px; letter-spacing: 2px;">
            <a href="login.php" class="link footer-link">Đăng nhập</a>
          </h6>
          <h2 style="
								text-transform: uppercase;
								letter-spacing: 4px;
							">
            Đăng ký
          </h2>
          <p class="description font-italic" style="padding: 0 4px; text-align: center;">
            Nghệ thuật là sự lừa gạt đẹp nhất giữa mọi điều dối
            trá.
          </p>
          <form>
            <div class="group">
              <input type="text" required />
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>Tên hiển thị</label>
            </div>

            <div class="group">
              <input type="text" required />
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>Ngày sinh</label>
            </div>

            <div class="group">
              <input type="text" required />
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>Email</label>
            </div>

            <div class="group">
              <input type="text" required />
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>Mật khẩu</label>
            </div>

            <button type="submit" name="login" class="custom-btn btn-16">Đăng ký</button>
          </form>
        </div>
        <div class="background-login col-md-7 px-0">
          <div class="page-header header-filter">
            <div class="page-header-image" style="
									background-image: url('assets/storage/uploads/img/register-img.jpg');
								"></div>
            <div class="content-center">
              <div class="col-md-5 text-justify" style="margin-bottom: 300px">
                <h4 class="description">
                  “ Bà ngoại nói, có hai điều không thể bỏ
                  lỡ trong cuộc sống. Một là chuyến xe
                  cuối cùng, hai là những người yêu ta
                  thật lòng. “
                </h4>
                <h6 class="description">
                  - Trà Long / Mắt Biếc -
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./assets/js/plugins/bootstrap-switch.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="./assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="./assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="./assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="./assets/js/plugins/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      // the body of this function is in assets/js/now-ui-kit.js
      nowuiKit.initContactUsMap();
    });
  </script>
</body>

</html>