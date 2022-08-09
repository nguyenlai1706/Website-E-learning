<?php
  
  $conn = mysqli_connect("localhost","root","") or die ("lỗi kết nối đến server");
   mysqli_select_db($conn,"lmsly") or die ("lỗi kết nối đến database db");
   
 
  mysqli_set_charset($conn,"utf8");
?>
<?php
if(isset($_GET['MaLop']))
{ $id=$_GET['MaLop'];}

?>
<?php
if (isset($_GET['MaLop'])) {
    $MaLop = $_GET['MaLop'];
}
?>
<?php
     $sql = "select * from lophoc where MaLop='$MaLop'";
     $qr = mysqli_query($conn, $sql);
     $rs = mysqli_fetch_array($qr);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/CNDSL.css">
    <link rel="stylesheet" href="../../Font/fontawesome/css/all.css">
	<link rel="stylesheet" href="../../CSS/bootstrap.css">
    <script src="../../js/jquery-3.6.0.js"></script>
    <script src="../../js/bootstrap.js"></script>
    <title>TRANG QUẢN LÍ DANH SÁCH LỚP</title>
</head>
<body>
    <div class="container">
        
        <div class="form-login">
            <div class="logo-school">
				<center>
					<img class="img_logo" src="../../Image/logo_sysman.png" alt="LOGO QUẢN TRỊ HỆ THỐNG" style="width: 100px">
				</center>
            </div>
            <div class="title-login">
				<h1>
					CẬP NHẬT DANH SÁCH LỚP
				</h1>
            </div>
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="login-form">
                    <div class="user-login">
                        <div class="input-form">
                            <label for="" class="col-2"><h5>Tên lớp</h5></label>
                            <input type="text" class="input-tenlop" name="ten"placeholder="Nhập tên lớp" value="<?php echo $rs['TenLop'];?>">
                        </div>
                    </div>
                    <div class="pass-login">
                        <div class="input-form">
							<label for="" class="col-2"><h5>Mã lớp</h5></label>
                            <input type="text" class="input-malop" name="malop" placeholder="Nhập mã lớp" value="<?php echo $rs['MaLop'];?>">
                        </div>
                    </div>
                    <div class="pass-login">
                        <div class="input-form">
							<label for="" class="col-2"><h5>Sỉ số</h5></label>
                            <input type="text" class="input-siso" name="ss" placeholder="Nhập sỉ số"value="<?php echo $rs['SiSo'];?>" >
                        </div>
                    </div>
                    <div class="user-login">
                        <div class="input-form">
							<label for=""><h5>Mã khối lớp</h5></label>
                            <input type="text" class="input-mkl" name="makhoi"placeholder="Nhập mã khối lớp"value="<?php echo $rs['MaKhoiLop'];?>" >
                        </div>
                    </div>
                    <div class="user-login">
                        <div class="input-form">
                            <label for=""><h5>Mã GV</h5></label>
                            <input type="text" class="input-mgv"name="magv" placeholder="Nhập mã giáo viên"value="<?php echo $rs['MaGV'];?>" >
                        </div>
                    </div>
                    <div class="submit-themlop">
                        <div class="submit-form">
                            <input type="submit" class="submit-btn" name="sua"value="SỬA LỚP">
                        </div>
                    </div>
                    <!--<div class="submit-taomoi" >
                        <div class="submit-form">
                           
                           <input  type="submit" class="submit-btn" value="TẠO MỚI" >
                         
                        </div>
                 </div>-->
                    
                 <div class="other-login">
                        <div class="link-login">
                           <i></i> 
                           <i></i>
                        </div>
                        <div class="back-page">
                            <a href="../../indexSchool_admin.php" class="back-page__link">
                                <i class="fas fa-arrow-circle-left"></i> Trở về Trang chủ
                            </a>
                        </div>
                    </div>
                    
                </div><br><br><br><br><br>
				<?php
				if (isset($_POST["sua"])) {
					$ten=$_POST["ten"];
					$malop=$_POST["malop"];
					$makhoi=$_POST["makhoi"];
					$ss=$_POST["ss"];
					$magv=$_POST["magv"];



						if ( $ten != "" && $malop != "" && $makhoi != "" && $ss != "" && $magv != "" ) {
							$sql = "update lophoc set MaLop='$malop',TenLop='$ten',SiSo='$ss',MaKhoiLop='$makhoi',MaGV='$magv' where MaLop ='$MaLop'" ;
							$qr = mysqli_query($conn, $sql);
							echo header("refresh: 0;url='ViewLh.php'");
						}
						else{ echo '<center style="color: red"><h5>Lỗi!!!</h5></center>';}

				}

?>
            </form>
        </div>
    </div>
</body>
</html>

