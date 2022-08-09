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
                  
                </div>
            </div>
        </div>
        <div class="menu-bar">
            <ul class="menu-bar-down">
            <li class="menu-item">
                    <a href="quantrivien_tp.php" class="menu-item__link  active">TRANG CHỦ</a>
                </li>
                <li class="menu-item">
                    <a href="./lms/Source/QTCTP/QLDS_TP.php" class="menu-item__link">QUẢN LÝ DANH SÁCH CẤP TRƯỜNG</a>
                </li>
                <li class="menu-item">
                    <a href="" class="menu-item__link">QUẢN LÝ MÔN HỌC CỦA KHỐI LỚP</a>
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
            <li class="menu-item-right">
            QUẢN TRỊ VIÊN
                
            </li>
            
        </div>
        
        <div class="content">
        <table style="margin: auto; width: 800px;background: rgb(247, 217, 207);"border="1px solid" class="" >
        <tr style="background: rgb(239, 186, 168); line-height:2.5;"><br>
            <h2  style="text-align:center; color:blue;">Thông tin trường
                    <?php
                            if (isset($_GET['tentruong'])) {
                            $id = $_GET['tentruong'];}
                            $sql ="select * from truonghoc where tentruong='$id'  ";
                            $qr = mysqli_query($conn,$sql); 
                            while($row = mysqli_fetch_assoc($qr)){
                    ?> 
                    <?php echo @$row["TenTruong"];?>
                    <?php }?> 
            </h2><br>
            <th>Mã Trường</th> 
            <th>Tên giáo viên</th>
            <th>Mã giáo viên</th>
        </tr>
        <?php
        if (isset($_GET['TenTruong'])) {
            $id = $_GET['TenTruong'];}
            $sql ="select truonghoc.MaTruong, TenGV,MaGV from truonghoc join giaovien on truonghoc.MaTruong=giaovien.MaTruong  where TenTruong='$id'  ";
            $qr = mysqli_query($conn,$sql); 
            while($row = mysqli_fetch_assoc($qr)){
        ?>
        <tr style="line-height:2.5;">
            <td><?php echo $row["MaTruong"];?></td>
            <td><?php echo $row["TenGV"] ?></td>
            <td><?php echo $row["MaGV"] ?></td>
          
        </tr>
        <?php }?>
        </table>
        <table style="margin: auto; width: 800px;  background: rgb(247, 217, 207);"border="1px solid" class="" >
        <tr style="background: rgb(239, 186, 168);line-height:2.5;">
            <th>Mã Trường</th> 
            <th>Tên học sinh</th>
            <th>Mã học sinh</th>
           
        <?php
        if (isset($_GET['TenTruong'])) {
            $id = $_GET['TenTruong'];}
            $sql ="select truonghoc.MaTruong, TenHS, MaHS from truonghoc  join hocsinh on hocsinh.MaTruong=truonghoc.MaTruong where TenTruong='$id'  ";
            $qr = mysqli_query($conn,$sql); 
            while($row = mysqli_fetch_assoc($qr)){
        ?>
        <tr style="line-height:2.5;">
            <td><?php echo $row["MaTruong"];?></td>
            <td><?php echo $row["TenHS"] ?></td>
            <td><?php echo $row["MaHS"] ?></td>
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