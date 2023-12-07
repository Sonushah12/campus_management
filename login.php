<?php
    
    $email = "";
    $password = "";

    include "conn.php";

    session_start();
    
    
     if (isset($_SESSION['username'])) {
         header("Location: student_dash.php");
     }
    
    if (isset($_POST['submit'])) {

           
    
            $email = $_POST['email'];
            $password = ($_POST['password']);

     
    //  echo "$email";
    //  echo "<br>";
    //  echo "$password";
    //  echo "<br>";
    $sq1 = "SELECT * FROM `administrator` WHERE email='$email' && password='$password'";

    $result1 = mysqli_query($con, $sq1);


    $sq2 = "SELECT * FROM `faculty` WHERE email='$email' && password='$password'";

    $result2 = mysqli_query($con, $sq2);



    $sq3 = "SELECT * FROM `student` WHERE email='$email' && password='$password'";

    $result3 = mysqli_query($con, $sq3);



    $record1 = mysqli_num_rows($result1);

    $record2 = mysqli_num_rows($result2);

    $record3 = mysqli_num_rows($result3);


    if($record1 > 0)
    {
        
        $row = $result1->fetch_assoc();
        
    
       $email = $row['email'];
        $_SESSION["email"] = $email;
        
        
    
        echo "<script>window.location.replace('admin_dash.php');</script>";
    }
    elseif($record2 > 0)
    {
        $row = $result2->fetch_assoc();
    
         $name = $row['name'];
         $_SESSION["fname"] = $name;
        echo "<script>window.location.replace('faculty_dash.php');</script>";
    }
    elseif($record3 > 0)
    {
        $row = $result3->fetch_assoc();
    
       $name = $row['name'];
      
        $user_name = $row['name'];
        $_SESSION["name"] = $name;

        //sid
        //email
        //depart
        //sem
        $sid = $row['sid'];
        $_SESSION["sid"] = $sid;
        $Department = $row['Department'];
        $_SESSION["Department"] = $Department;
        $sem = $row['sem'];
        $_SESSION["sem"] = $sem;
        
        echo "<script>window.location.replace('student_dash.php');</script>";
    }
    else
    {
        echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
        echo "<script>window.location.replace('login.html');</script>";
    }

    // $record = mysqli_num_rows($result);
    // if ($record > 0) {
    //     $_SESSION['admin'] = $email;
    //     echo "<script>window.location.replace('admin_dash.php');</script>";

    // }
    // else{
    //    
    // }
            //     if ($result1->num_rows > 0 || $result2->num_rows > 0 || $result3->num_rows > 0) {
                
            //         if($result1){
            //             echo "<script>window.location.replace('admin_dash.php');</script>";
            //         }
            //         if($result2)
            //         {
            //             echo "<script>window.location.replace('faculty_dash.php');</script>";
            //         }
            //         if($result3)
            //         {
            //             echo "<script>window.location.replace('student_dash.php');</script>";   
            //         }

            // } else {

            //     echo "<script>alert('Woops! Email or Password is Wrong.')</script>";

            //         }



}
    
      
    ?>
