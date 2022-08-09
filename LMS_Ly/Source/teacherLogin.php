<?php
	include("../clsFunction/clsLogin.php");
	$p = new loginAccount();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/login.css">
    <link rel="stylesheet" href="../Font/fontawesome/css/all.css">
    <title>TRANG ĐĂNG NHẬP GIÁO VIÊN</title>
</head>
<style>
	.form-login {
    width: 600px;
    height: 500px;
    background-color: #AFC2FF;
    margin-top: 200px;
    margin-left: 610px;
}
</style>
<body>
    <div class="container">
        <div class="form-login">
            <div class="logo-school">
                <img class="img_logo" src="../Image/logo_sysman.png" alt="LOGO QUẢN TRỊ HỆ THỐNG" style="width: 100px">
            </div>
            <div class="title-login">
                CỔNG ĐĂNG NHẬP GIÁO VIÊN
            </div>
            <form action="" method="post">
                <div class="login-form">
                    <div class="user-login">
                        <div class="input-form">
                            <i class="fas fa-user"></i>&nbsp;&nbsp;
                            <input type="text" class="input-user" name="username" id="username" placeholder="Nhập mã giáo viên" required>
                        </div>
                    </div>
                    <div class="pass-login">
                        <div class="input-form">
                            <i class="fas fa-key"></i>&nbsp;&nbsp;
                            <input type="password" class="input-pass" name="password" id="password" placeholder="Nhập mật khẩu giáo viên" required>
                        </div>
                    </div>
                    <div class="submit-login">
                        <div class="submit-form">
                            <input type="submit" class="submit-btn" name="btn" id="btn" value="ĐĂNG NHẬP">
                        </div>
                    </div>
                    <div class="other-login">
                        <div class="link-login">
                           <i><a class="link-student" href="studentLogin.php">Tôi là Học sinh</a></i> |
                           <i><a class="link-teacher" href="adminLogin.php">Tôi là Quản trị viên</a></i>|
							<i><a class="link-teacher" href="school_adminLogin.php">Tôi là Quản trị viên cấp trường</a></i>
                        </div>
                        <div class="back-page">
                            <a href="../index.php" class="back-page__link">
                                <i class="fas fa-arrow-circle-left"></i> Trở về Trang chủ
                            </a>
                        </div>
                    </div>
                    <div class="copyright-login">
                        &copy; 2022 - Nhóm 4. Đã đăng ký bản quyền 
                    </div>
                </div>
                <div align="center">
                	<?php 
						$btn = isset($_POST['btn'])?$_POST['btn']:'';
						switch($btn) {
							case 'ĐĂNG NHẬP': {
								$user = isset($_POST['username'])?$_POST['username']:'';
								$pass = isset($_POST['password'])?$_POST['password']:'';
								
								if($user!=''&&$pass!='') {
									if($p->myLogin($user,$pass)==1) {
										header("location: ../indexTeacher.php");	
									} 
									else {
										echo 'Đăng nhập thất bại!';	
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
    </div>
</body>
</html>