<?php
    //sonu
        include "conn.php";
      
        $id = $_GET['id'];
        // echo $id;
        // echo $id;
        // $sq1 = "DELETE FROM `temp_faculty` WHERE `fid`=$id";
        $sq2 = "DELETE FROM `temp_student` WHERE `sid`=$id";
        // $result = $con->query($sq1);
        $result1 = $con->query($sq2);
        if($result1)
        {
            echo "<script>alert('User deleted succesfully...!!!.')</script>";
            echo "<script>window.location.replace('srequets.php');</script>";
        }
        else{
            echo "<script>alert('Something went wrong...!!!.')</script>";
            echo "<script>window.location.replace('srequets.php');</script>";  
        }
?>