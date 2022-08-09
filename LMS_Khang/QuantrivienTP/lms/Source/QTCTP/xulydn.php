<?php
echo"<meta charset='utf-8'>";

$tk=$_REQUEST["tk"];
$pw=$_REQUEST["pass"];
if (isset($_REQUEST["dn"]) )
{	
	
	if(($_REQUEST['tk']== "admin.Lms")&&( $_REQUEST['pass']=="123456"))
	{
			
		$_session["login"]=true;
			header ("refresh:0;url='QTVTP.php'");
	}
	else
	{
			//echo"<script>alert('vui lòng đăng nhập ')</script>";
echo "vui lòng nhập lại";
		//	echo header ("refresh:0;url='dnhap.php'");
	}
}

else
{
		echo"<script>alert('b không có quyền đăng nhập vui lòng đăng ký')</script>";
		echo header ("refresh:0;url='dangky.php'");
}
?>