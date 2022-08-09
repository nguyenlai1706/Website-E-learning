<?php 
	include("../clsFunction/clsMain.php");
	$p = new LMS();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="../CSS/doTest_Multi.css">
    <link rel="stylesheet" href="../Font/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <script src="../JS/jquery.slim.min.js"></script>
    <script src="../JS/popper.min.js"></script>
    <script src="../JS/bootstrap.bundle.min.js"></script>
    <title>BÀI KIỂM TRA TRẮC NGHIỆM</title>
</head>
<body>
    <div class="container-fluid">

        <div class="website-header">
            <div class="website-name">
                <div class="website-name__main">
                    HỆ THỐNG HỌC TẬP TRỰC TUYẾN
                </div>
                <div class="website-name__sub">
                    TRƯỜNG TRUNG HỌC CƠ SỞ NGUYỄN BỈNH KHIÊM
                </div>
            </div>
            <div class="user-login">
                <div class="user-avatar">
                    <i class="fas fa-user-circle avatar"></i>
                    <span>NGUYEN CHI THANH</span>
                </div>
            </div>
        </div>
        <div class="menu-bar">
            <ul class="menu-bar-down">
                <li class="menu-item">
                    <a href="../indexStudent.php" class="menu-item__link">TRANG CHỦ</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-item__link">KHOÁ HỌC</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-item__link">THỜI GIAN BIỂU</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-item__link">TIN TỨC - THÔNG BÁO</a>
                </li>
            </ul>
            <ul class="menu-bar-option">
                <li class="menu-item-right">
                    <a class="menu-item-right__link" href="#">HỌC SINH</a>
                    <ul class="sub-menu">
                        <li class="sub-item">
                            <a href="#" class="sub-link">XEM ĐIỂM</a>
                        </li>
                        <li class="sub-item">
                        <a href="../Source/doTest_Multi.php" class="sub-link">LÀM BÀI KIỂM TRA TRẮC NGHIỆM</a>
                        </li>
                        <li class="sub-item">
                            <a href="#" class="sub-link">NỘP BÀI KIỂM TRA TỰ LUẬN</a>
                        </li>
                        <li class="sub-item">
                            <a href="#" class="sub-link">XEM THỜI GIAN BIỂU</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="content">
            <div class="test-content">
                <div class="test-title">
                    BÀI KIỂM TRA TRẮC NGHIỆM
                </div>
                <div class="test-line">
                    
                </div>
                <div class="test-subject">

                    <button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-primary btn-subject">
                        TOÁN - ĐẠI SỐ
                    </button>
                    <button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-secondary btn-subject">
                        TOÁN - HÌNH HỌC
                    </button>
                    <button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-success btn-subject">
                        NGỮ VĂN
                    </button>
                    <button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-info btn-subject">
                        TIẾNG ANH
                    </button>
                    <button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-warning btn-subject">
                        LỊCH SỬ
                    </button>
                    <button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-dark btn-subject">
                        ĐỊA LÝ
                    </button>
                    
                    <!-- MODAL TEST SUBJECT -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-xl modal-dialog-centered">
                            <div class="modal-content mainModal_content">
                                <div class="modal-header">
                                        <h4 class="modal-title title-test">
                                            CÁC BÀI KIỂM TRA TRONG TUẦN
                                        </h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <div class="modal-body">
                                    <button type="button" data-toggle="modal" data-target="#mySubModal" class="btn btn-info btn-test">BÀI KIỂM TRA 15 PHÚT</button> 
                                    <button type="button" class="btn btn-info btn-test">BÀI KIỂM TRA 45 PHÚT</button>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger btn-close" data-dismiss="modal">ĐÓNG LẠI</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MODAL TEST DETAIL -->
                    <div class="modal fade" id="mySubModal">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content subModal_content">
                                <div class="modal-header">
                                    <h4 class="modal-title title-test">
                                        CHI TIẾT BÀI KIỂM TRA
                                    </h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <div class="modal-body">
                                    <div class="test-detail">
                                        BÀI KIỂM TRA 15 PHÚT <br>
                                        LỚP KIỂM TRA: <?php $p->loadMaLop("select malop from baikiemtra_tn order by malop asc LIMIT 1"); ?> <br>
                                        GIỜ BẮT ĐẦU KIỂM TRA: <?php $p->loadTimeStartExam("select thoigianbd_kt from baikiemtra_tn LIMIT 1"); ?> <br>
                                        GIỜ KẾT THÚC KIỂM TRA: <?php $p->loadTimeEndExam("select thoigiankt_kt from baikiemtra_tn LIMIT 1"); ?> <br>
                                        SỐ LẦN KIỂM TRA: <?php $p->loadTimesExam("select solankt from baikiemtra_tn LIMIT 1"); ?> <br>
                                        MÃ ĐỀ KIỂM TRA: <?php $p->loadCodeExam("select made from baikiemtra_tn LIMIT 1"); ?><br>
                                        MÃ MÔN KIỂM TRA: <?php $p->loadSubjectExam("select mamonhoc from baikiemtra_tn LIMIT 1"); ?><br>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger btn-close" data-dismiss="modal">ĐÓNG</button>  
                                    <a href="../Source/mainDoTestMulti.php">
                                        <button type="button" class="btn btn-info">THỰC HIỆN KIỂM TRA</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="welcome-page">
                <div class="logo-school">
                    <img src="../Image/logo_lms.png" style="width:100px" alt="Logo Trường THCS Nguyễn Bỉnh Khiêm">
                </div>
                <div class="paragraph">
                    Chào mừng các bạn đến với Hệ thống học tập trực tuyến
                    của Trường THCS Nguyễn Bỉnh Khiêm. Kênh thông tin cung cấp
                    các khoá học trực tuyến của nhà trường cho các bạn học sinh.
                </div>
            </div>
            <div class="link-contact">
                <div class="contact-title">
                    LIÊN KẾT
                </div>
                <div class="contact-content">
                    <ul class="contact-menu">
                        <li class="contact-item">
                            <a href="#" class="contact-link">WEBSITE NHÀ TRƯỜNG</a>
                        </li>
                        <li class="contact-item">
                            <a href="#" class="contact-link">WEBSITE TRUNG TÂM QUẢN TRỊ HỆ THỐNG</a>
                        </li>
                        <li class="contact-item">
                            <a href="#" class="contact-link">CỔNG THÔNG TIN HỌC SINH</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="detail-contact">
                <div class="contact-title">
                    LIÊN HỆ
                </div>  
                <div class="contact-par">
                    <div class="contact-info">
                        Trung tâm Quản trị Hệ thống <br>
                        Trường Trung học cơ sở Nguyễn Bỉnh Khiêm
                    </div>
                    <div class="contact-phone">
                        <i class="fas fa-phone"></i> 
                        SĐT: 0283.8940.390 <br>
                    </div>
                    <div class="contact-email">
                        <i class="fas fa-envelope"></i>
                        Email: csm@thcsnbk.edu.vn
                    </div>
                </div>      
            </div>
            
        </div>
        <div class="source">
            <div class="source-content">
                Copyright &copy; 2022 - Phát triển bởi Nhóm 4 - Trường Đại học Công nghiệp TP. Hồ Chí Minh
            </div>
        </div>
    </div>
</body>
</html>