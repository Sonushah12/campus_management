<?php
        include "con.php";
        // $Divison = "";
        $id = $_GET['id'];
        // echo $id;
        $sql = "SELECT * FROM `images` WHERE id=$id";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {

                // echo "data found";
                $sql = "DELETE FROM `images` WHERE id=$id";
                $result = $con->query($sql);
                if($result)
                {
                    echo "<script>alert('Image deleted succesfully')</script>";
                    echo "<script>window.location.replace('admin_img.php');</script>";
                }


        } else {
            echo "No results found";
        }
        
?>