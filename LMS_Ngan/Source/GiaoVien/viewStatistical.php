<?php 
	include("../../clsFunction/clsMain.php");
	$p = new LMS();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../CSS/mau.css">
    <link rel="stylesheet" href="../../Font/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../../Bootstrap/css/bootstrap.min.css">
    <script src="../../JS/jquery-3.6.0.js"></script>
    <script src="../../Bootstrap/js/bootstrap.min.js"></script>
    <title>THỐNG KÊ BÀI KIỂM TRA</title>
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
                    <span>QUANGTHANG.GV</span>
                </div>
            </div>
        </div>
        <div class="menu-bar">
            <ul class="menu-bar-down">
                <li class="menu-item">
                    <a href="../../../indexTeacher.php" class="menu-item__link">TRANG CHỦ</a>
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
                    <a class="menu-item-right__link" href="#">GIÁO VIÊN</a>
                    <ul class="sub-menu">
                        <li class="sub-item">
                            <a href="" class="sub-link">THU BÀI TỰ LUẬN</a>
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
                        <li class="sub-item">
                            <a href="#" class="sub-link">XEM THỐNG KÊ BÀI KIỂM TRA</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="content">
            <div class="nameClass">
            
            <div style="width:100%; height: 50px; font-weight: bold; font-size: 25px; text-align:center">
            	DANH SÁCH CÁC LỚP
            </div>
                <?php 
					$p->loadNameClass("select * from lophoc where malop LIKE '%NBK' order by malop asc");
				?>
                
                
            </div>
            <div class="modal" id="modalStatis">
                <div class="modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">THỐNG KÊ BÀI KIỂM TRA</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <?php 
								$p->loadResultTest("select * from ketqua_kiemtra order by id asc");
							?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">ĐÓNG</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="welcome-page">
                <div class="logo-school">
                    <img src="../../Image/logo_lms.png" style="width:100px" alt="Logo Trường THCS Nguyễn Bỉnh Khiêm">
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