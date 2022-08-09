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
    <script src="./bootstrap-4.5.3-dist/js/jquery-3.6.0.min.js"></script>
    <script src="./bootstrap-4.5.3-dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="../Font/fontawesome/css/all.min.css">
    <title>TRANG CHỦ</title>
</head>
<style>
</style>
<script>
    var count=1;
  $(document).ready(function()
  {
    function ktk()
        {
            var regten=/^([0-9])$/;
            var ten=$("#ttk").val();
            if(regten.test(ten))
            {
                $("#tk").html("*")
               return true;
            }
            else
            {
                $("#tk").html("Nhập số")
                return false;
            }
        }
        $("#ttk").blur(ktk)
  //----------//
              function ktgk()
              {
                var regten=/^([0-9])$/;
                var ten=$("#tgk").val();
                if(regten.test(ten))
                {
                    $("#gk").html("*")
                return true;
                }
                else
                {
                    $("#gk").html("Nhập số")
                    return false;
                }
                }
              $("#tgk").blur(ktgk)
              //----------//
              function ktck()
              {
                var regten=/^([0-9])$/;
                var ten=$("#tck").val();
                if(regten.test(ten))
                {
                    $("#ck").html("*")
                return true;
                }
                else
                {
                    $("#ck").html("Nhập số")
                    return false;
                }
                }
              $("#tck").blur(ktck)

     })
</script>
<body>
<?php
if (isset($_GET['TenHS'])) {
    $HoTen = $_GET['TenHS'];
}
?>
<?php
    $sql = "select * from hocsinh where TenHS='$HoTen'";
    $qr = mysqli_query($conn, $sql);
    $rs = mysqli_fetch_array($qr);
?>
<?php
if (isset($_POST["sm"])) {
    
    $TK= $_POST["tk"];
    $GK = $_POST["gk"];
    $CK = $_POST["ck"];
   $TB=($TK+$GK*2+$CK*3)/6;
    if ( $TK != "" && $GK != "" && $CK != "" &&$TB!="") 
    {
        
        $sql = "update hocsinh set DiemTK='$TK', DiemGK='$GK',DiemCK='$CK',DiemTB='$TB' where TenHS='$HoTen'"  ;
        $qr = mysqli_query($conn, $sql);
        echo"<script>alert('Nhập Điểm Thành công!!!')</script>";
        echo header("refresh: 0;url='vd.php'");
        
    }
    else{echo "lỗi";}
}

?>

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
                            <a href="#" class="sub-link">THU BÀI TỰ LUẬN</a>
                        </li>
                        <li class="sub-item">
                            <a href="../GiaoVien/buildMultiChoice.php" class="sub-link">TẠO CÂU HỎI TRẮC NGHIỆM</a>
                        </li>
                        <li class="sub-item">
                            <a href="../GiaoVien/buildEssay.php" class="sub-link">TẠO CÂU HỎI TỰ LUẬN</a>
                        </li>
                        <li class="sub-item">
                            <a href="" class="sub-link">TẠO ĐỀ KIỂM TRA</a>
                        </li>
                        <li class="sub-item">
                            <a href="../GiaoVien/viewStatistical.php" class="sub-link">XEM THỐNG KÊ BÀI KIỂM TRA</a>
                        </li>
                        <li class="sub-item">
                            <a href="#" class="sub-link">LẬP KẾ HOẠCH THỜI GIAN BIỂU</a>
                        </li>
                        <li class="sub-item">
                            <a href="../GiaoVien/DSlop.php" class="sub-link">NHẬP ĐIỂM</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div><br><br>
        <div class="content">
                <p style="text-align:left; color:black; padding: 30px; margin-top:100px; backgroud:gray;" > <i class="fas fa-user"></i>
                <b>
                <?php
                            if (isset($_GET['TenHS'])) {
                            $id = $_GET['TenHS'];}
                            $sql ="select * from hocsinh where TenHS='$id'  ";
                            $qr = mysqli_query($conn,$sql); 
                            while($row = mysqli_fetch_assoc($qr)){
                    ?> 
                    <?php echo $row["TenHS"];?>
                    <?php }?> 
                            </b>
                <p>
            <form action="#" method="post" enctype="multipart/form-data" >          <br>
            <table style="margin: auto; width: 700px; text-align: center; background: pink;"  class="" > 
            <tr>
                <th>Điểm thường kỳ</th> 
                <th>Điểm Giữa Kỳ</th>
                <th>Điểm Cuối Kỳ</th>
            </tr>
            <tr>
                <th> <input type="text" name="tk" id="ttk" require value="<?php echo $rs['DiemTK'];?>"><div id="tk"></div></th> </th> 
                <th> <input type="text" name="gk" id="tgk" require value="<?php echo $rs['DiemGK'];?>"> <div id="gk"></div></th>
                <th> <input type="text" name="ck" id="tck" require value="<?php echo $rs['DiemCK'];?>"> <div id="ck"></div></th>
            
            </tr>
            <tr >
            
                <td></td>
                    <td>
                <br><br>
                        <input type="submit" name="sm" id="" value="Thêm">
                        <input class="button" type="button" onclick="window.location.replace('DSlop.php')" value="Cancel" /> 
                    </td>
            
            </tr>
            </table>
            <form>
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