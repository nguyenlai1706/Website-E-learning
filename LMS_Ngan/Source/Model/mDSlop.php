<?php
    include ("ketnoi.php");
    class mCompany{
        function SelectAllCompany(){
            $p = new ketnoi();
            
            if($p->moketnoi($con)){
                
                $querystring = "Select*from lop";
                $tblCompany= mysqli_query($con,$querystring);
                return $tblCompany;
                $p->dongketnoi($con);

            }else{
                //echo "Connect Fail";
                return false;
            }
        }
    }
?>