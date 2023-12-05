<?php
        include "con.php";
      
        $id = $_GET['id'];
        // echo $id;
        // echo $id;
        // $sq1 = "DELETE FROM `temp_faculty` WHERE `fid`=$id";
        $sq2 = "DELETE FROM `fees` WHERE `af_id`=$id";
        // $result = $con->query($sq1);
        $result1 = $con->query($sq2);
        if($result1)
        {
            echo "<script>alert('Fees deleted succesfully...!!!.')</script>";
            echo "<script>window.location.replace('see_fees.php');</script>";
        }
        else{
            echo "<script>alert('Something went wrong...!!!.')</script>";
            echo "<script>window.location.replace('see_fees.php');</script>";  
        }
?>