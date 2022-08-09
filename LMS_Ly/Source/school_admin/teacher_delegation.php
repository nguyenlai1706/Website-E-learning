<?php
include("../../clsFunction/clsMain.php");
$p=new LMS();
$layMaGV=0;
if(isset($_REQUEST['MaGV']))
{
	$layMaGV=$_REQUEST['MaGV'];
}
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="../../Image/logo_lms1.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/teacher_delegation.css">
    <link rel="stylesheet" href="../../Font/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="../../CSS/bootstrap.css">
	<script src="../../js/jquery-3.6.0.min.js"></script>
	<script src="../../js/bootstrap.js"></script>
    <title>PHÂN QUYỀN GIÁO VIÊN TỪNG LỚP</title>
</head>

<body>
	<div class="container1">
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
                    <span>duythe.subad</span>
                </div>
            </div>
        </div>
        <div class="menu-bar">
            <ul class="menu-bar-down">
                <li class="menu-item">
                    <a href="../../indexSchool_admin.php" class="menu-item__link">TRANG CHỦ</a>
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
                        <a class="menu-item-right__link" href="#">QUẢN TRỊ VIÊN CẤP TRƯỜNG</a>
							<ul class="sub-menu">
								<li class="sub-item">
									<a href="./Source/school_admin/teacher_delegation.php" class="sub-link">PHÂN QUYỀN GIÁO VIÊN TỪNG LỚP</a>
								</li>
								<li class="sub-item">
									<a href="./TDSL.php" class="sub-link">TAỌ DANH SÁCH LỚP</a>
								</li>
								<li class="sub-item">
									<a href="./viewLopHoc.php" class="sub-link">CẬP NHẬT DANH SÁCH LỚP</a>
								</li>
								<li class="sub-item">
									<a href="./xemLH.php" class="sub-link">THỐNG KÊ SỐ LIỆU</a>
								</li>
							</ul>
                </li>

            </ul>
        </div>
        <div class="content">
			<h2 class="grant" style="color: red; padding-left: 20px;">PHÂN QUYỀN GIÁO VIÊN TỪNG LỚP</h2>
			<form action="" method="post" enctype="multipart/form-data" name="form" id="form" style="width: 50%">
				<table>
					<tr>
						<td><label><h6>Tên giáo viên</h6></label></td>
						<td>
							<?php
								$layMa_GV=$p->laycot("select MaGV from giaovien where MaGV='$layMaGV' limit 1");
									$p->loadcombo_danhmuc_giaovien("select MaGV, TenGV from giaovien order by MaGV asc", $layMa_GV)
							?>
						</td>
					</tr>
					<tr>
						<td><label><h6>Tên lớp</h6></label></td>
						<td>
							<?php
								$layMa_Lop=$p->laycot("select MaLop from giaovien where MaGV='$layMaGV' limit 1");
									$p->loadcombo_danhmuc_lop("select MaLop, TenLop from lophoc order by MaLop asc", $layMa_Lop);
							?>
						</td>
					</tr>
					<label for="txtid"></label>
					<input type="hidden" name="txtid" id="txtid" value="<?php echo $layMaGV?>">
					<tr>
						<td colspan="2">
							<center>
								<input type="submit" name="nut" id="nut" value="phân quyền" style="background-color: #6699FF; border: #6699FF; padding: 5px;border-radius: 5px;">
							</center>
						</td>
					</tr>
				</table>
				<?php
					$nut= isset($_POST['nut'])?$_POST['nut']:'';
					switch($nut)
					{
						case 'phân quyền';
						{
							$MaGV=$_REQUEST['txtid'];
							$MaLop=isset($_POST['lophoc'])?$_POST['lophoc']:'';
							if($MaGV)
							{
								if($p->themxoasua("UPDATE giaovien SET MaLop='$MaLop' WHERE MaGV='$MaGV' LIMIT 1")==1)
								{
									echo '<script>window.location.href="teacher_delegation.php"</script>';
								}
								else
								{
									echo 'Thêm lớp học không thành công';
								}
							}
							else
							{
								echo '<center style="color: red">Vui lòng chọn giáo viên!</center>';
							}
						}
					}
				?><br>
			</form>
			<?php
				if($layMaGV)
				{
					$p->load_ds_giaovien("select * from giaovien where MaGV='$layMaGV' order by MaGV asc");
				}
				else
				{
					$p->load_ds_giaovien("select * from giaovien order by MaGV asc");
				}
			?>
			<br><br>
			
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