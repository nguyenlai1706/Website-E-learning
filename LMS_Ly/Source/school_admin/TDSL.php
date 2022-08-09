<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/TDSL.css">
    <link rel="stylesheet" href="../../Font/fontawesome/css/all.css">
	<link rel="stylesheet" href="../../CSS/bootstrap.css">
    <script src="../../js/jquery-3.6.0.js"></script>
    <script src="../../js/bootstrap.js"></script>
    <title>TRANG QUẢN LÍ DANH SÁCH LỚP</title>
</head>
<script>
    var count=1;
  $(document).ready(function()
  {
    function ktt()
        {
            var regten=/^(([1-9]{1})([A-Z]{1})([1-9]{1}))$/;
            var ten=$("#txtten").val();
            if(regten.test(ten))
            {
                $("#t").html("*")
               return true;
            }
            else
            {
                $("#t").html("Sai")
                return false;
            }
        }
        $("#txtten").blur(ktt)
        //-------------//
        function ktm()
        {
            var regten=/^(([1-9]{1})([A-Z]{1})([1-9]{1})([A-Z]{2,3}))$/;
            var ten=$("#txtma").val();
            if(regten.test(ten))
            {
                $("#m").html("*")
               return true;
            }
            else
            {
                $("#m").html("Sai")
                return false;
            }
        }
        $("#txtma").blur(ktm)
        //-----------//
        function ktss()
        {
            var regten=/^(([1-9]{2}))$/;
            var ten=$("#ss").val();
            if(regten.test(ten))
            {
                $("#sis").html("*")
               return true;
            }
            else
            {
                $("#sis").html("Sai")
                return false;
            }
        }
        $("#ss").blur(ktss)
        //----------//
        function ktk()
        {
            var regten=/^(([0])([1-9]{1})([A-Z]{2,3}))$/;
            var ten=$("#makhoi").val();
            if(regten.test(ten))
            {
                $("#mk").html("*")
               return true;
            }
            else
            {
                $("#mk").html("Sai")
                return false;
            }
        }
        $("#makhoi").blur(ktk)
        //------------//
        function ktgv()
        {
            var regten=/^(([G][V])([0])([1-9]{1})([A-Z]{2,3}))$/;
            var ten=$("#magv").val();
            if(regten.test(ten))
            {
                $("#mgv").html("*")
               return true;
            }
            else
            {
                $("#mgv").html("Sai")
                return false;
            }
        }
        $("#magv").blur(ktgv)
        //------------//
        
    })
</script>
<body>

        <div class="container">
        <div class="form-login">
            <div class="logo-school">
				<center>
					<img class="img_logo" src="../../Image/logo_sysman.png" alt="LOGO QUẢN TRỊ HỆ THỐNG" style="width: 80px">
				</center>
            </div>
            <div class="title-login">
				<h1>TẠO DANH SÁCH LỚP</h1>
            </div>
            <form action="#" method="post" enctype="multipart/form-data" >
                <div class="login-form">
                    <div class="user-login">
                        <div class="input-form">
							<label for="" class="col-2"><h5>Tên lớp</h5></label>
                            <input type="text" class="input-tenlop" id="txtten" name="ten"placeholder="Nhập tên lớp VD:8A1" require >
                            <div id="t"></div>
                        </div>
                    </div>
                    <div class="pass-login">
                        <div class="input-form">
                            <label for="" class="col-2"><h5>Mã lớp</h5></label>
                            <input type="text" class="input-malop" id ="txtma"name="malop" placeholder="Nhập mã lớp VD:8A1LNK" require>
                        <div id="m"></div>
                        </div>
                    </div>
                    <div class="pass-login">
                        <div class="input-form">
                            <label for="" class="col-2"><h5>Sỉ số</h5></label>
                            <input type="text" class="input-siso" id="ss" name="ss" placeholder="Nhập sỉ số VD:40 " require>
                            <div id="sis"></div>
                        </div>
                    </div>
                    <div class="user-login">
                        <div class="input-form">
							<label for=""><h5>Mã khối lớp</h5></label>
                            <input type="text" class="input-mkl" id="makhoi"name="makhoi"placeholder="Nhập mã khối lớp VD:08LNK" require >
                            <div id="mk"></div>
                        </div>
                    </div>
                    <div class="user-login">
                        <div class="input-form">
                            <label for=""class="col-2"><h5>Mã GV</h5></label>
                            <input type="text" class="input-mgv" id="magv"name="magv" placeholder="Nhập mã giáo viên VD:GV03LNK" require >
                            <div id="mgv"></div>
                        </div>
                    </div>
                    <div class="submit-themlop">
                        <div class="submit-form">
                            <input type="submit" class="submit-btn" name="them"value="THÊM LỚP">
                        </div>
                    </div>
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
				$con = mysqli_connect("localhost","root","");
				mysqli_select_db($con,"lmsly");
				mysqli_set_charset($con,"utf8");

				   $qr=mysqli_query($con,"select * from lophoc");
					if(isset($_REQUEST["them"])){

						$ten=isset($_REQUEST['ten'])? $_REQUEST["ten"]:'';
						$malop=isset($_REQUEST['malop'])?$_REQUEST["malop"]:'';
						$makhoi=$_REQUEST["makhoi"];
						$ss=$_REQUEST["ss"];
						$magv=$_REQUEST["magv"];
						if ( $ten != "" && $malop != "" && $makhoi != ""&& $ss!="" && $magv!="" ) 
						{
							$sql= "insert into lophoc(MaLop,TenLop,SiSo,MaKhoiLop,MaGV) values ('$malop', '$ten', '$ss', '$makhoi','$magv')" ;
							$query=mysqli_query($con,$sql);
							echo"<script>alert('Thêm Thành công!!!')</script>";
							echo '<script>window.location.href="ViewLh.php"</script>';

						}
						else{echo '<center style="color: red"><h5>Lỗi!!!</h5></center>';}}   
				?>
            </form>
        </div>
    </div>
</body>
</html>
