<?php

	class loginAccount {
		
		private function connect() {
			$con = mysql_connect("localhost", "bt", "123456");
			if(!$con) {
				echo 'Không kết nối được với cơ sở dữ liệu!';
				exit();
			}
			else {
				mysql_select_db("lms");
				mysql_query("SET NAMES UTF8");
				return $con;
			}
		}
		
		public function myLogin($user, $pass) {
			$pass = md5($pass);
			$link = $this->connect();
			$sql = "select MaTK, TenTK, MatKhau from taikhoan where TenTK='$user' and MatKhau='$pass' LIMIT 1";
			$result = mysql_query($sql, $link);
			$i = mysql_num_rows($result);
			if($i>0) {
				while($rows = mysql_fetch_array($result)) {
					$id = $rows['MaTK'];
					$user = $rows['TenTK'];
					$pass = $rows['MatKhau'];
					session_start();
					$_SESSION['MaTK'] = $id;
					$_SESSION['TenTK'] = $user;
					$_SESSION['MatKhau'] = $pass;
					header('location: QTVTP.php');
				}
				return 1;
			}
			else {
				return 0;
			}
		}
		
		public function confirmLogin($user, $pass) {
			$link = $this->connect();
			$sql = "select MaTK from taikhoan where MaTK='$id' and TenTK='$user' and MatKhau='$pass' LIMIT 1";
			$result = mysql_query($sql, $link);
			$i = mysql_num_rows($result);
			if($i!=1) {
				header('location: adminLogin.php');
			}
		}
		
	}

?>