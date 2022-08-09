<?php
    class ketnoi{
        function moketnoi(& $conn){
            //kết nối cơ sở dữ liệu trên localhost
            $conn = mysqli_connect("localhost","bt","123456");
            //set utf8 để đọc dữ liệu tiếng việt có dấu
            mysqli_set_charset($conn,"utf8");
            //kiểm tra nếu kết nói thành công
            if($conn){
                //chọn database cần thao tác
                return mysqli_select_db($conn,"bt");
            }else{
                return false;
            }
        }
        function dongketnoi($conn){
            mysqli_close($conn);
        }
    }
?>