<?php
$conn = mysqli_connect("localhost","nguyenlai1706","10897105") or die ("lỗi kết nối đến server");
    mysqli_select_db($conn,"lmsnhom4") or die ("lỗi kết nối đến database db");
    mysqli_set_charset($conn,"utf8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/mau.css">
    <link rel="stylesheet" href="../Font/fontawesome/css/all.min.css">
    <title>TRANG CHỦ</title>
</head>
<style>

    .lop:hover
    {
        background:pink;
        
    }
    a
    {   color: black;
        text-decoration: none;
    }
    a:hover
    {   color: red;
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
            <div class="user-login">
                <div class="user-avatar">
                        <i class="fas fa-user-circle avatar"></i>
                        <span class="name">quangthang.gv</span>
                </div>
            </div>
        </div>
        <div class="menu-bar">
            <ul class="menu-bar-down">
                <li class="menu-item">
                    <a href="#" class="menu-item__link">TRANG CHỦ</a>
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
                            <a href="#" class="sub-link">THU BÀI TỰ LUẬN</a>
                        </li>
                        <li class="sub-item">
                            <a href="buildMultiChoice.php" class="sub-link">TẠO CÂU HỎI TRẮC NGHIỆM</a>
                        </li>
                        <li class="sub-item">
                            <a href="buildEssay.php" class="sub-link">TẠO CÂU HỎI TỰ LUẬN</a>
                        </li>
                        <li class="sub-item">
                            <a href="#" class="sub-link">TẠO ĐỀ KIỂM TRA</a>
                        </li>
                        <li class="sub-item">
                            <a href="resultTest.php" class="sub-link">XEM THỐNG KÊ BÀI KIỂM TRA</a>
                        </li>
                        <li class="sub-item">
                            <a href="calendar.php" class="sub-link">LẬP KẾ HOẠCH THỜI GIAN BIỂU</a>
                        </li>
                        <li class="sub-item">
                            <a href="DSlop.php" class="sub-link">NHẬP ĐIỂM</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        
        <div class="content">
        <table style="margin: auto; width: 500px; text-align: center; " border="1px solid" class="" >
        <tr><h2  style="text-align:center; color:blue;">DANH SÁCH LỚP  
                <?php
                        if (isset($_GET['malop'])) {
                        $id = $_GET['malop'];}
                        $sql ="select * from lophoc where malop='$id'  ";
                        $qr = mysqli_query($conn,$sql); 
                        while($row = mysqli_fetch_assoc($qr)){
                ?> 
                <?php echo $row["malop"];?>
                <?php }?> 
            </h2>
            <th>Mã Học Sinh</th> 
            <th>Họ Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Mã Lớp</th>


           
           
        </tr>
        
        
        <?php
        if (isset($_GET['malop'])) {
            $id = $_GET['malop'];}
            $sql ="select * from hocsinh where MaLop='$id'  ";
            $qr = mysqli_query($conn,$sql); 
            while($row = mysqli_fetch_assoc($qr)){
        ?>
        <tr >
            <td><?php echo $row["MaHS"];?></td>
            <td class="lop"><?php echo "<a href='FormNhapdiem.php?TenHS=".$row['TenHS']."'>".$row['TenHS']."</a>";?></a></td>
            <td><?php echo $row["NgaySinh"] ?></td>
            <td><?php echo $row["DiaChi"];?></td>
            <td><?php echo $row["MaLop"];?></td>
           
           
            
           
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