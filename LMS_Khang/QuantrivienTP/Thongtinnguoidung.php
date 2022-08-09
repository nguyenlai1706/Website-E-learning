<?php 
    include("../classphp/class.php");
    $p = new lms();
    $layid = 0;
    if(isset($_REQUEST['id']))
    {
        $layid = $_REQUEST['id'];
    }

	session_start();
	if(isset($_SESSION['matk']) && isset($_SESSION['user']) && isset($_SESSION['pass'])) {
		include("./clsFunction/clsLogin.php");	
		$q = new loginAccount();
		$q->confirmLogin($_SESSION['matk'], $_SESSION['user'], $_SESSION['pass']);
	}
	else {
		header('location: ./Source/adminLogin.php');	
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="../Font/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../JS/jquery.slim.min.js">
    <link rel="stylesheet" href="../JS/popper.min.js">
    <link rel="stylesheet" href="../Bootstrap/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="../css/styleqlnd.css">
    <link rel="stylesheet" href="../css/stlxoasua.css">
    <link rel="stylesheet" href="../css/thoigianbieu.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="../css/ttnd.scss">
    <title>QUẢN TRỊ VIÊN TP | XÓA NGƯỜI DÙNG</title>
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
                <span>Quản trị viên thành phố</span> <a href=""><strong>
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
                    <a href="quantrivien_tp.php" class="menu-item__link">TRANG CHỦ</a>
                </li>
                <li class="menu-item">
                    <a href="./lms/Source/QTCTP/QLDS_TP.php" class="menu-item__link">QUẢN LÝ DANH SÁCH CẤP TRƯỜNG</a>
                </li>
                <li class="menu-item">
                    <a href="../../../../LMS_1/Source/subjectmanagement.php" class="menu-item__link">QUẢN LÝ MÔN HỌC CỦA KHỐI LỚP</a>
                </li>
                <li class="menu-item">
                    <a href="themnguoidung.php" class="menu-item__link">THÊM NGƯỜI DÙNG</a>
                </li>
                <li class="menu-item">
                    <a href="xoanguoidung.php" class="menu-item__link">XÓA NGƯỜI DÙNG</a>
                </li>
                <li class="menu-item">
                    <a href="suanguoidung.php" class="menu-item__link active">SỬA NGƯỜI DÙNG</a>
                </li>
            </ul>
        </div>
        <div class="content">
        <?php
                $id = $_POST['txtid'];
            ?>
            <form action="" method="POST">
            <table style="width: 60%;">
                <tr>
                    <td style="background-color: whitesmoke; text-align: center; vertical-align: middle; height: 50px; border: none;"><strong>MÃ TÀI KHOẢN</strong></td>
                    <td><input type="text" name="txtid" id="txtid" value="<?php echo $p->laycot("select MaTK from taikhoan where MaTK = '$id' limit 1");?>" title="Mã tài khoản" style="background-color: whitesmoke; width: 100%; text-align: center; vertical-align: middle; height: 50px; border: none; font-size: 20px;" ></td>
                </tr>
                <tr>
                    <td style="background-color: wheat; text-align: center; vertical-align: middle; height: 50px; border: none;"><strong>TÊN TÀI KHOẢN</strong></td>
                    <td><input type="text" name="txtten" id="txtten" value="<?php echo $p->laycot("select TenTK from taikhoan where MaTK = '$id' limit 1");?>" title="Tên tài khoản" style="background-color: wheat; width: 100%; text-align: center; vertical-align: middle; height: 50px; border: none; font-size: 20px;"></td>
                </tr>
                <tr>
                    <td style="background-color: whitesmoke; text-align: center; vertical-align: middle; height: 50px; border: none;"><strong>MẬT KHẨU</strong></td>
                    <td><input type="text" name="txtmk" id="txtmk" value="<?php echo $p->laycot("select MatKhau from taikhoan where MaTK = '$id' limit 1");?>" title="Mật khẩu" style="background-color: whitesmoke; width: 100%; text-align: center; vertical-align: middle; height: 50px; border: none; font-size: 20px;"></td>
                </tr>
                <tr>
                    <td style="background-color: wheat; text-align: center; vertical-align: middle; height: 50px; border: none;"><strong>VAI TRÒ</strong></td>
                    <td>
                        <select name="txtvaitro" id="txtvaitro" value="" title="Vai trò" style="background-color: wheat; width: 100%; text-align: center; vertical-align: middle; height: 50px; border: none; font-size: 20px;">
                            <option value="01" selected="selected">Quản trị viên TP</option>
                            <option value="02">Quản trị viên trường</option>
                            <option value="03">Giáo viên</option>
                            <option value="04">Học sinh</option>
                        </select>
                    </td>
                </tr>  
                <tr>
                    <td colspan="2" style="background-color: whitesmoke; text-align: center; vertical-align: middle; height: 30px; border: none;">
                        <input type="submit" id="button" name="button" value="Sửa thông tin" style="background-color: aquamarine; border: 1px solid greenyellow; border-radius: 5px; height: 50px; width: 200px; margin-top: 20px; margin-bottom: 20px; font-size: 23px; box-shadow: 2px -2px;">
                    </td>
                </tr>    
                <?php
                switch (@$_POST['button'])
                {
                    case 'Sửa thông tin':
                        {
                            $id = $_REQUEST['txtid'];
                            $ten_tk = $_REQUEST['txtten'];
                            $matkhau = $_REQUEST['txtmk'];
                            $vaitro = $_REQUEST['txtvaitro'];
                            if($id!= null)
                            {
                                if($id != '' && $ten_tk != '' && $matkhau != '' && $vaitro != '')
                                {
                                    if($p->themxoasua("UPDATE taikhoan SET TenTK = '$ten_tk',MatKhau = '$matkhau',QuyenHan = '$vaitro' WHERE MaTK = '$id' LIMIT 1") == 1)
                                    {
                                        echo '<div class="alert-box success"><span>success: </span>Sửa thông tin người dùng thành công</div>';
                                    }
                                    else
                                    {
                                        echo '<div class="alert-box error"><span>error: </span>Sửa thông tin người dùng thất bại vui lòng kiểm tra lại</div>';
                                    }
                                }
                                else{
                                    echo '<div class="alert-box error"><span>error: </span>Thông tin người dùng chưa đầy đủ. Vui lòng nhập đầy đủ thông tin người dùng</div>';
                                }
                            }
                            else
                            {
                                echo '<div class="alert-box error"><span>error: </span>Vui lòng chọn người dùng cần sửa</div>';
                            }
                            break;
                        }
                }
            ?>      
            </table>
            </form>
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
                        <a href="https://sv.iuh.edu.vn/">Hehe</a>
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