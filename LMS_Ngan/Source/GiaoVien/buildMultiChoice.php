<?php 
	include("../clsFunction/clsMain.php");
	$p = new LMS();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/mainn.css">
    <link rel="stylesheet" href="../Font/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <script src="./js/jquery-3.6.0.js"></script>
    <script src="./Bootstrap/js/bootstrap.min.js"></script>
    <title>TẠO CÂU HỎI TRẮC NGHIỆM</title>
    <script type="text/javascript">
        $(document).ready(function(){

            $("#codeCH").blur(function(){
                var codeCH = $(this).val();
                var regCodeCH = /^(C)[0-9]{2}(K)[6-9]{1}(TN)$/;
                if(regCodeCH.test(codeCH)) {
                    return true;
                }
                else {
                    alert("Mã câu hỏi sai định dạng!");
                    return false;
                }

            })

        })
    </script>
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
            <div class="user-avatar">
                    <i class="fas fa-user-circle avatar"></i>
                    <span>
                    	<?php 
                            if(isset($_SESSION['matk'])&&isset($_SESSION['user'])&&isset($_SESSION['pass'])) {
							    echo $_SESSION['user'];
						    }
                        ?>
                    </span>
                
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
                        <a href="../LONG_BAOCAO/?mod=users&action=essay" class="sub-link">THU BÀI TỰ LUẬN</a>
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
            <div class="titleBuild">
                TẠO CÂU HỎI TRẮC NGHIỆM
            </div>
            <form action="" method="post" id="frmBuildMulti" class="col-10">
                <div class="form-group">
                    <label for="codeCH">Mã câu hỏi</label>
                    <input type="text" name="codeCH" id="codeCH" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="codeKL">Mã khối lớp</label>
                    <?php 
						$p->loadCombo_KhoiLop("select * from khoilop order by makhoilop asc");
					?>
                </div>
                <div class="form-group">
                    <label for="codeMH">Mã môn học</label>
                    <?php 
						$p->loadCombo_MonHoc("select * from monhoc order by mamonhoc asc");
					?>
                </div>
                <div class="form-group">
                    <label for="codeGV">Mã giáo viên</label>
                    <?php 
						$p->loadCombo_GiaoVien("select * from giaovien order by MaGV asc");
					?>
                </div>
                <div class="form-group">
                    <label for="contentMulti">Nội dung câu hỏi</label>
                    <input type="text" name="contentMulti" id="contentMulti" class="form-control" required>
                </div>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" name="answer1" placeholder="Đáp án 1">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="answer2" placeholder="Đáp án 2">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="answer3" placeholder="Đáp án 3">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="answer4" placeholder="Đáp án 4">
                    </div>
                </div>
                <div class="btn-option-2">
                    <input type="reset" class="btn btn-danger" name="btn" id="btn-reset" value="Huỷ">
                    <input type="submit" class="btn btn-info" name="btn" id="btn-submit" value="Xác nhận">
                </div>
                <div align="center" class="alertResult">
                	<?php 
						$btn = isset($_POST['btn'])?$_POST['btn']:'';
						switch($btn) {
							case 'Xác nhận': {
								$codeCH = $_REQUEST['codeCH'];
								$codeKL = $_REQUEST['codeKL'];
								$codeMH = $_REQUEST['codeMH'];
								$codeGV = $_REQUEST['codeGV'];
								$contentMulti = $_REQUEST['contentMulti'];
								$ans1 = $_REQUEST['answer1'];
								$ans2 = $_REQUEST['answer2'];
								$ans3 = $_REQUEST['answer3'];
								$ans4 = $_REQUEST['answer4'];
								
								if($codeCH!='' && $contentMulti!='') {
									if($p->buildMulti("INSERT INTO cauhoi_tn(macauhoi,makhoilop,mamonhoc,magiaovien,noidung,dapan1,dapan2,dapan3,dapan4) 
											VALUES ('$codeCH', '$codeKL', '$codeMH', '$codeGV', '$contentMulti', '$ans1', '$ans2', '$ans3', '$ans4')")==1) {
										echo 'Tạo câu hỏi thành công!';	
									}
									else {
										echo 'Tạo câu hỏi không thành công!';
									}	
								}
								else {
									echo 'Vui lòng nhập đầy đủ thông tin!';
								}
								break;	
							}	
						}
					?>
                </div>
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