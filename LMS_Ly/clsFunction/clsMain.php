<?php
class LMS
{
	private function connect()
	{				
		$con=mysqli_connect("localhost","root","","lmsly");
  		if(!$con)
   		{
	   		die("Khong ket noi duoc den CSDL");
			exit();
		}
		else
		{			
			mysqli_set_charset($con,"utf8");
			return $con;
		}
	}
	function load_ds_lop($sql)
	{
		$link=$this->connect();
		$ketqua=mysqli_query($link,$sql);
		$i=mysqli_num_rows($ketqua);
		@mysqli_close($link);
		if($i>0)
		{
			echo '<table>
						<tr>
							<th>STT</th>
							<th>MaLop</th>
							<th>TenLop</th>
							<th>SiSo</th>
							<th>MaKhoiLop</th>
							<th>MaGV</th>
						</tr>';
			$dem=1;
			while($row=@mysqli_fetch_array($ketqua))
			{
				$MaLop=$row['MaLop'];
				$TenLop=$row['TenLop'];
				$SiSo=$row['SiSo'];
				$MaKhoiLop=$row['MaKhoiLop'];
				echo '<tr>
					  		<td>'.$dem.'</td>
							<td><a href="?MaLop='.$MaLop.'">'.$MaLop.'</a></td>
							<td><a href="?MaLop='.$MaLop.'">'.$TenLop.'</a></td>
							<td><a href="?MaLop='.$MaLop.'">'.$SiSo.'<a></td>
							<td><a href="?MaLop='.$MaLop.'">'.$MaKhoiLop.'</a></td>
					  </tr>';
					  $dem++;
								}
			echo '</table>';	
		}
		else
		{
			echo 'Đang cập nhât dữ liệu...';	
		}
	}
	function load_ds_khoilop($sql)
	{
		$link=$this->connect();
		$ketqua=mysqli_query($link,$sql);
		$i=mysqli_num_rows($ketqua);
		@mysqli_close($link);
		if($i>0)
		{
			echo '<table>
						<tr style="background-color: #AFC2FF">
							<th>STT</th>
							<th>Mã khối lớp</th>
							<th>Tên khối lớp</th>
							<th>Số lớp trong khối</th>
							<th>Ma môn học</th>
						</tr>';
			$dem=1;
			while($row=@mysqli_fetch_array($ketqua))
			{
				$MaKhoiLop=$row['MaKhoiLop'];
				$TenKhoiLop=$row['TenKhoiLop'];
				$SoLopTrongKhoi=$row['SoLopTrongKhoi'];
				$MaMH=$row['MaMH'];
				$MaQTVT=$row['MaQTVT'];
				
				echo '<tr>
							<td><a href="?MaKhoiLop='.$MaKhoiLop.'">'.$dem.'<a></td>
							<td><a href="?MaKhoiLop='.$MaKhoiLop.'">'.$MaKhoiLop.'</a></td>
							<td><a href="?MaKhoiLop='.$MaKhoiLop.'">'.$TenKhoiLop.'</a></td>			
							<td><a href="?MaKhoiLop='.$MaKhoiLop.'">'.$SoLopTrongKhoi.'</a></td>
							<td><a href="?MaKhoiLop='.$MaKhoiLop.'">'.$MaMH.'</a></td>
					  </tr>';
					  $dem++;
								}
			echo '</table>';	
		}
		else
		{
			echo 'Đang cập nhât dữ liệu...';	
		}
	}
	public function load_ds_giaovien($sql)
	{
		$link=$this->connect();
		$ketqua=mysqli_query($link,$sql);
		$i=mysqli_num_rows($ketqua);
		@mysqli_close($link);
		if($i>0)
		{
			echo '<table>
    				<tr style="background-color: #AFC2FF">
      					<th>STT</th>
      					<th>Mã giáo viên</th>
      					<th>Tên giáo viên</th>
      					<th>Mã Lớp</th>
    				</tr>';
			$dem=1;
			while($row=@mysqli_fetch_array($ketqua))
			{
				$MaGV=$row['MaGV'];
				$TenGV=$row['TenGV'];
				$MaLop=$row['MaLop'];
				echo '<tr>
						 <td><a href="?MaGV='.$MaGV.'">'.$dem.'</a></td>
						 <td><a href="?MaGV='.$MaGV.'">'.$MaGV.'</a></td>
					  	 <td><a href="?MaGV='.$MaGV.'">'.$TenGV.'</a></td>
					     <td><a href="?MaGV='.$MaGV.'">'.$MaLop.'</a></td>
					  </tr>';
					  $dem++;
								}
			echo '</table>';	
		}
		else
		{
			echo 'Đang cập nhât dữ liệu...';	
		}
	}
	function themxoasua($sql)
	{
		$link=$this->connect();
		if(mysqli_query($link, $sql))
		{
			return 1;
		}
		else
		{
			return 0;
		}		
	}
	public function laycot($sql)
	{
		
		$link=$this->connect();
		$ketqua=mysqli_query($link,$sql);
		$i=mysqli_num_rows($ketqua);
		@mysqli_close($link);
		if($i>0)
		{
			while($row=@mysqli_fetch_array($ketqua))
			{
				$MaKhoiLop=$row[0];
				$giatri=$MaKhoiLop;
			}
			return $giatri;	
		}
	}
	
	function load_ds_monhoc($sql)
	{
		$link=$this->connect();
		$ketqua=mysqli_query($link,$sql);
		$i=mysqli_num_rows($ketqua);
		@mysqli_close($link);
		if($i>0)
		{
			echo '<table>
						<tr>
							<th>STT</th>
							<th>MaMH</th>
							<th>TenMH</th>
							<th>MaGV</th>
						</tr>';
			$dem=1;
			while($row=@mysqli_fetch_array($ketqua))
			{
				$MaMH=$row['MaMH'];
				$TenMH=$row['TenMH'];
				$MaGV=$row['MaGV'];
				echo '<tr>
					  		<td><a href="?MaMH='.$MaMH.'">'.$dem.'</a></td>
							<td><a href="?MaMH='.$MaMH.'">'.$MaMH.'</a></td>
							<td><a href="?MaMH='.$MaMH.'">'.$TenMH.'</a></td>
					  </tr>';
					  $dem++;
								}
			echo '</table>';	
		}
		else
		{
			echo 'Đang cập nhât dữ liệu...';	
		}
	}
	public function loadcombo_danhmuc_giaovien($sql, $Machon)
	{
		$link=$this->connect();
		$ketqua=mysqli_query($link,$sql);
		$i=mysqli_num_rows($ketqua);
		@mysqli_close($link);
		if($i>0)
		{
			echo '<select name="giaovien" id="giaovien">';
			echo '<option>Mời chọn mục</option>';
			while($row=@mysqli_fetch_array($ketqua))
			{
				$MaGV=$row['MaGV'];
				$TenGV=$row['TenGV'];
				if($MaGV==$Machon)
				{
					echo '<option value="'.$MaGV.'" selected="selected">'.$TenGV.'</option>';
				}
				else
				{
					echo '<option value="'.$MaGV.'">'.$TenGV.'</option>';
				}
			}
			echo '</select>';	
		}
	}
	public function loadcombo_danhmuc_lop($sql, $Machon)
	{
		$link=$this->connect();
		$ketqua=mysqli_query($link,$sql);
		$i=mysqli_num_rows($ketqua);
		@mysqli_close($link);
		if($i>0)
		{
			echo '<select name="lophoc" id="lophoc">';
			echo '<option>Mời chọn mục</option>';
			while($row=@mysqli_fetch_array($ketqua))
			{
				$MaLop=$row['MaLop'];
				$TenLop=$row['TenLop'];
				if($MaLop==$Machon)
				{
					echo '<option value="'.$MaLop.'" selected="selected">'.$TenLop.'</option>';
				}
				else
				{
					echo '<option value="'.$MaLop.'">'.$TenLop.'</option>';
				}
			}
			echo '</select>';	
		}
	}
	public function loadcombo_danhmuc_khoilop($sql, $Machon)
	{
		$link=$this->connect();
		$ketqua=mysqli_query($link,$sql);
		$i=mysqli_num_rows($ketqua);
		@mysqli_close($link);
		if($i>0)
		{
			echo '<select name="khoilop" id="khoilop">';
			echo '<option>Mời chọn mục</option>';
			while($row=@mysqli_fetch_array($ketqua))
			{
				$MaKhoiLop=$row['MaKhoiLop'];
				$TenKhoiLop=$row['TenKhoiLop'];
				if($MaKhoiLop==$Machon)
				{
					echo '<option value="'.$MaKhoiLop.'" selected="selected">'.$TenKhoiLop.'</option>';
				}
				else
				{
					echo '<option value="'.$MaKhoiLop.'">'.$TenKhoiLop.'</option>';
				}
			}
			echo '</select>';	
		}
	}
	public function loadcombo_danhmuc_qtvtp($sql, $Machon)
	{
		$link=$this->connect();
		$ketqua=mysqli_query($link,$sql);
		$i=mysqli_num_rows($ketqua);
		@mysqli_close($link);
		if($i>0)
		{
			echo '<select name="quantrivien_tp" id="quantrivien_tp">';
			echo '<option>Mời chọn mục</option>';
			while($row=@mysqli_fetch_array($ketqua))
			{
				$MaQTVTP=$row['MaQTVTP'];
				$TenQTVTP=$row['TenQTV'];
				if($MaQTVTP==$Machon)
				{
					echo '<option value="'.$MaQTVTP.'" selected="selected">'.$TenQTVTP.'</option>';
				}
				else
				{
					echo '<option value="'.$MaQTVTP.'">'.$TenQTVTP.'</option>';
				}
			}
			echo '</select>';	
		}
	}
	public function loadcombo_danhmuc_monhoc($sql, $Machon)
	{
		$link=$this->connect();
		$ketqua=mysqli_query($link,$sql);
		$i=mysqli_num_rows($ketqua);
		@mysqli_close($link);
		if($i>0)
		{
			echo '<select name="monhoc" id="monhoc">';
			echo '<option>Mời chọn môn</option>';
			while($row=@mysqli_fetch_array($ketqua))
			{
				$MaMH=$row['MaMH'];
				$TenMH=$row['TenMH'];
				if($MaMH==$Machon)
				{
					echo '<option value="'.$MaMH.'" selected="selected">'.$TenMH.'</option>';
				}
				else
				{
					echo '<option value="'.$MaMH.'">'.$TenMH.'</option>';
				}
			}
			echo '</select>';	
		}
	}
}
?>