<?php
        $db_Host="localhost";
        $db_Id="wlgP16";
        $db_Pass="wlgP0106!";
        $db_Name="wlgP16";

        $conn=mysqli_connect($db_Host,$db_Id,$db_Pass,$db_Name);
        mysqli_set_charset($conn,"utf8");
        if(mysqli_connect_errno())
                die('Connect Error : '.mysqli_connect_errno());
?>
