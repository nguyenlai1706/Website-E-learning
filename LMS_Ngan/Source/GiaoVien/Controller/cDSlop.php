<?php
    include ("Model/mDSlop.php");
    class cCompany{
        function getAllCompany(){
            $p= new mCompany();
            $tblCompany = $p->SelectAllCompany();
            return $tblCompany;
        }
    }
?>