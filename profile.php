<?php
session_start();

include 'dbh.php';

$user_id = $_SESSION['user_id'];

$im = "SELECT * FROM users WHERE user_id='$user_id'";
$records = mysqli_query($conn, $im);
$result = mysqli_fetch_assoc($records);
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
                  <a href='account.php' class='dropdown-item'>Account</a>
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
							background-image: url('assets/storage/uploads/img/background_profile.jpg');
							filter: brightness(75%);
						"></div>
                <div class="content-center mt-4">
                    <div class="container">
                        <div class="row justify-content-space justify-content-between mb-4">
                            <div class="content-center">
                                <div class="col-sm-2 ml-auto mr-auto" style="margin-top: 100px;">
                                    <img src="
                                    <?php
                                    echo $result['user_avatar'];
                                    ?>" alt="Thumbnail Image" class="rounded-circle img-raised">
                                </div>
                                <h3 class="title">
                                    <?php
                                    echo $result['user_name'];
                                    ?>
                                </h3>
                                <p class="category mt-2">
                                    <?php
                                    echo $result['DOB'];
                                    ?>
                                </p>
                                <div class="row justify-content-center">
                                    <div class="social-description mr-4">
                                        <h2>26</h2>
                                        <p>Comments</p>
                                    </div>
                                    <div class="social-description mr-4">
                                        <h2>26</h2>
                                        <p>Comments</p>
                                    </div>
                                    <div class="social-description mr-4">
                                        <h2>48</h2>
                                        <p>Bookmarks</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="container" style="padding-bottom: 100px;">
            <h3 class="title text-center">Giới thiệu về <?php echo $result['user_name'] ?></h3>
            <h5 class="description text-center">Tôi là Tâm. Năm nay, tôi mười chín tuổi. Hiện tại, tôi đang là học sinh lớp CP17309. Gia đình của tôi có bốn thành viên là bố, mẹ, tôi và em gái. Tôi rất yêu quý mọi người trong gia đình của mình. Sở thích của tôi là chơi game, đá bóng và đọc sách. Môn tôi học kém nhất là Ngữ văn.</h5>
            <?php
            if (isset($_SESSION['user_id'])) {
                if ($_SESSION['user_id'] == 1) {
                    echo '
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="title text-center">My Portfolio</h4>
                                <div class="nav-align-center">
                                    <ul class="nav nav-pills nav-pills-primary nav-pills-just-icons" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#profile" role="tablist">
                                                <i class="now-ui-icons design_image"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#home" role="tablist">
                                                <i class="now-ui-icons location_world"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#messages" role="tablist">
                                                <i class="now-ui-icons design-2_ruler-pencil"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content gallery mt-4">
                                <div class="tab-pane active" id="profile" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-5 ml-auto mr-auto">
                                            <div class="card card-background card-background-product card-raised" 
                                            style="background-image: url(';
                    echo "'assets/storage/uploads/img/portfolio_background1.jpg'";
                    echo ')"
                                            
                                            background-size: auto;
                                            background-position: center;
                                            >
                                                <div class="card-body">
                                                    <h2 class="card-title">Chair remake.</h2>
                                                    <p class="card-description text-white">
                                                        Trello’s boards, lists, and cards enable you to organize and prioritize your projects in a fun, flexible and rewarding way. It was a great project and I would be more than happy to do it again.
                                                    </p>
                                                    <label class="badge badge-neutral">Trello</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="info info-horizontal pt-0">
                                                <div class="icon icon-warning">
                                                    <i class="now-ui-icons users_single-02"></i>
                                                </div>
                                                <div class="description">
                                                    <h5 class="info-title">Work With Any Team</h5>
                                                    <p class="description">
                                                        Whether it’s for work or even the next family vacation, Trello helps your team.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="info info-horizontal pt-0">
                                                <div class="icon icon-warning">
                                                    <i class="now-ui-icons business_chart-bar-32"></i>
                                                </div>
                                                <div class="description">
                                                    <h5 class="info-title">A Productivity Platform</h5>
                                                    <p class="description">
                                                        Integrate the apps your team already uses directly into your workflow.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="home" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-5 ml-auto mr-auto">
                                            <div class="card card-background card-background-product card-raised" style="background-image: url(';
                    echo "'assets/storage/uploads/img/portfolio_background2.jpg'";
                    echo ')">
                                                <div class="card-body">
                                                    <h2 class="card-title">Social Analytics</h2>
                                                    <p class="card-description">
                                                        Insight to help you create, connect, and convert. Understand Your Audience"s Interests, Influence, Interactions, and Intent. Discover emerging topics and influencers to reach new audiences.
                                                    </p>
                                                    <label class="badge badge-neutral">Analytics</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="info info-horizontal pt-0">
                                                <div class="icon icon-danger">
                                                    <i class="now-ui-icons ui-2_chat-round"></i>
                                                </div>
                                                <div class="description">
                                                    <h5 class="info-title">Listen to Social Conversations</h5>
                                                    <p class="description">
                                                        Gain access to the demographics, psychographics, and location of unique people who talk about your brand.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="info info-horizontal pt-0">
                                                <div class="icon icon-danger">
                                                    <i class="now-ui-icons design-2_ruler-pencil"></i>
                                                </div>
                                                <div class="description">
                                                    <h5 class="info-title">Social Conversions</h5>
                                                    <p class="description">
                                                        Track actions taken on your website that originated from social, and understand the impact on your bottom line.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="messages" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-5 ml-auto mr-auto">
                                            <div class="card card-background card-background-product card-raised" style="background-image: url(';
                    echo "'assets/storage/uploads/img/portfolio_background3.jpg'";
                    echo ')">
                                                <div class="card-body">
                                                    <h2 class="card-title">Interior Redesign</h2>
                                                    <p class="card-description">
                                                        Insight to help you create, connect, and convert. Understand Your Audience"s Interests, Influence, Interactions, and Intent. Discover emerging topics and influencers to reach new audiences.
                                                    </p>
                                                    <label class="badge badge-neutral">Interior</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="info info-horizontal pt-0">
                                                <div class="icon icon-info">
                                                    <i class="now-ui-icons design_palette"></i>
                                                </div>
                                                <div class="description">
                                                    <h5 class="info-title">Colors adjustments</h5>
                                                    <p class="description">
                                                        Gain access to the demographics, psychographics, and location of unique people who talk about your brand.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="info info-horizontal pt-0">
                                                <div class="icon icon-info">
                                                    <i class="now-ui-icons design_scissors"></i>
                                                </div>
                                                <div class="description">
                                                    <h5 class="info-title">Performance Clothing</h5>
                                                    <p class="description">
                                                        Unify data from Facebook, Instagram, Twitter, LinkedIn, and Youtube to gain rich insights from easy-to-use reports.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        ';
                }
            }
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