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
    <link rel="stylesheet" href="../css/styleqlnd.css">
    <link rel="stylesheet" href="../css/stlxoasua.css">
    <link rel="stylesheet" href="../css/thoigianbieu.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="../css/modal.css">
    <script src="../js/xoa-sua_qtvtp.js"></script>
    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="../Font/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../JS/jquery.slim.min.js">
    <link rel="stylesheet" href="../JS/popper.min.js">
    <link rel="stylesheet" href="../Bootstrap/js/bootstrap.bundle.min.js">
    <title>QUẢN TRỊ VIÊN TP | SỬA NGƯỜI DÙNG</title>
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
                    <a href="../../indexAdmin.php" class="menu-item__link">TRANG CHỦ</a>
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
                    <a href="suanguoidung.php" class="menu-item__link  active">SỬA NGƯỜI DÙNG</a>
                </li>
            </ul>
        </div>
        <div class="content">
        <form id="myform" name="myform" method="post" action="Thongtinnguoidung.php">
            <h2>Quản Lý Người Dùng</h2>
	        <input type="submit" class="snip1317" name="button" id="myBtn" value="Sửa" style="float: right;">
<div class="table-wrapper">
<?php
$p->load_ds_nguoidung("SELECT * FROM taikhoan ORDER BY QuyenHan ASC");
?>
<input type="hidden" name="txtid" id="txtid" value="<?php echo $p->laycot("select MaTK from taikhoan where MaTK = '$layid' limit 1");?>">
</div>
<?php
			switch(@$_POST['button'])
			{
				case 'Xóa':
                    {
                        $id = $_REQUEST['txtid'];
                        if($id != null)
                        {
                            if($p->themxoasua("DELETE FROM taikhoan WHERE MaTK = '$layid' LIMIT 1") == 1)
                            {
                                echo '<div class="alert-box success"><span>success: </span>Xóa người dùng '.$layid.' thành công</div>';
                            }
                            else
                            {
                                echo '<div class="alert-box error"><span>error: </span>Xóa người dùng thất bại vui lòng kiểm tra lại</div>';
                            }
                        }
                        else
                        {
                            echo '<div class="alert-box error"><span>error: </span>Vui lòng chọn người dùng cần xóa</div>';
                        }
                        break;
                    }
                    case 'Sửa người dùng':
                        {
                            $matk = $_REQUEST['txtid'];
                            $tentk = $_REQUEST['txtten'];
                            $vaitro = $_REQUEST['vaitro'];
                            @$maqtv = $_REQUEST['maqtv'];
                            if($id!= null)
                            {
                                if($matk != '' && $tentk != '' && $vaitro != '' && $maqtv != '')
                                {
                                    if($p->themxoasua("UPDATE taikhoan SET MaTK = '$matk',TenTK = '$tentk',QuyenHan = '$vaitro',MaQTVTP = '$maqtv' WHERE MaTK = '$layid' LIMIT 1") == 1)
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