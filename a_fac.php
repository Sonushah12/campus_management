<?php

    include "con.php";

    $status = $statusMsg = ''; 
    if(isset($_POST["submit"])){ 

        echo  "test 1";
        $status = 'error'; 
        if($_FILES["image"]["name"]){ 
            // Get file info 
            $fileName = basename($_FILES["image"]["name"]); 
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 


            echo $fileName;
            echo $fileType;
             
            // Allow certain file formats 
            // $allowTypes = array('jpg','png','jpeg','gif','jpeg'); 
            // if(in_array($fileType, $allowTypes)){ 
            //     $image = $_FILES['image']['tmp_name']; 
            //     $imgContent = addslashes(file_get_contents($image)); 
             
            //     // Insert image content into database 
            //     $insert = $con->query("INSERT into images (image, created) VALUES ('$imgContent', NOW())"); 
                 
            //     if($insert){ 
            //         $status = 'success'; 
            //         echo "<script>alert('File upload succesfully....!')</script>";
            //         echo "<script>window.location.replace('admin_img.php');</script>";
            //     }else{ 
            //         $statusMsg = "File upload failed, please try again."; 
            //     }  
            // }else{ 
            //     $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
            // } 
        }else{ 
            $statusMsg = 'Please select an image file to upload.'; 
        } 
    } 
     
    // Display status message 
    echo $statusMsg;

?>
