<?php
    class ketnoi{
        function moketnoi(& $conn){
            //kết nối cơ sở dữ liệu trên localhost
            $conn = mysqli_connect("localhost","nguyenlai1706","10897105");
            //set utf8 để đọc dữ liệu tiếng việt có dấu
            mysqli_set_charset($conn,"utf8");
            //kiểm tra nếu kết nói thành công
            if($conn){
                //chọn database cần thao tác
                return mysqli_select_db($conn,"nguyenlai1706");
            }else{
                return false;
            }
        }
        function dongketnoi($conn){
            mysqli_close($conn);
        }
    }
?>

