<?php 

	class LMS {
	
		private function connect(){
			$con = mysqli_connect("localhost","nguyenlai1706","10897105","lmsnhom4");
			if(!$con) {
				die("Không kết nối được với CSDL!");
				exit();	
			}	
			else {
				mysqli_set_charset($con,"utf8");
				return $con;
			}
		}
		
		public function buildEssay($sql) {
			$link = $this->connect();
			if(mysqli_query($link, $sql)) {
				return 1;	
			}	
			else {
				return 0;	
			}
		}

		public function buildMulti($sql) {
			$link = $this->connect();
			if(mysqli_query($link, $sql)) {
				return 1;
			}
			else {
				return 0;
			}
		}
		
		public function loadCombo_KhoiLop($sql) {
			$link = $this->connect();
			$result = mysqli_query($link, $sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				echo '<select name="codeKL" id="codeKL" class="form-control">';
				echo '<option>Chọn mã khối lớp</option>';
				while($row = @mysqli_fetch_array($result)) {
					$makhoilop = $row['makhoilop'];
					
					echo '<option value="'.$makhoilop.'">'.$makhoilop.'</option>';
					
				}	
				echo '</select>';
			}
		}
		
		public function loadCombo_MonHoc($sql) {
			$link = $this->connect();
			$result = mysqli_query($link, $sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				echo '<select name="codeMH" id="codeMH" class="form-control">';
				echo '<option>Chọn mã môn học</option>';
				while($row = @mysqli_fetch_array($result)) {
					$mamonhoc = $row['mamonhoc'];
					
					echo '<option value="'.$mamonhoc.'">'.$mamonhoc.'</option>';
					
				}	
				echo '</select>';
			}
		}
		
		public function loadCombo_GiaoVien($sql) {
			$link = $this->connect();
			$result = mysqli_query($link, $sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				echo '<select name="codeGV" id="codeGV" class="form-control">';
				echo '<option>Chọn tên giáo viên</option>';
				while($row = @mysqli_fetch_array($result)) {
					$magiaovien = $row['magiaovien'];
					$tengiaovien = $row['tengiaovien'];
					echo '<option value="'.$magiaovien.'">'.$tengiaovien.'</option>';
					
				}	
				echo '</select>';
			}
		}
		
		public function loadMaLop($sql) {
			$link = $this->connect();
			$result = mysqli_query($link,$sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				while($row = mysqli_fetch_array($result)) {
					$malop = $row['malop'];
					echo $malop;
				}	
			}	
			else {
				echo 'Không có dữ liệu';	
			}
		}
		
		public function loadTimeStartExam($sql) {
			$link = $this->connect();
			$result = mysqli_query($link,$sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				while($row=mysqli_fetch_array($result)) {
					$timeStartExam = $row['thoigianbd_kt'];	
					echo $timeStartExam;
				}	
			}
			else {
				echo 'Không có dữ liệu!';	
			}		
		
		}
		
		public function loadTimeEndExam($sql) {
			$link = $this->connect();
			$result = mysqli_query($link,$sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				while($row = mysqli_fetch_array($result)) {
					$timeEndExam = $row['thoigiankt_kt'];
					echo $timeEndExam;	
				}	
			}
			else {
				echo 'Không có dữ liệu!';	
			}	
		}
		
		public function loadTimesExam($sql) {
			$link = $this->connect();
			$result = mysqli_query($link,$sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				while($row = mysqli_fetch_array($result)) {
					$timesExam = $row['solankt'];
					echo $timesExam.' lần';	
				}
			}
			else {
				echo 'Không có dữ liệu!';	
			}		
		}
		
		public function loadCodeExam($sql) {
			$link = $this->connect();
			$result = mysqli_query($link,$sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				while($row = mysqli_fetch_array($result)) {
					$codeExam = $row['made'];
					echo $codeExam;	
				}
			}
			else {
				echo 'Không có dữ liệu!';	
			}		
		}
		
		public function loadSubjectExam($sql) {
			$link = $this->connect();
			$result = mysqli_query($link,$sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				while($row = mysqli_fetch_array($result)) {
					$subjectExam = $row['mamonhoc'];
					echo $subjectExam;	
				}
			}
			else {
				echo 'Không có dữ liệu!';	
			}		
		}
		
		public function loadQuestion($sql) {
			$link = $this->connect();
			$result = mysqli_query($link,$sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				while($row = mysqli_fetch_array($result)) {
					$question = $row['noidung'];
					echo $question;	
				}
			}
			else {
				echo 'Không có dữ liệu!';	
			}	
		}
		
		public function loadAnswer1($sql) {
			$link = $this->connect();
			$result = mysqli_query($link,$sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				while($row = mysqli_fetch_array($result)) {
					$answer1 = $row['dapan1'];
					echo $answer1;	
				}
			}
			else {
				echo 'Không có dữ liệu!';	
			}		
		}
		
		public function loadAnswer2($sql) {
			$link = $this->connect();
			$result = mysqli_query($link,$sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				while($row = mysqli_fetch_array($result)) {
					$answer2 = $row['dapan2'];
					echo $answer2;	
				}
			}
			else {
				echo 'Không có dữ liệu!';	
			}		
		}
		
		public function loadAnswer3($sql) {
			$link = $this->connect();
			$result = mysqli_query($link,$sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				while($row = mysqli_fetch_array($result)) {
					$answer3 = $row['dapan3'];
					echo $answer3;	
				}
			}
			else {
				echo 'Không có dữ liệu!';	
			}		
		}
		
		public function loadAnswer4($sql) {
			$link = $this->connect();
			$result = mysqli_query($link,$sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				while($row = mysqli_fetch_array($result)) {
					$answer4 = $row['dapan4'];
					echo $answer4;	
				}
			}
			else {
				echo 'Không có dữ liệu!';	
			}		
		}
		
		public function loadResultTest($sql) {
			$link = $this->connect();
			$result = mysqli_query($link, $sql);
			@mysqli_close($link);
			$i = mysqli_num_rows($result);
			if($i>0) {
				echo '<table id="tbl" class="table table-striped" border="1" align="center">
                            <tr align="center" valign="middle">
                                <th>STT</th>
                                <th>MÃ LỚP</th>
                                <th>MÃ HỌC SINH</th>
                                <th>TÊN HỌC SINH</th>
                                <th>ĐIỂM SỐ</th>
                            </tr>';	
				while($row = mysqli_fetch_array($result)) {
					$stt = $row['stt'];
					$malop = $row['malop'];
					$mahocsinh = $row['mahocsinh'];
					$tenhocsinh = $row['tenhocsinh'];
					$diemso = $row['diemso'];
					
					echo '<tr align="center" valign="middle">
                                <td><a href="#?id='.$stt.'">'.$stt.'</a></td>
								<td><a href="#?id='.$stt.'">'.$malop.'</a></td>
								<td><a href="#?id='.$stt.'">'.$mahocsinh.'</a></td>
								<td><a href="#?id='.$stt.'">'.$tenhocsinh.'</a></td>
								<td><a href="#?id='.$stt.'">'.$diemso.'</a></td>
                          </tr>';
				}
				echo '</table>';
			}
			else {
				echo 'Đang cập nhật dữ liệu!';	
			}	
		}
		
		
		
	}

?>