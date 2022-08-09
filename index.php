<?php 

	session_start();
	if(isset($_SESSION['matk']) && isset($_SESSION['user']) && isset($_SESSION['pass'])) {
		include("./clsFunction/clsLogin.php");	
		$q = new loginAccount();
		$q->confirmLogin($_SESSION['matk'], $_SESSION['user'], $_SESSION['pass']);
	}
	else {
		header('location: ./Source/QTV_ThanhPho/adminLogin.php');	
	}
	include("./clsFunction/clsMain.php");
	$v = new LMS();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/main.css">
    <link rel="stylesheet" href="./Font/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./Bootstrap/css/bootstrap.min.css">
	<script src="./JS/jquery-3.6.0.js"></script>
    <script src="./Bootstrap/js/bootstrap.min.js"></script>
    <title>TRANG CHỦ</title>
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
            <!-- <div class="user-login">
                <div class="user-avatar">
                    <i class="fas fa-user-circle avatar"></i>
                    <span>NGUYEN HOANG LAI</span>
                </div>
            </div>
            !-->
        </div>
        <div class="menu-bar">
            <ul class="menu-bar-down">
                <li class="menu-item">
                    <a href="index.php" class="menu-item__link">TRANG CHỦ</a>
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
                        <a class="menu-item-right__link" href="#">QUẢN TRỊ VIÊN</a>
                        <ul class="sub-menu">
                            <li class="sub-item">
                                <a href="#" class="sub-link">QUẢN LÝ DANH SÁCH CẤP TRƯỜNG</a>
                            </li>
                            <li class="sub-item">
                                <a href="#" class="sub-link">THÊM NGƯỜI DÙNG</a>
                            </li>
                            <li class="sub-item">
                                <a href="#" class="sub-link">XOÁ NGƯỜI DÙNG</a>
                            </li>
                            <li class="sub-item">
                                <a href="#" class="sub-link">SỬA NGƯỜI DÙNG</a>
                            </li>
                        </ul>
                </li>
                <li class="menu-item-right">
                    <a class="menu-item-right__link" href="#">GIÁO VIÊN</a>
                    <ul class="sub-menu">
                        <li class="sub-item">
                            <a href="#" class="sub-link">THU BÀI TỰ LUẬN</a>
                        </li>
                        <li class="sub-item">
                            <a href="#" class="sub-link">TẠO CÂU HỎI TRẮC NGHIỆM</a>
                        </li>
                        <li class="sub-item">
                            <a href="#" class="sub-link">TẠO CÂU HỎI TỰ LUẬN</a>
                        </li>
                        <li class="sub-item">
                            <a href="#" class="sub-link">TẠO ĐỀ KIỂM TRA</a>
                        </li>
                        <li class="sub-item">
                            <a href="#" class="sub-link">LẬP KẾ HOẠCH THỜI GIAN BIỂU</a>
                        </li>
                        <li class="sub-item">
                            <a href="#" class="sub-link">NHẬP ĐIỂM</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-right">
                    <a class="menu-item-right__link" href="#">HỌC SINH</a>
                    <ul class="sub-menu">
                        <li class="sub-item">
                            <a href="#" class="sub-link">XEM ĐIỂM</a>
                        </li>
                        <li class="sub-item">
                        <a href="#" class="sub-link">LÀM BÀI KIỂM TRA TRẮC NGHIỆM</a>
                        </li>
                        <li class="sub-item">
                            <a href="#" class="sub-link">NỘP BÀI KIỂM TRA TỰ LUẬN</a>
                        </li>
                        <li class="sub-item">
                            <a href="#" class="sub-link">XEM THỜI GIAN BIỂU</a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item-right">
                    <a class="menu-item-right__link" href="#">ĐĂNG NHẬP</a>
                    <ul class="sub-menu">
                        <li class="sub-item">
                            <a href="./Source/QTV_ThanhPho/adminLogin.php" class="sub-link">QUẢN TRỊ VIÊN THÀNH PHỐ</a>
                        </li> <li class="sub-item">
                            <a href="./Source/QTV_Truong/school_adminLogin.php" class="sub-link">QUẢN TRỊ VIÊN TRƯỜNG</a>
                        </li>
                        <li class="sub-item">
                        <a href="./Source/GiaoVien/teacherLogin.php" class="sub-link">GIÁO VIÊN</a>
                        </li>
                        <li class="sub-item">
                            <a href="./Source/HocSinh/studentLogin.php" class="sub-link">HỌC SINH</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <div class="content">
            
        </div>
        <div class="footer">
            <div class="welcome-page">
                <div class="logo-school">
                    <img src="./Image/logo_lms.png" style="width:100px" alt="Logo Trường THCS Nguyễn Bỉnh Khiêm">
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