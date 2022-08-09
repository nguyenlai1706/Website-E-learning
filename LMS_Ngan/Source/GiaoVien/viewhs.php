<?php
$conn = mysqli_connect("localhost","nguyenlai1706","10897105") or die ("lỗi kết nối đến server");
    mysqli_select_db($conn,"lmsnhom4") or die ("lỗi kết nối đến database db");
    mysqli_set_charset($conn,"utf8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/mau.css">
    <link rel="stylesheet" href="../Font/fontawesome/css/all.min.css">
    <title></title>

    <style>
     
   
    .lop:hover
    {
        background:pink;
        
    }
    a
    {color: black;
        text-decoration: none;
    }
    a:hover
    {color: red;
        text-decoration: none;
    }
    </style>
</head>
<body>
<table style="margin: auto; width: 700px; text-align: center; "border="solid"  class="" >
      
      <tr style=" background: pink;">
          <th>Mã Học Sinh</th> 
          <th>Họ Tên</th>
          <th>Điểm Thường Kỳ</th>
          <th>Điểm Giữa Kỳ</th>
          <th>Điểm Cuối Kỳ</th>
          <th>Điểm Trung Bình</th>
      </tr>
      
      <?php
       
   
   
          $sql ="select * from hocsinh";
          $qr = mysqli_query($conn,$sql); 
          while($row = mysqli_fetch_assoc($qr))
      {
      ?>
      <tr>
          <td class=""><?php echo $row["MaHS"];?></td>
          <td> <?php echo $row["TenHS"];?></td>
          <td><?php echo $row["DiemTK"];?></td>
          <td><?php echo $row["DiemGK"];?></td>
          <td><?php echo $row["DiemCK"];?></td>
          <td><?php echo $row["DiemTB"];?></td>
      </tr>
      <?php
       }?>
     
      </table>
</body>
</html>