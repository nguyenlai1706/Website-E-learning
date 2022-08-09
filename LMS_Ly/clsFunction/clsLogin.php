<?php 

	class loginAccount {
		
		private function connect(){
			$con = mysqli_connect("localhost","root","","lmsly");
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
			$pass = md5($pass);
			$link = $this->connect();
			$sql = "select matk, username, password from taikhoan where username='$user' and password='$pass' LIMIT 1";
			$result = mysqli_query($link, $sql);
			$i = mysqli_num_rows($result);
			@mysqli_close($link);
			if($i>0) {
				while($row=@mysqli_fetch_array($result)) {
					$matk = $row['matk'];
					$user = $row['username'];
					$pass = $row['password'];
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
			$sql = "select matk from taikhoan where matk='$matk' and username='$user' and password='$pass' LIMIT 1";
			$result = mysqli_query($link, $sql);
			$i = mysqli_num_rows($result);
			if($i!=1) {
				header('location: ./Source/adminLogin.php');	
			}	
		}
			
	}

?>