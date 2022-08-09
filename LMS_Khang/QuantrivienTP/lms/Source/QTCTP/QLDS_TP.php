<?php
$conn = mysqli_connect("localhost","nguyenlai1706","10897105") or die ("lỗi kết nối đến server");
    mysqli_select_db($conn,"lmsnhom4") or die ("lỗi kết nối đến database db");
    mysqli_set_charset($conn,"utf8");
?>
<?php
	session_start();
	if(isset($_SESSION['matk']) && isset($_SESSION['user']) && isset($_SESSION['pass'])) {
		include("../../../clsFunction/clsLogin.php");	
		$q = new loginAccount();
		$q->confirmLogin($_SESSION['matk'], $_SESSION['user'], $_SESSION['pass']);
	}
	else {
		header('location: ../../../Source/adminLogin.php');	
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/mau.css">
    <link rel="stylesheet" href="../../../../CSS/main.css">
    <link rel="stylesheet" href="../Font/fontawesome/css/all.min.css">
    <title>TRANG CHỦ</title>
</head>
<style>
    .lop:hover
    {
        background:pink;
        
    }
    a
    {color: black;
        text-decoration: none;
    }
    a:hover
    {color: red;
        text-decoration: none;
    }
    </style>
<body>
    <div class="container">

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
                <a href=""><strong>
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
                    <a href="../../../../../indexAdmin.php" class="menu-item__link">TRANG CHỦ</a>
                </li>
                <li class="menu-item">
                    <a href="QLDS_TP.php" class="menu-item__link active">QUẢN LÝ DANH SÁCH CẤP TRƯỜNG</a>
                </li>
                <li class="menu-item">
                    <a href="../../../../LMS_1/Source/subjectmanagement.php" class="menu-item__link">QUẢN LÝ MÔN HỌC CỦA KHỐI LỚP</a>
                </li>
                <li class="menu-item">
                    <a href="../../../themnguoidung.php" class="menu-item__link">THÊM NGƯỜI DÙNG</a>
                </li>
                <li class="menu-item">
                    <a href="../../../xoanguoidung.php" class="menu-item__link">XÓA NGƯỜI DÙNG</a>
                </li>
                <li class="menu-item">
                    <a href="../../../suanguoidung.php" class="menu-item__link">SỬA NGƯỜI DÙNG</a>
                </li>
            </ul>
        </div>
        <div class="content">
        <table style="margin: auto; width: 800px;  text-align:center;text-decoration:none; background:rgb(239, 235, 233); " border=""  >
        <br><h2 style="text-align:center; color:blue; ">THÔNG TIN CÁC TRƯỜNG HỌC THUỘC TPHCM</h2>
            <tr style="color:brown; line-height:2.5; " >
                <th>Mã Trường</th> 
                <th>Tên trường</th>
                <th>Địa chỉ</th>
                <th>MaQTVTP</th>
            </tr>
            <?php
                $sql ="select * from truonghoc";
                $qr = mysqli_query($conn,$sql); 
                while($row = mysqli_fetch_assoc($qr)){
            ?>
            <tr id="l"  style=" line-height:2.5; " >
                <td><?php echo $row["matruong"];?></td>
                <td class="lop" ><?php echo "<a href='viewtruong.php?tentruong=".$row['tentruong']."'>".$row['tentruong']."</a>";?></a></td>
                <td><?php echo $row["diachi"];?></td>
                <td><?php echo $row["maqtvtp"];?></td>
            </tr>
            <?php }?>
            </table>   
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
                        <li class="contact-item">
                            <a href="#" class="contact-link">CÁC KHOÁ HỌC</a>
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