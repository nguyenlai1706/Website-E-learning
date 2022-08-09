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
    table{ background: azure;}
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
           
            <ul class="menu-bar-option">
                <li class="menu-item-right">
                        <a class="menu-item-right__link" href="#">QUẢN TRỊ VIÊN</a>
                </li>   
            </ul>
        </div>
        <div class="content">
        <table style="margin: auto; width: 800px;  text-align:center;" border="1px solid" >
        <h2 style="text-align:center; ">THÔNG TIN QUẢN TRỊ VIÊN CẤP TRƯỜNG</h2>
            <tr style="color:brown; " >
                <th>MaQTVT</th> 
                <th>Họ và tên</th>
                <th>Ngày sinh</th>
                <th>Email</th>
                <th>MaQTVTP</th>
                <th><i class="fas fa-window-close"></i></th>
            </tr>
            <?php
                $sql ="select * from quantrivien_truong";
                $qr = mysqli_query($conn,$sql); 
                while($row = mysqli_fetch_assoc($qr)){
            ?>
            <tr id="l">
                <td><?php echo $row["MaQTVT"];?></td>
                <td><?php echo $row["TenQTV"];?></td>
                <td><?php echo $row["NgaySinh"];?></td>
                <td><?php echo $row["Email"] ?></td>
                <td><?php echo $row["MaQTVTP"];?></td>
                <td><a href="delete.php?MaQTVT=<?php echo $row['MaQTVT']; ?>" style="text-decoration:none;">xóa</a> </td>
            </tr>
            <?php }?>
            </table>
        <table  style="margin: auto; width: 800px;  text-align:center;" border="1px solid">
        <h2 style="text-align:center; ">THÔNG TIN GIÁO VIÊN</h2>
            <tr style="color:brown; " >
                    <th>MaGV</th> 
                    <th>Họ và tên</th>
                    <th>Ngày sinh</th>
                    <th>SDT</th>
                    <th>Địa chỉ</th>
                    <th>Email</th>
                    <th><i class="fas fa-window-close"></i></th>
                </tr>
            <?php
                $sql ="select * from giaovien";
                $qr = mysqli_query($conn,$sql); 
                while($row = mysqli_fetch_assoc($qr))
            {?>
            <tr id="l">
                <td><?php echo $row["MaGV"];?></td>
                <td><?php echo $row["TenGV"];?></td>
                <td><?php echo $row["NgaySinh"];?></td>
                <td><?php echo $row["SDT"] ?></td>
                <td><?php echo $row["DiaChi"];?></td>
                <td><?php echo $row["Email"];?></td>
                <td><a href="delete.php?MaGV=<?php echo $row['MaGV']; ?>" style="text-decoration:none;">xóa</a> </td>
               </tr>
            <?php }?>
        </table>
        <table  style="margin: auto; width: 800px;  text-align:center;" border="1px solid">
        <h2 style="text-align:center; ">THÔNG TIN HỌC SINH</h2>
            <tr style="color:brown; " >
                    <th>MaHS</th> 
                    <th>Họ và tên</th>
                    <th>Ngày sinh</th>
                    <th>Địa chỉ</th>
                    <th>MaLop</th>
                    <th><i class="fas fa-window-close"></i></th>
            </tr>
            <?php
                $sql ="select * from hocsinh";
                $qr = mysqli_query($conn,$sql); 
                while($row = mysqli_fetch_assoc($qr))
            {?>
            <tr id="l">
                <td><?php echo $row["MaHS"];?></td>
                <td><?php echo $row["TenHS"];?></td>
                <td><?php echo $row["NgaySinh"];?></td>
                <td><?php echo $row["DiaChi"];?></td>
                <td><?php echo $row["MaLop"];?></td>
                <td><a href="delete.php?MaHS=<?php echo $row['MaHS']; ?>" style="text-decoration:none;">xóa</a> </td>
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