<?php

  $con = mysqli_connect("localhost","nguyenlai1706","10897105");
   mysqli_select_db($con,"lmsnhom4");
   mysqli_set_charset($con,"utf8");
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
    <table style="margin: auto; width: 500px; text-align: center; background:rgb(246, 243, 245);" border="solid"class="" >
        <tr style="color:rgb(220, 145, 34);"><h2  style="text-align:center; color:blue;">DANH SÁCH CÁC LỚP</h2>
            <th>Mã Lớp</th> 
            <th>Tên Lớp</th>
        </tr>
        <?php
            $sql ="select * from lophoc";
            $qr = mysqli_query($con,$sql); 
            while($row = mysqli_fetch_assoc($qr))
        {
        ?>
        <tr>
        <td class="lop"><?php echo "<a href='viewlop.php?malop=".$row['malop']."'>".$row['malop']."</a>";?></a></td>
            <td><?php echo $row["tenlop"];?></td> 
            
        </tr>
        <?php
         }?>
    </table>
</body>
</html>