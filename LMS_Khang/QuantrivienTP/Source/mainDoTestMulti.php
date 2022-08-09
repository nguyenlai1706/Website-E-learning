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
    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="../Font/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <script src="../JS/jquery-3.6.0.js"></script>
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <title>TRANG LÀM BÀI KIỂM TRA</title>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#btn-submit").click(function(){            
                alert("Điểm của bạn là: 10 điểm");
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
            <div class="user-login">
                <div class="user-avatar">
                    <i class="fas fa-user-circle avatar"></i>
                    <span>NGUYEN CHI THANH</span>
                </div>
            </div>
        </div>
        <div class="menu-bar">
            <ul class="menu-bar-down">
                <li class="menu-item">
                    <a href="../indexStudent.php" class="menu-item__link">TRANG CHỦ</a>
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
                    <a class="menu-item-right__link" href="#">HỌC SINH</a>
                    <ul class="sub-menu">
                        <li class="sub-item">
                            <a href="#" class="sub-link">XEM ĐIỂM</a>
                        </li>
                        <li class="sub-item">
                        <a href="./Source/doTest_Multi.html" class="sub-link">LÀM BÀI KIỂM TRA TRẮC NGHIỆM</a>
                        </li>
                        <li class="sub-item">
                            <a href="#" class="sub-link">NỘP BÀI KIỂM TRA TỰ LUẬN</a>
                        </li>
                        <li class="sub-item">
                            <a href="#" class="sub-link">XEM THỜI GIAN BIỂU</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="content">
            <div class="title-doTest">
                BÀI KIỂM TRA TRẮC NGHIỆM 15 PHÚT - MÔN TOÁN 6 ĐẠI SỐ
            </div>
            <div class="doTest-content">
                <form action="" method="post" id="frmTest">
                    <div class="form-group spacing">
                        <label for=""><b>Câu hỏi số 1</b>: <?php $p->loadQuestion("select noidung from cauhoi_tn where macauhoi='C01K6TN' LIMIT 1"); ?></label> <br>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label">
                                <input type="radio" name="answer1" id="answer1" class="form-check-input" value="<?php $p->loadAnswer1("select dapan1 from cauhoi_tn where macauhoi='C01K6TN'"); ?>">
                                <?php $p->loadAnswer1("select dapan1 from cauhoi_tn where macauhoi='C01K6TN'"); ?>
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label">
                                <input type="radio" name="answer1" id="answer1" class="form-check-input" value="<?php $p->loadAnswer2("select dapan2 from cauhoi_tn where macauhoi='C01K6TN'"); ?>" checked>
                                <?php $p->loadAnswer2("select dapan2 from cauhoi_tn where macauhoi='C01K6TN'"); ?>
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label">
                                <input type="radio" name="answer1" id="answer1" class="form-check-input" value="<?php $p->loadAnswer3("select dapan3 from cauhoi_tn where macauhoi='C01K6TN'"); ?>">
                                <?php $p->loadAnswer3("select dapan3 from cauhoi_tn where macauhoi='C01K6TN'"); ?>
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label">
                                <input type="radio" name="answer1" id="answer1" class="form-check-input" value="<?php $p->loadAnswer4("select dapan4 from cauhoi_tn where macauhoi='C01K6TN'"); ?>">
                                <?php $p->loadAnswer4("select dapan4 from cauhoi_tn where macauhoi='C01K6TN'"); ?>
                            </label>
                        </div>
                    </div>

                    <div class="form-group spacing">
                        <label for=""><b>Câu hỏi số 2</b>: <?php $p->loadQuestion("select noidung from cauhoi_tn where macauhoi='C02K6TN'"); ?></label> <br>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label">
                                <input type="radio" name="answer2" id="answer2" class="form-check-input" value="<?php $p->loadAnswer1("select dapan1 from cauhoi_tn where macauhoi='C02K6TN'"); ?>">
                                 <?php $p->loadAnswer1("select dapan1 from cauhoi_tn where macauhoi='C02K6TN'"); ?>
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label">
                                <input type="radio" name="answer2" id="answer2" class="form-check-input" value="<?php $p->loadAnswer2("select dapan2 from cauhoi_tn where macauhoi='C02K6TN'"); ?>">
                                <?php $p->loadAnswer2("select dapan2 from cauhoi_tn where macauhoi='C02K6TN'"); ?>
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label">
                                <input type="radio" name="answer2" id="answer2" class="form-check-input" value="<?php $p->loadAnswer3("select dapan3 from cauhoi_tn where macauhoi='C02K6TN'"); ?>">
                                 <?php $p->loadAnswer3("select dapan3 from cauhoi_tn where macauhoi='C02K6TN'"); ?>
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label">
                                <input type="radio" name="answer2" id="answer2" class="form-check-input" value="<?php $p->loadAnswer4("select dapan4 from cauhoi_tn where macauhoi='C02K6TN'"); ?>" checked>
                                <?php $p->loadAnswer4("select dapan4 from cauhoi_tn where macauhoi='C02K6TN'"); ?>
                            </label>
                        </div>
                    </div>

                    <div class="form-group spacing">
                        <label for=""><b>Câu hỏi số 3</b>: <?php $p->loadQuestion("select noidung from cauhoi_tn where macauhoi='C03K6TN'"); ?></label> <br>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label">
                                <input type="radio" name="answer3" id="answer3" class="form-check-input" value="<?php $p->loadAnswer1("select dapan1 from cauhoi_tn where macauhoi='C03K6TN'"); ?>">
                                 <?php $p->loadAnswer1("select dapan1 from cauhoi_tn where macauhoi='C03K6TN'"); ?>
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label">
                                <input type="radio" name="answer3" id="answer3" class="form-check-input" value="<?php $p->loadAnswer2("select dapan2 from cauhoi_tn where macauhoi='C03K6TN'"); ?>">
                                <?php $p->loadAnswer2("select dapan2 from cauhoi_tn where macauhoi='C03K6TN'"); ?>
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label">
                                <input type="radio" name="answer3" id="answer3" class="form-check-input" value="<?php $p->loadAnswer3("select dapan3 from cauhoi_tn where macauhoi='C03K6TN'"); ?>">
                                 <?php $p->loadAnswer3("select dapan3 from cauhoi_tn where macauhoi='C03K6TN'"); ?>
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label">
                                <input type="radio" name="answer3" id="answer3" class="form-check-input" value="<?php $p->loadAnswer4("select dapan4 from cauhoi_tn where macauhoi='C03K6TN'"); ?>" checked>
                                <?php $p->loadAnswer4("select dapan4 from cauhoi_tn where macauhoi='C03K6TN'"); ?>
                            </label>
                        </div>
                    </div>

                    <div class="form-group spacing">
                        <label for=""><b>Câu hỏi số 4</b>: <?php $p->loadQuestion("select noidung from cauhoi_tn where macauhoi='C04K6TN'"); ?></label> <br>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label">
                                <input type="radio" name="answer4" id="answer4" class="form-check-input" value="<?php $p->loadAnswer1("select dapan1 from cauhoi_tn where macauhoi='C04K6TN'"); ?>">
                                 <?php $p->loadAnswer1("select dapan1 from cauhoi_tn where macauhoi='C04K6TN'"); ?>
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label">
                                <input type="radio" name="answer4" id="answer4" id="answer4" class="form-check-input" value="<?php $p->loadAnswer2("select dapan2 from cauhoi_tn where macauhoi='C04K6TN'"); ?>" checked>
                                <?php $p->loadAnswer2("select dapan2 from cauhoi_tn where macauhoi='C04K6TN'"); ?>
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label">
                                <input type="radio" name="answer4" id="answer4" class="form-check-input" value="<?php $p->loadAnswer3("select dapan3 from cauhoi_tn where macauhoi='C04K6TN'"); ?>">
                                 <?php $p->loadAnswer3("select dapan3 from cauhoi_tn where macauhoi='C04K6TN'"); ?>
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label">
                                <input type="radio" name="answer4" id="answer4" class="form-check-input" value="<?php $p->loadAnswer4("select dapan4 from cauhoi_tn where macauhoi='C04K6TN'"); ?>">
                                <?php $p->loadAnswer4("select dapan4 from cauhoi_tn where macauhoi='C04K6TN'"); ?>
                            </label>
                        </div>
                    </div>

                    <div class="form-group spacing">
                        <label for=""><b>Câu hỏi số 5</b>: <?php $p->loadQuestion("select noidung from cauhoi_tn where macauhoi='C05K6TN'"); ?></label> <br>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label">
                                <input type="radio" name="answer5" id="answer5" class="form-check-input" value="<?php $p->loadAnswer1("select dapan1 from cauhoi_tn where macauhoi='C05K6TN'"); ?>">
                                 <?php $p->loadAnswer1("select dapan1 from cauhoi_tn where macauhoi='C05K6TN'"); ?>
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label">
                                <input type="radio" name="answer5" id="answer5" class="form-check-input" value="<?php $p->loadAnswer2("select dapan2 from cauhoi_tn where macauhoi='C05K6TN'"); ?>" checked>
                                <?php $p->loadAnswer2("select dapan2 from cauhoi_tn where macauhoi='C05K6TN'"); ?>
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label">
                                <input type="radio" name="answer5" id="answer5" class="form-check-input" value="<?php $p->loadAnswer3("select dapan3 from cauhoi_tn where macauhoi='C05K6TN'"); ?>">
                                 <?php $p->loadAnswer3("select dapan3 from cauhoi_tn where macauhoi='C05K6TN'"); ?>
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label for="" class="form-check-label">
                                <input type="radio" name="answer5" id="answer5" class="form-check-input" value="<?php $p->loadAnswer4("select dapan4 from cauhoi_tn where macauhoi='C05K6TN'"); ?>">
                                <?php $p->loadAnswer4("select dapan4 from cauhoi_tn where macauhoi='C05K6TN'"); ?>
                            </label>
                        </div>
                    </div>
                    <div class="confirmTest">
                        <div class="btn-confirm">
                                <input type="submit" class="btn btn-info" name="btn" id="btn-submit" value="NỘP BÀI">
                        </div>
                    </div>
                    <div class="">
                    	<?php 
							$btn = isset($_POST['btn'])?$_POST['btn']:'';
							switch($btn) {
								case 'NỘP BÀI': {
									
									if(isset($_POST['answer1'])&&isset($_POST['answer2'])&&isset($_POST['answer3'])&&isset($_POST['answer4'])&&isset($_POST['answer4'])) {
										$answer1 = $_POST['answer1'];	
										$answer2 = $_POST['answer2'];	
										$answer3 = $_POST['answer3'];	
										$answer4 = $_POST['answer4'];	
										$answer5 = $_POST['answer5'];
                                        
                                        
                                        
										echo '<table border="1" class="table table-striped" id="tbl">
                    							<tr>
                        							<td colspan="5" align="center" valign="middle"><strong>KẾT QUẢ BÀI KIỂM TRA</strong></td>
                    							</tr>
                    							<tr>
													<td align="center">Câu hỏi 1</td>
													<td align="center">Câu hỏi 2</td>
													<td align="center">Câu hỏi 3</td>
													<td align="center">Câu hỏi 4</td>
													<td align="center">Câu hỏi 5</td>
                    							</tr>
												<tr>
													<td align="center">'.$answer1.'</td>
													<td align="center">'.$answer2.'</td>
													<td align="center">'.$answer3.'</td>
													<td align="center">'.$answer4.'</td>
													<td align="center">'.$answer5.'</td>
                    							</tr>
                							</table>';
										
									}
									else {
										echo 'Có đáp án chưa được chọn !';
									}
									break;	
								}	
							}
							
						?>
                    </div>
                </form>
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
                            <a href="" class="contact-link">WEBSITE NHÀ TRƯỜNG</a>
                        </li>
                        <li class="contact-item">
                            <a href="" class="contact-link">WEBSITE TRUNG TÂM QUẢN TRỊ HỆ THỐNG</a>
                        </li>
                        <li class="contact-item">
                            <a href="" class="contact-link">CỔNG THÔNG TIN HỌC SINH</a>
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