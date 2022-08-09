<?php
$id=$_GET['MaQTVT'];
$conn = mysqli_connect("localhost","nguyenlai1706","10897105");
mysqli_select_db($conn,"lmsnhom4");
            
            $tblProduct=mysqli_query($conn,"delete from quantrivien_truong where MaQTVT='$id'" ) ;
            if ( $tblProduct)
            {
                echo"<script>alert('Xóa người dùng thành công!!!')</script>";
                echo header("refresh: 0;url='viewQTTP.php.php'");
            }
            

?>

<?php
$id=$_GET['MaGV'];
$conn = mysqli_connect("localhost","nguyenlai1706","10897105");
mysqli_select_db($conn,"lmsnhom4");
            
            $tblProduct=mysqli_query($conn,"delete from giaovien where MaGV='$id'" ) ;
            if ( $tblProduct)
            {
                echo"<script>alert('Xóa người dùng thành công!!!')</script>";
                echo header("refresh: 0;url='viewQTTP.php.php'")
            }
            

?>
<?php
$id=$_GET['MaHS'];
$conn = mysqli_connect("localhost","nguyenlai1706","10897105");
mysqli_select_db($conn,"lmsnhom4");
            
            $tblProduct=mysqli_query($conn,"delete from hocsinh where MaHS='$id'" ) ;
            if ( $tblProduct)
            {
                echo"<script>alert('Xóa người dùng thành công!!!')</script>";
                echo header("refresh: 0;url='viewQTTP.php.php'");
            }
            

?>