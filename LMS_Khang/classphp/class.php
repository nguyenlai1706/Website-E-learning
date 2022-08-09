<?php
class lms{
    private function connect()
	{
        $link = mysqli_connect("localhost","nguyenlai1706","10897105","lmsnhom4");
    
        if (!$link) {
            echo 'Không kết đối được với cơ sở dữ kiệu!!!';
            exit();
        }
        else{
            return $link;
        }
	}
    public function load_ds_nguoidung($sql)
	{
		$link = $this->connect();
		$ketqua = mysqli_query($link,$sql);
		mysqli_close($link);
		$i = mysqli_num_rows($ketqua);
		if($i>0)
		{
			echo '    <table class="fl-table">
			<thead>
			<tr>
				<th>STT</th>
				<th>Mã tài khoản</th>
				<th>Tên tài khoản</th>
				<th>Mật khẩu</th>
				<th>Quyền hạn</th>
				<th>Trường</th>
				<th>Ghi chú</th>
			</tr>
			</thead>';
			$dem = 1;
			while($row = mysqli_fetch_array($ketqua))
			{
				$id = $row['MaTK'];
				$tentk = $row['TenTK'];
                $matkhau = $row['MatKhau'];
				$quyenhan = $row['QuyenHan'];
				$MaQTVTP = $row['MaQTVTP'];
				echo '  <tbody>
						<tr>
							<td><a href="?id='.$id.'">'.$dem.'</a></td>
							<td><a href="?id='.$id.'">'.$id.'</td>
							<td><a href="?id='.$id.'">'.$tentk.'</td>
							<td><a href="?id='.$id.'">'.$matkhau.'</td>
							<td><a href="?id='.$id.'">'.$quyenhan.'</td>
							<td><a href="?id='.$id.'">'.$MaQTVTP.'</td>
						</tr>
						<tbody>';
				$dem++;
			}
			echo '</table>';
		}
		else
		{
			echo 'Khong co du lieu!!!';
		}
	}
    public function laycot($sql)
	{
		$link = $this->connect();
		$ketqua = mysqli_query($link,$sql);
		mysqli_close($link);
		$i = mysqli_num_rows($ketqua);
		$kq = '';
		if($i>0)
		{
			while($row = mysqli_fetch_array($ketqua))
			{
				$id = $row[0];
				$kq = $id;
			}
		}
		return $kq;
	}
    public function themxoasua($sql)
	{
		$link = $this->connect();
		if(mysqli_query($link,$sql))
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	public function loadtruonghoc($sql,$matruong)
	{
		$link = $this->connect();
		$ketqua = mysqli_query($link,$sql);
		mysqli_close($link);
		$i = mysqli_num_rows($ketqua);
		if($i>0)
		{
			echo '<select name="idtruong" id="idtruong">';
			while($row = mysqli_fetch_array($ketqua))
			{
					@$idtruong = $row['MaTruong'];
					$tentruong = $row['TenTruong'];
					if($idtruong == $matruong)
					{
						echo '<option value="'.$idtruong.'" selected="selected">'.$tentruong.'</option>';
					}
					else
					{
						echo '<option value="'.$idtruong.'">'.$tentruong.'</option>';
					}

			}
			echo '</select>';
		}
		else
		{
			echo 'Chưa có dữ liệu thương hiệu!!!';
		}
	}
}
?>