<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="nhinguyen.rf.gd mạng lưới máy chủ hàng đầu việt nam. Đa năng, toàn diện và hoàn toàn miễn phí">
    <title>nhinguyen.rf.gd | Shop plugin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/ad778f42b3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/announcer.css">
    <link rel="stylesheet" href="../css/individual.css">
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
                        <a href="#" class="text-reset"><i class="fas fa-child fa-3x"></i></a><br>
                        <a href="../../tst/index.php" class="small text-warning">'.$credit.' credit</a><br>
                        <a href="../../util/logout.php" class="text-reset">Đăng xuất</a>
                        ';
                    } else
                        header('Location: ../../index.php');
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
                        <li><a class="dropdown-item" href="./contact.php">Liên hệ</a></li>
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
                    <a href="#" class="nav-link active disabled">Thông tin Cá nhân</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Shop plugin -->
    <div class="row">
        <div class="col-lg-2 border" id="nav">
            <div class="bg-primary text-white p-1 rounded" id="nav-info"><b>Thông tin</b></div>
            <div class="p-1 rounded" id="nav-inv">Túi đồ</div>
            <div class="p-1 rounded" id="nav-mbox">Hộp thư</div>
            <div class="p-1 rounded" id="nav-his">Lịch sử</div>
        </div>
        <div class="col-lg-10 border container p-3">
            <div class="row">
                <div class="col-lg-12 p-3" id="info">
                    <?php
                    include '../../util/get_user_info.php';
                    get_user_info($_SESSION["username"]);
                    ?>
                    <form action="../../controller/update_user_info.php" method="post">
                    <div class="form-group">
                        <label for="username">Tên đăng nhập <span class="text-danger">*</span></label>
                        <input type="text" name="username" id="username" readonly class="form-control" value="<?php echo $_SESSION['username']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="id">Mã thành viên <span class="text-danger">*</span></label>
                        <input type="text" name="id" id="id" readonly class="form-control" value="#<?php echo $id; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email <span class="text-danger">*</span></label>
                        <input type="text" name="email" id="email" class="form-control" value="<?php echo $email; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="first_name">Họ</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" value="<?php echo $first_name; ?>" maxlength="255" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Tên</label>
                        <input type="text" name="last_name" id="last_name" class="form-control" value="<?php echo $last_name; ?>" maxlength="255" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Địa chỉ nhà</label>
                        <input type="text" name="address" id="address" class="form-control" value="<?php echo $address; ?>" maxlength="255" required>
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Số điện thoại</label>
                        <input type="text" name="phone_number" id="phone_number" class="form-control" value="<?php echo $phone_number; ?>" maxlength="255" required>
                    </div>
                    <div class="form-group">
                        <label for="age">Tuổi</label>
                        <select name="age" id="age" class="form-control">
                            <?php
                                for($i = 1; $i<101; $i++){
                                    if($i == $age){
                                        echo '<option value="'.$i.'" selected>'.$i.' Tuổi (*)</option>';
                                    } else{
                                        if($i < 10)
                                            $i = "0".$i;
                                        echo '<option value="'.$i.'">'.$i.' Tuổi</option>';
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sex">Giới tính</label>
                        <select name="sex" id="sex" class="form-control">
                            <?php
                                if($sex == 0){
                                    echo '<option value="0" selected>Nam</option>';
                                    echo '<option value="1">Nữ</option>';
                                } else{
                                    echo '<option value="0">Nam</option>';
                                    echo '<option value="1" selected>Nữ</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <input type="submit" value="Save" class="btn btn-info btn-lg mt-2" style="width: 20%;" name="update">
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex flex-wrap justify-content-start">
                    <div class="col-lg-2 bg-success text-center rounded m-1" id="inv">
                        <div>
                            <img src="../img/txt.png" alt="README" width="50%"><br>
                            <a href="#" class="text-dark" data-bs-toggle="popover" title="Lời nhắn từ admin" data-bs-content="Các tệp / file bạn mua từ cửa hàng sẽ được lưu trữ tại đây. Bạn không thể tải lên đây bất cứ thứ gì khác. Cám ơn!"><b>readme.txt</b></a>
                        </div>
                    </div>
                    <div class="col-lg-2 bg-success text-center rounded m-1" id="inv">
                        <div>
                            <img src="../img/coin.png" alt="CREDIT" width="50%"><br>
                            <a href="./recharge.php" class="text-reset"><b><?php echo $credit; ?> credit</b></a>
                        </div>
                    </div>
                    <?php include '../../controller/load_user_file.php'; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" id="mbox">
                    <table class="table table-hover table-sm small">
                        <thead>
                            <tr>
                                <th>Từ</th>
                                <th>Đến</th>
                                <th>Chủ đề</th>
                                <th>Nội dung</th>
                                <th>Vào lúc</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>taiproduaxe</td>
                                <td><?php echo $_SESSION['username']; ?></td>
                                <td>Lời chào</td>
                                <td><a href="#" data-bs-toggle="popover" title="Nội dung thư" data-bs-content="Bạn đã là thành viên của nhinguyen.rf.gd. Các nội dung duyệt hoặc lời nhắn từ admin sẽ phản hồi về đây cho bạn."><i class="fas fa-envelope"></i>Mở</a></td>
                                <td>12/06/2022 11:50:111</td>
                                <td>
                                    <form action="../../controller/delete_mail.php" method="post">
                                        <input type="hidden" name="id" value="0">
                                        <input type="submit" value="Xoá" name="delete" class="btn btn-danger btn-sm">
                                    </form>
                                </td>
                            </tr>
                            <?php include '../../controller/load_user_mbox.php'; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" id="his">
                    <table class="table table-bordered table-sm small">
                        <thead>
                            <tr>
                                <th>Thời gian</th>
                                <th>Hành động</th>
                                <th>Kết quả</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include '../../controller/load_user_his.php'; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="announcer">
    <?php
        if(isset($_GET['response'])){
            $value = $_GET['response'];
            if($value == "update-info-success")
                echo '
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Cập nhật</strong> thông tin cá nhân thành công.
                </div>
                ';
            else{
                if($value == "delete-mail-success")
                    echo '
                    <div class="alert alert-success alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Xoá thư</strong> thành công.
                </div>
                    ';
                if($value == 404)
                echo '
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Thất bại!</strong> Đã xảy ra lỗi không thể xác định.
                </div>
                ';
            }
        }
    ?>
</div>
<script src="../js/individual.js"></script>
<script src="../js/common.js"></script>
</body>
</html>