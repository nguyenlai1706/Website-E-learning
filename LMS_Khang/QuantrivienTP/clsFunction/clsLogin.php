<?php 

	class loginAccount {
		
		private function connect(){
			$con = mysqli_connect("localhost","nguyenlai1706","10897105","lmsnhom4");
			if(!$con) {
				die("Không kết nối được với cơ sở dữ liệu!");
				exit();	
			}	
			else {
				mysqli_set_charset($con,"utf8");
				return $con;
			}
		}
		
		public function myLogin($user,$pass) {
			$pass = $pass;
			$link = $this->connect();
			$sql = "select MaTK, TenTK, MatKhau from taikhoan where TenTK='$user' and MatKhau='$pass' LIMIT 1";
			$result = mysqli_query($link, $sql);
			$i = mysqli_num_rows($result);
			@mysqli_close($link);
			if($i>0) {
				while($row=@mysqli_fetch_array($result)) {
					$matk = $row['MaTK'];
					$user = $row['TenTK'];
					$pass = $row['MatKhau'];
					session_start();
					$_SESSION['matk'] = $matk;
					$_SESSION['user'] = $user;
					$_SESSION['pass'] = $pass;
					
					header('location: index.php');	
				}	
				return 1;
			}	
			else {
				return 0;	
			}
		}
		
		public function confirmLogin($matk,$user,$pass) {
			$link = $this->connect();
			$sql = "select MaTK from taikhoan where MaTK='$matk' and TenTK='$user' and MatKhau='$pass' LIMIT 1";
			$result = mysqli_query($link, $sql);
			$i = mysqli_num_rows($result);
			if($i!=1) {
				header('location: adminLogin.php');	
			}	
		}
			
	}

?>