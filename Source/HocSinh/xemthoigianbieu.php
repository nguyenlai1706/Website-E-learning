<?php 
    include("../../clsFunction/class.php");
    $p = new lms();
    $layid = 0;
    if(isset($_REQUEST['id']))
    {
        $layid = $_REQUEST['id'];
    }
    
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../CSS/thoigianbieu.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/modal.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/main_khang.css">
    <link rel="stylesheet" type="text/css" href="../../Font/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../../Bootstrap/css/bootstrap.min.css">
    <title>XEM THỜI GIAN BIỂU</title>
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
            <div class="user">
                <span>HỌC SINH</span> <a href=""><strong>
                <?php 
                    if(isset($_SESSION['matk'])&&isset($_SESSION['user'])&&isset($_SESSION['pass'])) {
						echo $_SESSION['user'];
					}
                ?>
                </strong></a> 
            </div>
        </div>
        <div class="menu-bar">
            <ul class="menu-bar-down">
                <li class="menu-item">
                    <a href="../../indexStudent.php" class="menu-item__link">TRANG CHỦ</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-item__link">XEM ĐIỂM</a>
                </li>
                <li class="menu-item">
                    <a href="themnguoidung.php" class="menu-item__link  active">XEM THỜI GIAN BIỂU</a>
                </li>
                <li class="menu-item">
                    <a href="xoanguoidung.php" class="menu-item__link">NỘP BÀI TỰ LUẬN</a>
                </li>
                <li class="menu-item">
                    <a href="suanguoidung.php" class="menu-item__link">LÀM BÀI TRẮC NGHIỆM</a>
                </li>
            </ul>
        </div>
        <div class="content">
        <table style="background-color: skyblue;">
                <!-- <caption style="text-align: center; font-size: 27px;">THỜI GIAN BIỂU</caption> -->
                <tr style="height: 50px; background-color: beige;">
                    <td style="width: 5%;"><strong>STT</strong></td>
                    <td style="width: 13.5%;"><strong>Thứ 2</strong></td>
                    <td style="width: 13.5%;"><strong>Thứ 3</strong></td>
                    <td style="width: 13.5%;"><strong>Thứ 4</strong></td>
                    <td style="width: 13.5%;"><strong>Thứ 5</strong></td>
                    <td style="width: 13.5%;"><strong>Thứ 6</strong></td>
                    <td style="width: 13.5%;"><strong>Thứ 7</strong></td>
                    <td><strong>Chủ nhật</strong></td>
                </tr>
                <tr style="height: 150px;">
                    <td style="background-color: beige;">Sáng</td>
                    <td style="font-size: 15px;">
                        Văn <br>
                        Văn <br>
                        Toán <br>
                        Toán <br>
                        Địa
                    </td>
                    <td>
                        Toán <br>
                        Toán <br>
                        Anh <br>
                        Anh <br>
                        Sử
                    </td>
                    <td>
                        Anh <br>
                        Anh <br>
                        Hóa <br>
                        Hóa <br>
                        GDCD
                    </td>
                    <td>
                        Lý <br>
                        Lý <br>
                        Sinh <br>
                        Sinh <br>
                        Công nghệ
                    </td>
                    <td>
                        Toán <br>
                        Toán <br>
                        Văn <br>
                        Văn <br>
                    </td>
                    <td>
                        Toán <br>
                        Toán <br>
                        Thể dục <br>
                        Thể dục <br>
                        Thể dục
                    </td>
                    <td></td>
                </tr>
                <tr style="height: 150px;">
                    <td style="background-color: beige;">Chiều</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
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