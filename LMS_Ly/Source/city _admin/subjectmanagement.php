<?php
include("../../clsFunction/clsMain.php");
$p=new lms();
$layMaKhoiLop=0;
if(isset($_REQUEST['MaKhoiLop']))
{
	$layMaKhoiLop=$_REQUEST['MaKhoiLop'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="../../Image/logo_lms1.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/subjectmanagement.css">
    <link rel="stylesheet" href="../../Font/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="../../CSS/bootstrap.css">
	<script src="../../js/jquery-3.6.0.min.js"></script>
	<script src="../../js/bootstrap.js"></script>
    <title>QUẢN LÝ MÔN HỌC CỦA KHỐI LỚP</title>
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
                    <span>thanhtri.ad</span>
                </div>
            </div>
        </div>
        <div class="menu-bar">
            <ul class="menu-bar-down">
                <li class="menu-item">
                    <a href="../../indexAdmin.php" class="menu-item__link">TRANG CHỦ</a>
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
                        <a class="menu-item-right__link" href="#">QUẢN TRỊ VIÊN</a>
                        <ul class="sub-menu">
                            <li class="sub-item">
                                <a href="#" class="sub-link">QUẢN LÝ DANH SÁCH CẤP TRƯỜNG</a>
                            </li>
							<li class="sub-item">
                                <a href="subjectmanagement.php" class="sub-link">QUẢN LÝ MÔN HỌC CỦA KHỐI LỚP</a>
                            </li>
                            <li class="sub-item">
                                <a href="#" class="sub-link">THÊM NGƯỜI DÙNG</a>
                            </li>
                            <li class="sub-item">
                                <a href="#" class="sub-link">XOÁ NGƯỜI DÙNG</a>
                            </li>
                            <li class="sub-item">
                                <a href="#" class="sub-link">SỬA NGƯỜI DÙNG</a>
                            </li>
                        </ul>
                </li>
              
            </ul>
        </div>
        <div class="content">
			<h2 class="grant" style="color: red; padding-left: 20px;">THÊM MÔN HỌC CỦA KHỐI LỚP</h2>
			<form action="" method="post" enctype="multipart/form-data" name="form" id="form" style="width: 50%;">
				<table>
					<tr>
						<td><label><h6>Tên khối lớp</h6></label></td>
						<td>
							<?php
								$layMa_KhoiLop=$p->laycot("select MaKhoiLop from khoilop where MaKhoiLop='$layMaKhoiLop' limit 1");
					   				$p->loadcombo_danhmuc_khoilop("select MaKhoiLop, TenKhoiLop from khoilop order by MaKhoiLop asc", $layMa_KhoiLop);
							?>
						</td>
					</tr>
					<tr>
						<td><label><h6>Môn học</h6></label></td>
						<td>
							<?php
								$layMaMH=$p->laycot("select MaMH from khoilop where MaKhoiLop='$layMaKhoiLop' limit 1");
					   				$p->loadcombo_danhmuc_monhoc("select MaMH, TenMH from monhoc order by MaMH asc", $layMaMH);
							?>
						</td>
					</tr>
					<label for="txtid"></label>
					<input type="hidden" name="txtid" id="txtid" value="<?php echo $layMaKhoiLop?>">
					<tr>
						<td colspan="2" >
							<center>
								
								<input type="submit" name="nut" id="nut" style="" value="thêm"/>
							</center>			
						</td>
					</tr>
					</tr>
				</table><br><br><br>
				
			</form> 
			<?php
					$nut = isset($_POST['nut'])?$_POST['nut']:''; 	
					switch($nut)
					{
										
						case 'thêm';
						{
							$MaKhoiLop=$_REQUEST['txtid'];
							$MaMH=isset($_POST['monhoc'])? $_POST['monhoc']:''; 											
							$TenKhoiLop=isset($_POST['khoilop'])? $_POST['khoilop']:''; 
							if($MaKhoiLop>0)
							{
								if($p->themxoasua("UPDATE khoilop SET MaMH='$MaMH' WHERE MaKhoiLop='$MaKhoiLop' LIMIT 1")==1)
								{
									echo '<script>window.location.href="subjectmanagement.php"</script>';
								}
								else
								{
									echo 'Thêm môn học không thành công.';	
								}
							}
							else
							{
								echo '<center style="color: red">Vui lòng chọn khối lớp!</center>';	
							}
											
							break;
						}		

					}
				?>
			<?php
				if($layMaKhoiLop>0)
				{
					$p->load_ds_khoilop("select * from khoilop where MaKhoiLop='$layMaKhoiLop' order by MaKhoiLop asc");
				}
				else
				{
					$p->load_ds_khoilop("select * from khoilop order by MaKhoiLop asc");
				}
			?>
			<br>
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