<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="nhinguyen.rf.gd mạng lưới máy chủ hàng đầu việt nam. Đa năng, toàn diện và hoàn toàn miễn phí">
    <title>nhinguyen.rf.gd | Liên Hệ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/ad778f42b3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/common.css">
    <link href="../img/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 bg-success" id="header-left">
            <div><img src="../img/grass.png" alt="LOGO" width="100px"></div>
        </div>
        <div class="col-lg-8 bg-success text-white p-3" id="header-middle">
            <img src="https://images.cooltext.com/5606373.png" width="100%" />
        </div>
        <div class="col-lg-2 bg-success text-white" id="header-right">
            <div class="text-center">
                <?php
                    $credit = 0;
                    if(isset($_SESSION['username'])){
                        include '../../util/get_user_credit.php';
                        $credit = get_user_credit($_SESSION['username']);
                        echo '
                        <a href="./individual.php" class="text-reset"><i class="fas fa-child fa-3x"></i></a><br>
                        <a href="../../tst/index.php" class="small text-warning">'.$credit.' credit</a><br>
                        <a href="../../util/logout.php" class="text-reset">Đăng xuất</a>
                        ';
                    } else
                        echo '
                        <i class="far fa-user-circle fa-4x"></i><br>
                        <ul class="nav nav-tabs">
                            <li class="nav-item dropdown small">
                                <a href="#" class="nav-link dropdown-toggle text-reset" data-bs-toggle="dropdown">Tài Khoản</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./login.php">Đăng nhập</a></li>
                                    <li><a class="dropdown-item" href="./register.php">Tạo tài khoản</a></li>
                                </ul>
                            </li>
                        </ul>
                        ';
                ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 mt-3" id="nav">
            <ul class="nav nav-tabs">
                <li class="nav-item"><a href="../../index.php" class="nav-link">Trang Chủ</a></li>
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Cửa Hàng</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./shopfile.php">Shop files</a></li>
                        <li><a class="dropdown-item" href="./shopplugin.php">Shop plugins</a></li>
                        <li><a class="dropdown-item" href="./beaseller.php">Đăng tải</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Trợ Giúp</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./guide.php">Hướng dẫn</a></li>
                        <li><a class="dropdown-item" href="#">Liên hệ</a></li>
                        <li><a class="dropdown-item" href="./comment.php">Bình luận</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="../../tst/index.php" class="nav-link">Nạp Thẻ</a>
                </li>
                <li class="nav-item">
                    <a href="./admin.php" class="nav-link">Admin</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link active disabled">Liên Hệ</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Contact -->
    <style>
        #contactBox > div > img{
            border-radius: 50%;
        }
    </style>
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-around mt-5 mb-5" id="contactBox">
            <div class="col-lg-3 text-center">
                <img src="../img/fb.png" alt="FB" width="100%"><br><br>
                <a href="https://www.facebook.com/taiproduaxe/" target="_blank">Truy cập <i class="fas fa-external-link-alt"></i></a>
            </div>
            <div class="col-lg-3 text-center">
                <img src="../img/zl.png" alt="ZL" width="100%"><br><br>
                <a href="chat.zalo.me" target="_blank">Truy cập <i class="fas fa-external-link-alt"></i></a>
            </div>
            <div class="col-lg-3 text-center">
                <img src="../img/yt.png" alt="YT" width="100%"><br><br>
                <a href="https://www.youtube.com/channel/UCWB4agz7YPLibGMLUtydeyQ" target="_blank">Truy cập <i class="fas fa-external-link-alt"></i></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <i class="fas fa-exclamation-circle text-warning"></i>
            Chuột phải lên hình ảnh chọn "Open image in new tab" để xem rõ ảnh hơn.
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <i class="fas fa-exclamation-circle text-warning"></i>
            Admin sẽ cố gắng phản hồi ít nhất là trong khoản 24h. Ưu tiên rep facebook hơn.
        </div>
    </div>
</div>
</body>
</html>