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
    <link rel="stylesheet" href="../css/styleqlnd.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="../css/thoigianbieu.css">
    <script src="../JS/jquery-3.6.0.js"></script>
    <script src="../JS/indexjs.js"></script>
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="../js/xoa-sua_qtvtp.js"></script>
    <title>QUẢN TRỊ VIÊN TP | THÊM NGƯỜI DÙNG</title>
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
                    <a href="themnguoidung.php" class="menu-item__link active">THÊM NGƯỜI DÙNG</a>
                </li>
                <li class="menu-item">
                    <a href="xoanguoidung.php" class="menu-item__link">XÓA NGƯỜI DÙNG</a>
                </li>
                <li class="menu-item">
                    <a href="suanguoidung.php" class="menu-item__link">SỬA NGƯỜI DÙNG</a>
                </li>
            </ul>
        </div>
        <div class="content">
        <div class="title">
                <h3><strong>Thêm người dùng</strong></h3>
        </div>
        <div class="body">
            <form id="formthemnguoidung" action="" method="post">
                <table border="1" width="80%" style="text-align: center;margin-top: 10px;margin-bottom: 10px;">
                    <tr>
                        <td colspan="2"><h3>Form điền thông tin người dùng</h3></td>
                    </tr>
                    <tr>
                    <tr>
                        <td width="30%"  height="30px">Mã Tài Khoản</td>
                        <td>
                            <strong><input type="text" name="txtid" id="txtid" style="background-color:aliceblue;border: none;height: 40px;font-size= 30px" required pattern = "[A-Z]{2}[0-9]{2}[A-Z]{3}"></strong>
                        </td>
                    </tr>
                        <td width="30%"  height="30px">Quản Trị Viên Cấp Quyền</td>
                        <td>
                            <strong><input type="text" name="maqtv" id="maqtv" style="background-color:aliceblue;border: none;height: 40px;font-size= 30px; text-align: center;" readonly value="<?php if(isset($_SESSION['matk'])&&isset($_SESSION['user'])&&isset($_SESSION['pass'])) {
						echo $_SESSION['matk'];
					} ?>" required></strong>
                        </td>
                    </tr>
                    <tr>
                        <td width="30%"  height="30px">Tên đăng nhập</td>
                        <td>
                            <input title="Tên đăng nhập" type="text" name="txtten" id="txtten" style="background-color:aliceblue;border: none;height: 40px;font-size= 30px" required pattern = "[A-Za-z]{5-30}">
                        </td>
                    </tr>
                    <tr>
                        <td width="30%"  height="30px">Vai trò</td>
                        <td border="1">
                            <Select class="vaitro" name="vaitro" id="vaitro">
                                <option value="01">Quản trị viên thành phố</option>
                                <option value="02">Quản trị viên trường</option>
                                <option value="03">Giáo viên</option>
                                <option value="04">Học Sinh</option>
                            </Select>
                        </td>
                    </tr>
                </table>
                <div class="button">
                <!-- <input type="submit" value="Hủy" class="huy">
                <input type="submit" value="Thêm người dùng" class="addmem"> -->
                <input type="submit" id="button" name="button" class="snip1582" value="Hủy">
                <input type="submit" id="button" name="button" class="snip1583" value="Thêm người dùng">
            </div>
            </form>
            <div class="tb" style="text-align: center;padding: 30px;font-size: 25px;">
            <?php
                    switch(@$_POST['button'])
                    {
                        case 'Thêm người dùng':
                            {
                                $matk = $_REQUEST['txtid'];
                                $tentk = $_REQUEST['txtten'];
                                $vaitro = $_REQUEST['vaitro'];
                                @$maqtv = $_REQUEST['maqtv'];
                                if($matk != '' && $tentk != '' && $vaitro != '' && $maqtv != '')
                                {
                                    if($p->themxoasua("INSERT INTO taikhoan(MaTK,TenTK,QuyenHan,MaQTVTP) VALUES('$matk','$tentk','$vaitro','$maqtv')")==1)
                                    {
                                        echo '<div class="alert-box success"><span>success: </span>Người dùng đã được thêm thành công</div>';
                                    }
                                    else
                                    {
                                        echo '<div class="alert-box error"><span>error: </span>Thêm người dùng thất bại vui lòng kiểm tra lại thông tin</div>';
                                    }
                                }
                                else
                                {
                                    echo '<div class="alert-box error"><span>error: </span>Vui lòng nhập đầy đủ thông tin tài khoản!!</div>';
                                }
                                break;
                            }
                    }
                ?>
            </div>
        </div>
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